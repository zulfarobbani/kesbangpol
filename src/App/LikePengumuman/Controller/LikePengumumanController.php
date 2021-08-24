<?php

namespace App\LikePengumuman\Controller;

use App\Berita\Model\Berita;
use App\LikePengumuman\Model\LikePengumuman;
use App\Media\Model\Media;
use App\Pengumuman\Model\Pengumuman;
use Core\GlobalFunc;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class LikePengumumanController extends GlobalFunc
{
    public $model;
    public $model2;

    public function __construct()
    {
        $this->model = new LikePengumuman();
        $this->model2 = new Media();
        parent::beginSession();
    }

    public function storeLikePengumuman(Request $request)
    {
        $id = $request->attributes->get('id');
        $idUser = $this->session->get('idUser');
        $get = $this->model->selectAll("WHERE likepengumuman.idPengumuman = '$id' AND likepengumuman.idUser = '$idUser' AND jenislikePengumuman = '1'");
        if (count($get) < 1) {
            $this->model->create($request->request, $id, $idUser, '1');
            $getDislike = $this->model->selectAll("WHERE likepengumuman.idPengumuman = '$id' AND likepengumuman.idUser = '$idUser' AND jenislikePengumuman = '2'");

            $pengumuman = new Pengumuman();
            $getPengumuman = $pengumuman->selectOne($id);
            $pengumuman->updateLike($id, [
                'countlikePengumuman' => intval($getPengumuman['countlikePengumuman']) + 1,
                'countdislikePengumuman' => count($getDislike) > 0 ? intval($getPengumuman['countdislikePengumuman']) - 1 : $getPengumuman['countdislikePengumuman'],
                'countsharePengumuman' => $getPengumuman['countsharePengumuman']
            ]);

            $this->model->delete("WHERE likepengumuman.idPengumuman = '$id' AND likepengumuman.idUser = '$idUser' AND jenislikePengumuman = '2'");
        }

        return new RedirectResponse('/informasi/pengumuman/' . $id);
    }

    public function storeDislikePengumuman(Request $request)
    {
        $id = $request->attributes->get('id');
        $idUser = $this->session->get('idUser');
        $get = $this->model->selectAll("WHERE likepengumuman.idPengumuman = '$id' AND likepengumuman.idUser = '$idUser' AND jenislikePengumuman = '2'");
        if (count($get) < 1) {
            $this->model->create($request->request, $id, $idUser, '2');
            $getLike = $this->model->selectAll("WHERE likepengumuman.idPengumuman = '$id' AND likepengumuman.idUser = '$idUser' AND jenislikePengumuman = '1'");

            $pengumuman = new Pengumuman();
            $getPengumuman = $pengumuman->selectOne($id);
            $pengumuman->updateLike($id, [
                'countlikePengumuman' => count($getLike) > 0 ? intval($getPengumuman['countlikePengumuman']) - 1 : $getPengumuman['countlikePengumuman'],
                'countdislikePengumuman' => intval($getPengumuman['countdislikePengumuman']) + 1,
                'countsharePengumuman' => $getPengumuman['countsharePengumuman']
            ]);

            $this->model->delete("WHERE likepengumuman.idPengumuman = '$id' AND likepengumuman.idUser = '$idUser' AND jenislikePengumuman = '1'");
        }

        return new RedirectResponse('/informasi/pengumuman/' . $id);
    }
}
