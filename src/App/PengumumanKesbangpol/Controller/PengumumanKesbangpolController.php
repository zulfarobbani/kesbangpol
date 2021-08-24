<?php

namespace App\PengumumanKesbangpol\Controller;

use App\PengumumanKesbangpol\Model\PengumumanKesbangpol;
use App\Media\Model\Media;
use Core\GlobalFunc;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class PengumumanKesbangpolController extends GlobalFunc
{
    public $model;

    public function __construct()
    {
        $this->model = new PengumumanKesbangpol();
    }

    public function pengumumanKonten(Request $request)
    {
        $datas = $this->model->selectAll();

        return $this->render_template('informasi/pengumuman/form', ['datas' => $datas]);
    }

    public function pengumumanKontenStore(Request $request)
    {
        dd($request->request);
        $data = $request->request;
        $tagPengumuman = explode(',', $request->request->get('tagPengumuman'));
        $idUser = $this->session->get('idUser');
        $pengumuman = $this->model->create($data, $idUser);
        $timeditorberita = $this->model->createTimeditor($data, $pengumuman);
        $storetagPengumuman = $this->model->createTagpengumuman($tagPengumuman, $pengumuman);

        // store cover pengumman
        $media = new Media();
        $idMedia = uniqid('png');
        $idUser = '1';
        $fileCoverPengumuman = $media->create($idMedia, $_FILES['coverPengumuman'], $pengumuman, $idUser, 'cover_pengumuman');

        return new RedirectResponse('/informasi-kesbangpol/pengumuman');
    }

    public function pengumumanKontenGet(Request $request)
    {
        $id = $request->attributes->get('id');
        $detail = $this->model->selectOne($id);

        return new JsonResponse([
            'data' => $detail
        ]);
    }

    public function pengumumanKontenUpdate(Request $request)
    {
        $id = $request->attributes->get('id');
        $data = $request->request;
        $berita = $this->model->update($id, $data);

        if ($_FILES['coverPengumuman']['name'] != '') {
            $media = new Media();
            // select existing media coverPengumuman
            $selectcoverPengumuman = $media->selectOneMedia("idRelation = '$id'");
            // delete existing media coverPengumuman
            $deletecoverPengumuman = $media->delete($selectcoverPengumuman['idMedia']);
            // delete file media coverPengumuman
            $deleteFilecoverPengumuman = $media->deleteFile($selectcoverPengumuman['pathMedia']);

            $idMedia = uniqid('med');
            $idUser = '1';
            $filecoverPengumuman = $media->create($idMedia, $_FILES['coverPengumuman'], $berita, $idUser, 'cover_pengumuman');
        }

        return new RedirectResponse('/informasi-kesbangpol/pengumuman');
    }

    public function pengumumanKontenDelete(Request $request)
    {
        $id = $request->attributes->get('id');
        $this->model->delete($id);

        $media = new Media();
        // select existing media cover pengumuman
        $selectcoverPengumuman = $media->selectOneMedia("idRelation = '$id'");
        // delete existing media cover pengumuman
        $deletecoverPengumuman = $media->delete($selectcoverPengumuman['idMedia']);
        // delete file media cover pengumuman
        $deleteFilecoverPengumuman = $media->deleteFile($selectcoverPengumuman['pathMedia']);

        return new RedirectResponse('/informasi-kesbangpol/pengumuman');
    }
}