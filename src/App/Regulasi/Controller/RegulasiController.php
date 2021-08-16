<?php

namespace App\Regulasi\Controller;

use App\Media\Model\Media;
use App\Regulasi\Model\Regulasi;
use Core\GlobalFunc;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class RegulasiController extends GlobalFunc
{
    public $model;

    public function __construct()
    {
        $this->model = new Regulasi();
    }

    public function index(Request $request)
    {
        $datas = $this->model->selectAll();
        return $this->render_template('regulasi/index', ['datas' => $datas]);
    }

    public function create(Request $request)
    {

        return $this->render_template('regulasi/create');
    }
    public function store(Request $request)
    {
        $datas = [
            'namaRegulasi' => $request->request->get('namaRegulasi'),
        ];
        $regulasi = $this->model->create($datas);

        $media = new Media();
        $idMedia = uniqid('med');
        $idUser = '1';
        $fileRegulasi = $media->create($idMedia, $_FILES['fileRegulasi'], $regulasi, $idUser);

        return new RedirectResponse('/profile-kesbangpol');
    }

    public function ReadOne(Request $request)
    {
        $id = $request->attributes->get('id');
        $datas = $this->model->selectOne($id);

        return $this->render_template('regulasi/edit', ['idRegulasi' => $datas['idRegulasi'], 'namaRegulasi' => $datas['namaRegulasi']]);
    }

    public function update(Request $request)
    {
        // $id = $request->request->get('id');
        // $namaRegulasi = $request->request->get('namaRegulasi');

        // $id = $request->attributes->get('id');
        // $data_test = array(
        //     'namaRegulasi' => $namaRegulasi
        // );

        // $this->model->update($id, $data_test);

        // return header("location:http://kesbangpol.com/regulasi");

        $datas = [
            'namaRegulasi' => $request->request->get('namaRegulasi'),
        ];
        $id = $request->attributes->get('id');
        $regulasi = $this->model->update($id, $datas);

        if ($_FILES['fileRegulasi']['name'] != '') {
            $media = new Media();
            $selectRegulasi = $media->selectOneMedia("idRelation = '$id'");
            $deleteRegulasi = $media->delete($selectRegulasi['idMedia']);
            $deleteFileRegulasi = $media->deleteFile($selectRegulasi['pathMedia']);

            $idMedia = uniqid('med');
            $idUser = '1';
            // $this->dd($_FILES['fileRegulasi']);
            $fileRegulasi = $media->create($idMedia, $_FILES['fileRegulasi'], $regulasi, $idUser);
        }

        return new RedirectResponse('/profile-kesbangpol');
    }

    public function downloadBerkas(Request $request)
    {
        $idSakip = $request->attributes->get("id");

        $detail = $this->model->selectOne($idSakip);

        $filepath = __DIR__ . "/../../../../web/assets/media/" . $detail['pathMedia'];

        if (file_exists($filepath)) {
            $response = new Response();
            $response->headers->set('Content-type', 'application/octet-stream');
            $response->headers->set('Content-Disposition', sprintf('attachment; filename="%s"', $detail['pathMedia']));
            $response->setContent(file_get_contents($filepath));
            $response->setStatusCode(200);
            $response->headers->set('Content-Transfer-Encoding', 'binary');
            $response->headers->set('Pragma', 'no-cache');
            $response->headers->set('Expires', '0');

            return $response;
        } else {
            http_response_code(404);
            die();
        }
    }

    public function delete(Request $request)
    {
        $id = $request->attributes->get('id');
        $this->model->delete($id);

        $media = new Media();
        // select existing media sakip
        $selectSakip = $media->selectOneMedia("idRelation = '$id'");
        // delete existing media sakip
        $deleteSakip = $media->delete($selectSakip['idMedia']);
        // delete file media sakip
        $deleteFileSakip = $media->deleteFile($selectSakip['pathMedia']);

        return new RedirectResponse('/profile-kesbangpol');
    }
}
