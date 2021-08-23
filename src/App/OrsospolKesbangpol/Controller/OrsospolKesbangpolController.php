<?php

namespace App\OrsospolKesbangpol\Controller;

use App\Media\Model\Media;
use App\OrsospolKesbangpol\Model\JenisOrsospolKesbangpol;
use App\OrsospolKesbangpol\Model\OrsospolKesbangpol;
use App\Member\Model\Member;
use App\Provinsi\Model\Provinsi;
use Core\GlobalFunc;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;

class OrsospolKesbangpolController extends GlobalFunc
{
    public $ormas;

    public function __construct()
    {
        $this->ormas = new OrsospolKesbangpol();
        parent::beginSession();
    }

    public function ormas(Request $request)
    {
        $idUser = $this->session->get('idUser');
        $aliasRole = $this->session->get('aliasRole');
        $where = $aliasRole != 'kesbangpol' ? "AND idUser = '$idUser'" : "";

        $jenisOrsospol = new JenisOrsospolKesbangpol();
        $data_jenisOrssospol = $jenisOrsospol->selectAll("WHERE namaJenisorsospol = 'ORMAS'")[0];

        $datas = $this->ormas->selectAll($data_jenisOrssospol['idJenisorsospol']);

        $provinsi = new Provinsi();
        $data_provinsi = $provinsi->selectAll();

        return $this->render_template('organisasi-terdaftar/form/ormas', ['datas' => $datas, 'jenis' => $data_jenisOrssospol, 'provinsi' => $data_provinsi]);
    }

    public function komunitas(Request $request)
    {
        $idUser = $this->session->get('idUser');
        $aliasRole = $this->session->get('aliasRole');
        $where = $aliasRole != 'kesbangpol' ? "AND idUser = '$idUser'" : "";

        $jenisOrsospol = new JenisOrsospolKesbangpol();
        $data_jenisOrssospol = $jenisOrsospol->selectAll("WHERE namaJenisorsospol = 'Komunitas'")[0];
        $datas = $this->ormas->selectAll($data_jenisOrssospol['idJenisorsospol'], $where);

        $provinsi = new Provinsi();
        $data_provinsi = $provinsi->selectAll();

        return $this->render_template('organisasi-terdaftar/form/komunitas', ['datas' => $datas, 'jenis' => $data_jenisOrssospol, 'provinsi' => $data_provinsi]);
    }

    public function okp(Request $request)
    {
        $idUser = $this->session->get('idUser');
        $aliasRole = $this->session->get('aliasRole');
        $where = $aliasRole != 'kesbangpol' ? "AND idUser = '$idUser'" : "";

        $jenisOrsospol = new JenisOrsospolKesbangpol();
        $data_jenisOrssospol = $jenisOrsospol->selectAll("WHERE namaJenisorsospol = 'OKP'")[0];
        $datas = $this->ormas->selectAll($data_jenisOrssospol['idJenisorsospol'], $where);

        $provinsi = new Provinsi();
        $data_provinsi = $provinsi->selectAll();

        return $this->render_template('organisasi-terdaftar/form/okp', ['datas' => $datas, 'jenis' => $data_jenisOrssospol, 'provinsi' => $data_provinsi]);
    }

    public function parpol(Request $request)
    {
        $idUser = $this->session->get('idUser');
        $aliasRole = $this->session->get('aliasRole');
        $where = $aliasRole != 'kesbangpol' ? "AND idUser = '$idUser'" : "";

        $jenisOrsospol = new JenisOrsospolKesbangpol();
        $data_jenisOrssospol = $jenisOrsospol->selectAll("WHERE namaJenisorsospol = 'PARPOL'")[0];
        $datas = $this->ormas->selectAll($data_jenisOrssospol['idJenisorsospol'], $where);

        $provinsi = new Provinsi();
        $data_provinsi = $provinsi->selectAll();

        return $this->render_template('organisasi-terdaftar/form/parpol', ['datas' => $datas, 'jenis' => $data_jenisOrssospol, 'provinsi' => $data_provinsi]);
    }

    public function orsospolStore(Request $request)
    {
        $sosmed = $this->ormas->simpansosmed($request->request);
        $create = $this->ormas->create($request->request, $sosmed);

        $media = new Media();

        $idMedia = uniqid('med');
        $idUser = '1';
        $kemenkumhamOrsospolFile = $media->create($idMedia, $_FILES['kemenkumhamOrsospolFile'], $create, $idUser, 'kemenkumhamOrsospol');

        $idMedia = uniqid('med');
        $idUser = '1';
        $npwpOrsospolFile = $media->create($idMedia, $_FILES['npwpOrsospolFile'], $create, $idUser, 'npwpOrsospol');

        $jenisOrsospol = new JenisOrsospolKesbangpol();
        $data_jenisOrssospol = $jenisOrsospol->selectAll();
        $redirect = "";
        foreach ($data_jenisOrssospol as $key => $value) {
            if ($value['idJenisorsospol'] == $request->request->get('idJenisorsospol') && $value['namaJenisorsospol'] == 'ORMAS') {
                $redirect = "ormas";
            } else if ($value['idJenisorsospol'] == $request->request->get('idJenisorsospol') && $value['namaJenisorsospol'] == 'OKP') {
                $redirect = "okp";
            } else if ($value['idJenisorsospol'] == $request->request->get('idJenisorsospol') && $value['namaJenisorsospol'] == 'Komunitas') {
                $redirect = "komunitas";
            } else if ($value['idJenisorsospol'] == $request->request->get('idJenisorsospol') && $value['namaJenisorsospol'] == 'PARPOL') {
                $redirect = "parpol";
            }
        }

        return new RedirectResponse('/organisasi-terdaftar-kesbangpol/'.$redirect);
    }

    public function orsospolGet(Request $request)
    {
        $id = $request->attributes->get('id');
        $detail = $this->ormas->selectOne($id);
        $media = new Media();
        $detailMedia = $media->selectAll("WHERE idRelation = '$id'");

        return new JsonResponse([
            'detail' => $detail,
            'media' => $detailMedia
        ]);
    }

    public function orsospolUpdate(Request $request)
    {
        $id = $request->attributes->get('id');
        $update = $this->ormas->update($id, $request->request);
        $select = $this->ormas->selectOne($id);
        $updatesosmed = $this->ormas->updatesosmed($select['idSosialmedia'], $request->request);

        $media = new Media();

        if ($_FILES['kemenkumhamOrsospolFile']['name'] != '') {
            $selectData = $media->selectOneMedia("idRelation = '$id' AND jenisDokumen = 'kemenkumhamOrsospol");
            $deleteData = $media->delete($selectData['idMedia']);
            $deleteFile = $media->deleteFile($selectData['pathMedia']);

            $idMedia = uniqid('med');
            $idUser = '1';
            $kemenkumhamOrsospolFile = $media->create($idMedia, $_FILES['kemenkumhamOrsospolFile'], $update, $idUser, 'kemenkumhamOrsospol');
        }

        if ($_FILES['npwpOrsospolFile']['name'] != '') {
            $selectData = $media->selectOneMedia("idRelation = '$id' AND jenisDokumen = 'npwpOrsospol");
            $deleteData = $media->delete($selectData['idMedia']);
            $deleteFile = $media->deleteFile($selectData['pathMedia']);

            $idMedia = uniqid('med');
            $idUser = '1';
            $npwpOrsospolFile = $media->create($idMedia, $_FILES['npwpOrsospolFile'], $update, $idUser, 'npwpOrsospol');
        }

        $jenisOrsospol = new JenisOrsospolKesbangpol();
        $data_jenisOrssospol = $jenisOrsospol->selectAll();
        $redirect = "";
        foreach ($data_jenisOrssospol as $key => $value) {
            if ($value['idJenisorsospol'] == $request->request->get('idJenisorsospol') && $value['namaJenisorsospol'] == 'ORMAS') {
                $redirect = "ormas";
            } else if ($value['idJenisorsospol'] == $request->request->get('idJenisorsospol') && $value['namaJenisorsospol'] == 'OKP') {
                $redirect = "okp";
            } else if ($value['idJenisorsospol'] == $request->request->get('idJenisorsospol') && $value['namaJenisorsospol'] == 'Komunitas') {
                $redirect = "komunitas";
            } else if ($value['idJenisorsospol'] == $request->request->get('idJenisorsospol') && $value['namaJenisorsospol'] == 'PARPOL') {
                $redirect = "parpol";
            }
        }

        return new RedirectResponse('/organisasi-terdaftar-kesbangpol/'.$redirect);
    }

    public function orsospolDelete(Request $request)
    {
        $idOrsos = $request->attributes->get('id');
        $select = $this->ormas->selectOne($idOrsos);
        $this->ormas->delete($idOrsos);
        $this->ormas->deletesosmed($select['idSosialmedia']);

        $media = new Media();

        $selectData = $media->selectOneMedia("idRelation = '$idOrsos' AND jenisDokumen = 'kemenkumhamOrsospol");
        $deleteData = $media->delete($selectData['idMedia']);
        $deleteFile = $media->deleteFile($selectData['pathMedia']);

        $selectData = $media->selectOneMedia("idRelation = '$idOrsos' AND jenisDokumen = 'npwpOrsospol");
        $deleteData = $media->delete($selectData['idMedia']);
        $deleteFile = $media->deleteFile($selectData['pathMedia']);

        return new RedirectResponse('/organisasi-terdaftar-kesbangpol/ormas');
    }

    public function create(Request $request)
    {
        $data_prov = $this->ormas->provinsiall();
        $jenisorsospol = $this->ormas->jenisorsospolall();

        return $this->render_template('orsospol/create', ['data_prov' => $data_prov, 'jenisorsospol' => $jenisorsospol]);
    }
    public function createkab(Request $request)
    {
        $data_kab1 = $request->request->get('data');

        $dataret = $this->ormas->kabupatenone($data_kab1);
        return new JsonResponse($dataret);
    }

    public function createkec(Request $request)
    {
        $data_kec = $request->request->get('data');

        $dataret = $this->ormas1->kecamatanone($data_kec);
        return new JsonResponse($dataret);
    }

    public function createkel(Request $request)
    {
        $data_kel = $request->request->get('data');

        $dataret = $this->ormas1->kelurahanone($data_kel);
        return new JsonResponse($dataret);
    }

    public function ReadOne(Request $request)
    {
        $id = $request->attributes->get('id');
        $datas = $this->ormas->selectOne($id);
        $data_prov = $this->ormas->provinsiall();
        $jenisorsospol = $this->ormas->jenisorsospolall();

        return $this->render_template('orsospol/edit', ['datas' => $datas, 'data_prov' => $data_prov, 'jenisorsospol' => $jenisorsospol]);
    }
    public function update(Request $request)
    {
        // $id = $request->request->get('id');
        $namaMember = $request->request->get('namaMember');
        $nikMember = $request->request->get('nikMember');
        $niaMember = $request->request->get('niaMember');
        $alamatMember = $request->request->get('alamatMember');
        $idProvinsi = $request->request->get('idProvinsi');
        $idKab = $request->request->get('idKab');
        $idKec = $request->request->get('idKec');
        $idKel = $request->request->get('idKel');
        $teleponMember = $request->request->get('teleponMember');
        $fotoMember = $request->request->get('fotoMember');
        $idjabatan = $request->request->get('idjabatan');
        $idPendidikan = $request->request->get('idPendidikan');
        $idOrsospol = $request->request->get('idOrsospol');
        $instagram = $request->request->get('instagram');
        $facebook = $request->request->get('facebook');
        $youtube = $request->request->get('youtube');
        $twitter = $request->request->get('twitter');
        $whatsapp = $request->request->get('whatsapp');
        $telegram = $request->request->get('telegram');

        $idMember = $request->attributes->get('idMember');
        $idSosmed = $request->attributes->get('idSosmed');
        $data_test = array(
            'namaMember' => $namaMember,
            'nikMember' => $nikMember,
            'niaMember' => $niaMember,
            'alamatMember' => $alamatMember,
            'idProvinsi' => $idProvinsi,
            'idKab' => $idKab,
            'idKec' => $idKec,
            'idKel' => $idKel,
            'teleponMember' => $teleponMember,
            'fotoMember' => $fotoMember,
            'idjabatan' => $idjabatan,
            'idPendidikan' => $idPendidikan,
            'idOrsospol' => $idOrsospol
        );
        $data_sosmed = array(
            'instagram' => $instagram,
            'namaMember' => $namaMember,
            'facebook' => $facebook,
            'youtube' => $youtube,
            'twitter' => $twitter,
            'whatsapp' => $whatsapp,
            'telegram' => $telegram
        );

        $this->ormas->update($idMember, $data_test);
        $this->ormas->updatesosmed($idSosmed, $data_sosmed);

        return header("location:http://kesbangpol.com/member");
    }
    public function delete(Request $request)
    {
        $idOrsos = $request->attributes->get('idOrsos');
        $idSosmed = $request->attributes->get('idSosmed');
        $this->ormas->delete($idOrsos);
        $this->ormas->deletesosmed($idSosmed);

        return new RedirectResponse('/organisasi-terdaftar-kesbangpol/ormas');
    }
}
