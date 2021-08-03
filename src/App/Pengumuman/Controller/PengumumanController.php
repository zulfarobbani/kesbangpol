<?php

namespace App\Pengumuman\Controller;

use App\Pengumuman\Model\Pengumuman;
use App\Media\Model\Media;
use Core\GlobalFunc;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class PengumumanController extends GlobalFunc
{
    public $model;
    public $model2;

    public function __construct()
    {
        $this->model = new Pengumuman();
        $this->model2 = new Media();
        
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
    public function store(Request $request)
    {
        $fileupload = $_FILES['foto'];
        $idMedia = uniqid('med');
        $namaPengumuman = $request->request->get('namaPengumuman');
        $deskripsiPengumuman = $request->request->get('deskripsiPengumuman');
        $dateCreate = date("Y-m-d");
        $idRelation = "";

        $data_test = array(       
            'namaPengumuman' => $namaPengumuman,
            'deskripsiPengumuman' => $deskripsiPengumuman,
            'dateCreate' => $dateCreate,
            'idMedia' =>$idMedia
        );
        

        $this->model->create($data_test);
        $this->model2->create($idMedia, $fileupload, $dateCreate, $idRelation );
        
        return new RedirectResponse("/informasi/pengumuman");
    }

    public function ReadOne(Request $request)
    {
        $id = $request->attributes->get('id');
        $datas = $this->model->selectOne($id);
    
        return $this->render_template('informasi/pengumuman/edit', ['idPengumuman' => $datas['idPengumuman'], 'namaPengumuman'=>$datas['namaPengumuman'], 'deskripsiPengumuman'=>$datas['deskripsiPengumuman']]);
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