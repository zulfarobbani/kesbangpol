<?php

namespace App\CommentBerita\Controller;

use App\CommentBerita\Model\CommentBerita;
use App\Media\Model\Media;
use Core\GlobalFunc;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class CommentBeritaController extends GlobalFunc
{
    public $model;
    public $model2;

    public function __construct()
    {
        $this->model = new CommentBerita();
        $this->model2 = new Media();
        parent::beginSession();
    }

    public function index(Request $request)
    {
        $datas = $this->model->selectAll();
        return $this->render_template('informasi/pengumuman/index', ['datas' => $datas]);
    }

    public function create(Request $request)
    {
        return $this->render_template('informasi/pengumuman/create');
    }
    public function storeComment(Request $request)
    {
        $idBerita = $request->attributes->get('id');
        $idUser = $this->session->get('idUser');
        $this->model->create($request->request, $idBerita, $idUser);

        $this->session->getFlashBag()->add('msgSuccess', "Komentar anda berhasil di tambahkan!");

        return new RedirectResponse("/informasi/berita/" . $idBerita);
    }

    public function storeCommentonReply(Request $request)
    {
        $idComment = $request->attributes->get('id');
        $idUser = $this->session->get('idUser');
        $getComment = $this->model->selectOne($idComment);
        $getComment['commentonComment'] = $idComment;
        $getComment['countcommentComment'] = intval($getComment['countcommentComment']) + 1;

        $this->model->create($request->request, $getComment['idBerita'], $idUser, $idComment);
        $getComment['commentonComment'] = null;
        $this->model->update($getComment, $getComment['idBerita'], $idUser, $idComment);

        $this->session->getFlashBag()->add('msgSuccess', "Komentar anda berhasil di tambahkan!");

        return new RedirectResponse("/informasi/berita/" . $getComment['idBerita']);
    }

    public function ReadOne(Request $request)
    {
        $id = $request->attributes->get('id');
        $datas = $this->model->selectOne($id);

        return $this->render_template('informasi/pengumuman/edit', ['idPengumuman' => $datas['idPengumuman'], 'namaPengumuman' => $datas['namaPengumuman'], 'deskripsiPengumuman' => $datas['deskripsiPengumuman']]);
    }
    public function update(Request $request)
    {
        $id = $request->request->get('id');
        $namaPengumuman = $request->request->get('namaPengumuman');
        $deskripsiPengumuman = $request->request->get('deskripsiPengumuman');

        $id = $request->attributes->get('id');
        $data_test = array(
            'namaPengumuman' => $namaPengumuman,
            'deskripsiPengumuman' => $deskripsiPengumuman,
        );


        $this->model->update($id, $data_test);

        return new RedirectResponse("/informasi/pengumuman");
    }
    public function delete(Request $request)
    {
        $id = $request->attributes->get('id');
        $this->model->delete($id);


        return new RedirectResponse("/informasi/pengumuman");
    }

    public function detail(Request $request)
    {
        $id = $request->attributes->get('id');
        $datas = $this->model->selectOne($id);

        return $this->render_template('/informasi/pengumuman/detail', ['detail' => $datas]);
    }
}