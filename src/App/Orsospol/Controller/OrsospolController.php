<?php

namespace App\Orsospol\Controller;

use App\Orsospol\Model\Orsospol;
use App\Member\Model\Member;
use App\OrsospolKesbangpol\Model\JenisOrsospolKesbangpol;
use Core\GlobalFunc;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class OrsospolController extends GlobalFunc
{
    public $model;
    public $model1;

    public function __construct()
    {
        parent::beginSession();
        $this->model = new Orsospol();
        $this->model1 = new Member();
    }

    public function index(Request $request)
    {
        $search = $request->query->get('search');
        $where = "";
        if ($search != '' || $search != null) {
            $where.= " AND namaOrsospol LIKE '%$search%'";
        }


        $jenisOrsospol = new JenisOrsospolKesbangpol();
        $data_jenisOrsospol = $jenisOrsospol->selectAll("WHERE namaJenisorsospol = 'ORMAS'")[0];

        $datas = $this->ormas->selectAll($data_jenisOrsospol['idJenisorsospol'], $where);

        return $this->render_template('orsospol/index', ['datas' => $datas]);
    }

    public function ormas(Request $request)
    {
        $idUser = $this->session->get('idUser');
        $jenisOrsospol = new JenisOrsospolKesbangpol();
        $data_jenisOrsospol = $jenisOrsospol->selectAll("WHERE namaJenisorsospol = 'ORMAS'")[0];

        // pagination
        $page = $request->query->get('page') ? $request->query->get('page') : '1';
        $result_per_page = 20;

        $countRows = $this->model->countRows($data_jenisOrsospol['idJenisorsospol'])['count'];
        $page_first_result = ($page - 1) * $result_per_page;
        $number_of_page = ceil($countRows / $result_per_page);

        $pagination = [
            'current_page' => $page,
            'number_of_page' => $number_of_page,
            'page_first_result' => $page_first_result,
            'result_per_page' => $result_per_page,
            'countRows' => $countRows
        ];

        $datas = $this->model->selectAll($data_jenisOrsospol['idJenisorsospol'], " LIMIT " . $page_first_result . "," . $result_per_page);

        return $this->render_template('organisasi-terdaftar/ormas', ['datas' => $datas, 'pagination' => $pagination]);
    }

    public function okp(Request $request)
    {
        $jenisOrsospol = new JenisOrsospolKesbangpol();
        $data_jenisOrsospol = $jenisOrsospol->selectAll("WHERE namaJenisorsospol = 'OKP'")[0];

        // pagination
        $page = $request->query->get('page') ? $request->query->get('page') : '1';
        $result_per_page = 20;

        $countRows = $this->model->countRows($data_jenisOrsospol['idJenisorsospol'])['count'];
        $page_first_result = ($page - 1) * $result_per_page;
        $number_of_page = ceil($countRows / $result_per_page);

        $pagination = [
            'current_page' => $page,
            'number_of_page' => $number_of_page,
            'page_first_result' => $page_first_result,
            'result_per_page' => $result_per_page,
            'countRows' => $countRows
        ];
        $datas = $this->model->selectAll($data_jenisOrsospol['idJenisorsospol'], " LIMIT " . $page_first_result . "," . $result_per_page);

        return $this->render_template('organisasi-terdaftar/okp', ['datas' => $datas, 'pagination' => $pagination]);
    }
    
    public function komunitas(Request $request)
    {
        $jenisOrsospol = new JenisOrsospolKesbangpol();
        $data_jenisOrsospol = $jenisOrsospol->selectAll("WHERE namaJenisorsospol = 'Komunitas'")[0];

        // pagination
        $page = $request->query->get('page') ? $request->query->get('page') : '1';
        $result_per_page = 20;

        $countRows = $this->model->countRows($data_jenisOrsospol['idJenisorsospol'])['count'];
        $page_first_result = ($page - 1) * $result_per_page;
        $number_of_page = ceil($countRows / $result_per_page);

        $pagination = [
            'current_page' => $page,
            'number_of_page' => $number_of_page,
            'page_first_result' => $page_first_result,
            'result_per_page' => $result_per_page,
            'countRows' => $countRows
        ];
        $datas = $this->model->selectAll($data_jenisOrsospol['idJenisorsospol'], " LIMIT " . $page_first_result . "," . $result_per_page);

        return $this->render_template('organisasi-terdaftar/komunitas', ['datas' => $datas, 'pagination' => $pagination]);
    }
    public function parpol(Request $request)
    {
        $jenisOrsospol = new JenisOrsospolKesbangpol();
        $data_jenisOrsospol = $jenisOrsospol->selectAll("WHERE namaJenisorsospol = 'PARPOL'")[0];

        // pagination
        $page = $request->query->get('page') ? $request->query->get('page') : '1';
        $result_per_page = 20;

        $countRows = $this->model->countRows($data_jenisOrsospol['idJenisorsospol'])['count'];
        $page_first_result = ($page - 1) * $result_per_page;
        $number_of_page = ceil($countRows / $result_per_page);

        $pagination = [
            'current_page' => $page,
            'number_of_page' => $number_of_page,
            'page_first_result' => $page_first_result,
            'result_per_page' => $result_per_page,
            'countRows' => $countRows
        ];
        $datas = $this->model->selectAll($data_jenisOrsospol['idJenisorsospol'], " LIMIT " . $page_first_result . "," . $result_per_page);

        return $this->render_template('organisasi-terdaftar/parpol', ['datas' => $datas, 'pagination' => $pagination]);
    }

    public function create(Request $request)
    {
        $data_prov = $this->model->provinsiall();
        $jenisorsospol = $this->model->jenisorsospolall();

        return $this->render_template('orsospol/create', ['data_prov' => $data_prov, 'jenisorsospol' => $jenisorsospol]);
    }
    public function createkab(Request $request)
    {
        $data_kab1 = $request->request->get('data');

        $dataret = $this->model->kabupatenone($data_kab1);
        return new JsonResponse($dataret);
    }

    public function createkec(Request $request)
    {
        $data_kec = $request->request->get('data');

        $dataret = $this->model1->kecamatanone($data_kec);
        return new JsonResponse($dataret);
    }

    public function createkel(Request $request)
    {
        $data_kel = $request->request->get('data');

        $dataret = $this->model1->kelurahanone($data_kel);
        return new JsonResponse($dataret);
    }

    public function store(Request $request)
    {
        $idSosmed = uniqid("sos");
        $namaOrsospol = $request->request->get('namaOrsospol');
        $jenisorsospol = $request->request->get('idJenisorsospol');
        $notarisOrsospol = $request->request->get('notarisOrsospol');
        $kemenkumhamOrsospol = $request->request->get('kemenkumhamOrsospol');
        $idProvinsi = $request->request->get('idProvinsi');
        $idKab = $request->request->get('idKab');
        $idKec = $request->request->get('idKec');
        $idKel = $request->request->get('idKel');
        $npwpOrsospol = $request->request->get('npwpOrsospol');
        $bankOrsospol = $request->request->get('bankOrsospol');
        $rekeningOrsospol = $request->request->get('rekeningOrsospol');
        $alamatOrsospol = $request->request->get('alamatOrsospol');
        $emailOrsospol = $request->request->get('emailOrsospol');
        $teleponOrsospol = $request->request->get('teleponOrsospol');
        $websiteOrsospol = $request->request->get('websiteOrsospol');
        $instagram = $request->request->get('instagram');
        $facebook = $request->request->get('facebook');
        $youtube = $request->request->get('youtube');
        $twitter = $request->request->get('twitter');
        $whatsapp = $request->request->get('whatsapp');
        $telegram = $request->request->get('telegram');
        $approvalOrsospol = $request->request->get('approvalOrsospol');
        $dateCreate = date("Y-m-d");

        $data_test = array(
            'idSosmed' => $idSosmed,
            'namaOrsospol' => $namaOrsospol,
            'jenisOrsospol' => $jenisorsospol,
            'notarisOrsospol' => $notarisOrsospol,
            'kemenkumhamOrsospol' => $kemenkumhamOrsospol,
            'idProvinsi' => $idProvinsi,
            'idKab' => $idKab,
            'idKec' => $idKec,
            'idKel' => $idKel,
            'teleponOrsospol' => $teleponOrsospol,
            'npwpOrsospol' => $npwpOrsospol,
            'bankOrsospol' => $bankOrsospol,
            'rekeningOrsospol' => $rekeningOrsospol,
            'alamatOrsospol' => $alamatOrsospol,
            'emailOrsospol' => $emailOrsospol,
            'approvalOrsospol' => $approvalOrsospol,
            'instagram' => $instagram,
            'websiteOrsospol' => $websiteOrsospol,
            'facebook' => $facebook,
            'youtube' => $youtube,
            'twitter' => $twitter,
            'whatsapp' => $whatsapp,
            'telegram' => $telegram,
            'dateCreate' => $dateCreate
        );

        $this->model->create($data_test);
        $this->model->simpansosmed($data_test);

        return header("location:http://kesbangpol.com/orsospol");
    }

    public function ReadOne(Request $request)
    {
        $id = $request->attributes->get('id');
        $datas = $this->model->selectOne($id);
        $data_prov = $this->model->provinsiall();
        $jenisorsospol = $this->model->jenisorsospolall();

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

        $this->model->update($idMember, $data_test);
        $this->model->updatesosmed($idSosmed, $data_sosmed);

        return header("location:http://kesbangpol.com/member");
    }
    public function delete(Request $request)
    {
        $idOrsos = $request->attributes->get('idOrsos');
        $idSosmed = $request->attributes->get('idSosmed');
        $this->model->delete($idOrsos);
        $this->model->deletesosmed($idSosmed);

        return header("location:http://kesbangpol.com/orsospol");
    }
}
