<?php

namespace App\GalleryKesbangpol\Controller;

use App\Chronology\Model\Chronology;
use App\GalleryDetailKesbangpol\Model\GalleryDetailKesbangpol;
use App\Media\Model\Media;
use App\GalleryKesbangpol\Model\GalleryKesbangpol;
use Core\GlobalFunc;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class GalleryKesbangpolController extends GlobalFunc
{
    public $model;
    public $idUser;
    public $namaUser;
    public $hirarkiUser;
    public $nikUser;
    public $emailUser;
    public $groupporto;

    public function __construct()
    {
        $this->model = new GalleryKesbangpol();
        parent::beginSession();
        $this->idUser = $this->session->get('idUser');
        $this->namaUser = $this->session->get('namaUser');
        $this->hirarkiUser = $this->session->get('hirarkiUser');
        $this->nikUser = $this->session->get('nikUser');
        $this->emailUser = $this->session->get('emailUser');
        $this->groupporto= new GalleryDetailKesbangpol();
    }

    public function index(Request $request)
    {
        // if ($this->emailUser == null) {
        //     return new RedirectResponse('/login');
        // }

        // pagination
        $countRows = $this->model->countRows()['count'];
        $page = $request->query->get('page') ? $request->query->get('page') : '1';
        $result_per_page = 10;
        $page_first_result = ($page-1)*$result_per_page;
        $number_of_page = ceil($countRows/$result_per_page);

        $datas = $this->model->selectAll("LIMIT ".$page_first_result.",".$result_per_page);
        $pagination = [
            'current_page' => $page,
            'number_of_page' => $number_of_page,
            'page_first_result' => $page_first_result,
            'result_per_page' => $result_per_page,
            'countRows' => $countRows
        ];

        return $this->render_template('informasi/galeri/form/index', ['datas' => $datas, 'pagination' => $pagination]);
    }

    public function create(Request $request)
    {
        // if ($this->emailUser == null) {
        //     return new RedirectResponse('/login');
        // }

        return $this->render_template('informasi/galeri/form/create');
    }
    public function store(Request $request)
    {
        // $this->dd($_FILES);
        // if ($this->emailUser == null) {
        //     return new RedirectResponse('/login');
        // }

        $create = $this->model->create($request->request);

        $media = new Media();
        $idMedia = uniqid('med');
        $fotoItem = $media->create($idMedia, $_FILES['coverGallery'], $create, $this->idUser);
        // $this->dd($request->request);

        $detail = new GalleryDetailKesbangpol();
        foreach ($_FILES['fotoDetail']['name'] as $key => $value) {
            $createDetail = $detail->create($request->request->get('deskripsiDetail')[$key], $request->request->get('namaDetail')[$key], $create);

            // store foto portofolio
            $idMedia = uniqid('med');
            $fotoItem = $detail->createMediaDetail($idMedia, $_FILES['fotoDetail'], $createDetail, $this->idUser, $key);
        }

        // create chronlogy
        $chronology = new Chronology();
        $message = $this->model->chronologyMessage('store', $this->idUser, [
            'portofolio' => $create
        ]);
        $createChronology = $chronology->create($message, $create);

        return new RedirectResponse('/informasi-kesbangpol/gallery');
    }
    public function edit(Request $request)
    {
        // if ($this->emailUser == null) {
        //     return new RedirectResponse('/login');
        // }

        $id = $request->attributes->get('id');
        $datas = $this->model->selectOne($id);

        return $this->render_template('informasi/galeri/form/edit', ['datas' => $datas]);
    }
    public function update(Request $request)
    {
        // $this->dd($request->request);
        // if ($this->emailUser == null) {
        //     return new RedirectResponse('/login');
        // }

        $id = $request->attributes->get('id');
        $indukExisting = $this->model->selectOne($id);
        // $this->dd($request->request);

        $idGallerydetail = explode(',', $request->request->get('idGallerydetail'));
        $detailExisting = new GalleryDetailKesbangpol();
        $get_detailExisting = $detailExisting->selectAll("WHERE idGallery = '$id'");
        $media = new Media();

        // pengecekan detail data yang statusnya di hapus
        foreach ($get_detailExisting as $key => $value) {
            foreach ($idGallerydetail as $key1 => $value1) {
                if ($value1 == $value['idGallerydetail']) {
                    $exsist = true;
                    break;
                } else {
                    $exsist = false;
                }
            }
            if (!$exsist) {
                // delete detail media
                $selectMedia = $media->selectOneMedia("idRelation = '" . $value['idGallerydetail'] . "'");
                $deleteMediaData = $media->delete($selectMedia['idMedia']);
                $deleteMediaFile = $media->deleteFile($selectMedia['pathMedia']);
                // delete detail data
                $detailExisting->delete($value['idGallerydetail']);
            }
        }

        // pengecekan detail data yang statusnya di rubah
        foreach ($idGallerydetail as $key => $value) {
            // check apakah foto dirubah
            if ($_FILES['fotoDetail_' . $value] && ($_FILES['fotoDetail_' . $value]['name'] != '')) {
                // delete detail media
                $selectMedia = $media->selectOneMedia("idRelation = '" . $value . "'");
                $deleteMediaData = $media->delete($selectMedia['idMedia']);
                $deleteMediaFile = $media->deleteFile($selectMedia['pathMedia']);
                // store detail media
                $idMedia = uniqid('med');
                $storeMedia = $media->create($idMedia, $_FILES['fotoDetail_' . $value], $value, $this->idUser);
            }
            // update deskripsi detail
            $detailExisting->updateDetail($value, $request->request->get('deskripsiDetail_' . $value), $request->request->get('namaDetail_' . $value));
        }

        // store detail data yang statusnya di tambah
        if (isset($_FILES['fotoDetail'])) {
            foreach ($_FILES['fotoDetail']['name'] as $key => $value) {
                // store detail data
                $createDetail = $detailExisting->create($request->request->get('deskripsiDetail')[$key], $request->request->get('deskripsiDetail')[$key], $id);
                // store detail media
                $idMedia = uniqid('med');
                $storeMediaCustom = $detailExisting->createMediaDetail($idMedia, $_FILES['fotoDetail'], $createDetail, $this->idUser, $key);
            }
        }

        // update data induk
        $item = $this->model->update($id, $request->request);
        // check apakah foto induk dirubah
        if ($_FILES['coverGallery']['name'] != '') {
            // delete induk media
            $selectMedia = $media->selectOneMedia("idRelation = '$id'");
            $deleteMediaData = $media->delete($selectMedia['idMedia']);
            $deleteMediaFile = $media->deleteFile($selectMedia['pathMedia']);
            // store induk media
            $idMedia = uniqid('med');
            $storeMedia = $media->create($idMedia, $_FILES['coverGallery'], $id, $this->idUser);
        }

        // create chronlogy
        $chronology = new Chronology();
        $message = $this->model->chronologyMessage('update', $this->idUser, [
            'gallery' => $indukExisting['namaGallery']
        ]);
        $createChronology = $chronology->create($message, $item);

        return new RedirectResponse('/informasi-kesbangpol/gallery');
    }
    public function delete(Request $request)
    {
        // if ($this->emailUser == null) {
        //     return new RedirectResponse('/login');
        // }

        $id = $request->attributes->get('id');
        $datas = $this->model->selectOne($id);
        $detail = new GalleryDetailKesbangpol();
        $getDetail = $detail->selectAll("WHERE idGallery = '$id'");

        $media = new Media();
        // hapus media detail
        foreach ($getDetail as $key => $value) {
            $selectMedia = $media->selectOneMedia("idRelation = '" . $value['idGallerydetail'] . "'");
            $deleteMediaData = $media->delete($selectMedia['idMedia']);
            $deleteMediaFile = $media->deleteFile($selectMedia['pathMedia']);
        }

        // hapus media induk
        $selectMedia = $media->selectOneMedia("idRelation = '" . $id . "'");
        $deleteMediaData = $media->delete($selectMedia['idMedia']);
        $deleteMediaFile = $media->deleteFile($selectMedia['pathMedia']);

        // hapus data detail
        $detail->deleteGroup($id);

        // hapus data induk
        $this->model->delete($id);

        // create chronlogy
        $chronology = new Chronology();
        $message = $this->model->chronologyMessage('delete', 'User 1', [
            'gallery' => $datas['namaGallery']
        ]);
        $createChronology = $chronology->create($message, $id);

        return new RedirectResponse('/informasi-kesbangpol/gallery');
    }

    public function get_all(Request $request)
    {
        // if ($this->emailUser == null) {
        //     return new RedirectResponse('/login');
        // }

        $datas = $this->model->selectAll();

        return new JsonResponse([
            'datas' => $datas
        ]);
    }

    public function get(Request $request)
    {
        // if ($this->emailUser == null) {
        //     return new RedirectResponse('/login');
        // }

        $id = $request->attributes->get('id');
        $data = $this->model->selectOne($id);

        $detail = new GalleryDetailKesbangpol();
        $getDetail = $detail->selectAll("WHERE idGallery = '$id'");

        return new JsonResponse([
            'data' => $data,
            'detail' => $getDetail
        ]);
    }

    public function activity(Request $request)
    {
        // if ($this->emailUser == null) {
        //     return new RedirectResponse('/login');
        // }

        $id = $request->attributes->get('id');
        $data = $this->model->selectOne($id);
        $aktivitas = new Chronology();
        $data_aktivitas = $aktivitas->selectAll("WHERE idTables = '" . $data['idItem'] . "'");

        return new JsonResponse([
            'data' => $data_aktivitas
        ]);
    }

    public function portofolioFE(Request $request){

        // pagination
        $countRows = $this->model->countRows()['count'];
        $page = $request->query->get('page') ? $request->query->get('page') : '1';
        $result_per_page = 6;
        $page_first_result = ($page-1)*$result_per_page;
        $number_of_page = ceil($countRows/$result_per_page);

        $gamars = $this->model->selectAll("LIMIT ".$page_first_result.",".$result_per_page);
        $pagination = [
            'current_page' => $page,
            'number_of_page' => $number_of_page,
            'page_first_result' => $page_first_result,
            'result_per_page' => $result_per_page,
            'countRows' => $countRows
        ];

        return $this->render_template("portofoliofe",['gamars'=>$gamars, 'pagination' => $pagination]);
    }

    public function detailPortofolio(Request $request){
        $id=$request->attributes->get('id');
        $gamars=$this->model->selectOne($id);
        $detailgamars=$this->groupporto->selectAll("WHERE idPortofolio='$id'");
        $lobagamars=$this->model->selectAll("LIMIT 4");
        shuffle($lobagamars);
        return $this->render_template("detailportofe",['gamars'=>$gamars,'lobagamars'=>$lobagamars,'detailgamars'=>$detailgamars]);
    }
}
