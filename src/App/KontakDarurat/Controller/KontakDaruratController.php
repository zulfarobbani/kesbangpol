<?php

namespace App\KontakDarurat\Controller;

use App\KontakDarurat\Model\KontakDarurat;
use App\Media\Model\Media;
use Core\GlobalFunc;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class KontakDaruratController extends GlobalFunc
{
    public $model;

    public function __construct()
    {
        $this->model = new KontakDarurat();
    }

    public function kontakdarurat(Request $request)
    {
        $datas = $this->model->selectAll();

        return $this->render_template('informasi/kontak-darurat/form', ['datas' => $datas]);
    }

    public function kontakdaruratStore(Request $request)
    {
        $data = $request->request;
        $create = $this->model->create($data);

        return new RedirectResponse('/informasi/kontak-darurat');
    }

    public function kontakdaruratGet(Request $request)
    {
        $id = $request->attributes->get('id');
        $detail = $this->model->selectOne($id);

        return new JsonResponse([
            'data' => $detail
        ]);
    }

    public function kontakdaruratUpdate(Request $request)
    {
        $id = $request->attributes->get('id');
        $data = $request->request;
        $update = $this->model->update($id, $data);

        return new RedirectResponse('/informasi/kontak-darurat');
    }

    public function kontakdaruratDelete(Request $request)
    {
        $id = $request->attributes->get('id');
        $this->model->delete($id);

        return new RedirectResponse('/informasi/kontak-darurat');
    }
}