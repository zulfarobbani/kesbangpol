<?php

namespace App\LayananKesbangpol\Controller;

use App\Media\Model\Media;
use App\LayananKesbangpol\Model\LayananKesbangpol;
use App\LayananUnduhan\Model\LayananUnduhan;
use Core\GlobalFunc;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class LayananKesbangpolController extends GlobalFunc
{
    public $model;

    public function __construct()
    {
        $this->model = new LayananKesbangpol();
    }

    public function index(Request $request)
    {
        $datas = $this->model->selectAll();

        return $this->render_template('layanan/pendataan', ['datas' => $datas]);
    }

    public function layananKonten(Request $request)
    {
        $datas = $this->model->selectAll();
        $layananUnduhan = new LayananUnduhan();
        $data_layananUnduhan = $layananUnduhan->selectAll();

        return $this->render_template('layanan/form', ['layanan' => $datas, 'unduhan' => $data_layananUnduhan]);
    }

    public function layananKontenStore(Request $request)
    {
        $datas = [
            'namaLayanan' => $request->request->get('namaLayanan'),
            'judulLayanan' => $request->request->get('judulLayanan'),
            'deskripsiLayanan' => $request->request->get('deskripsiLayanan'),
        ];
        $layanan = $this->model->create($datas);

        $media = new Media();

        // store icon layanan
        $idMedia = uniqid('med');
        $idUser = '1';
        $iconLayanan = $media->create($idMedia, $_FILES['iconLayanan'], $layanan, $idUser);

        return new RedirectResponse('/layanan-kesbangpol');
    }

    public function layananKontenGet(Request $request)
    {
        $id = $request->attributes->get('id');
        $layanan = $this->model->selectOne($id);

        return new JsonResponse([
            'data' => $layanan
        ]);
    }

    public function layananKontenUpdate(Request $request)
    {
        $datas = [
            'namaLayanan' => $request->request->get('namaLayanan'),
            'judulLayanan' => $request->request->get('judulLayanan'),
            'deskripsiLayanan' => $request->request->get('deskripsiLayanan'),
        ];
        $id = $request->attributes->get('id');
        $layanan = $this->model->update($id, $datas);

        if ($_FILES['iconLayanan']['name'] != '') {
            $media = new Media();
            // select existing media layanan
            $selectLayanan = $media->selectOneMedia("idRelation = '$id'");
            // delete existing media layanan
            $deleteLayanan = $media->delete($selectLayanan['idMedia']);
            // delete file media layanan
            $deleteFileLayanan = $media->deleteFile($selectLayanan['pathMedia']);

            $idMedia = uniqid('med');
            $idUser = '1';
            $iconLayanan = $media->create($idMedia, $_FILES['iconLayanan'], $layanan, $idUser);
        }

        return new RedirectResponse('/layanan-kesbangpol');
    }

    public function layananKontenDelete(Request $request)
    {
        $id = $request->attributes->get('id');
        $this->model->delete($id);

        $media = new Media();
        // select existing media sakip
        $selectLayanan = $media->selectOneMedia("idRelation = '$id'");
        // delete existing media sakip
        $deleteLayanan = $media->delete($selectLayanan['idMedia']);
        // delete file media sakip
        $deleteFileLayanan = $media->deleteFile($selectLayanan['pathMedia']);

        return new RedirectResponse('/layanan-kesbangpol');
    }
}
