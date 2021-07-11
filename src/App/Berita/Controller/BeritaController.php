<?php

namespace App\Berita\Controller;

use App\Berita\Model\Berita;
use App\Media\Model\Media;
use Core\GlobalFunc;
use Symfony\Component\HttpFoundation\Request;

class BeritaController extends GlobalFunc
{
    public $model;
    public $model2;

    public function __construct()
    {
        $this->model = new Berita();
        $this->model2 = new Media();
    }
    
    public function index(Request $request)
    {
        $datas = $this->model->selectAll();
        return $this->render_template('informasi/berita/index', ['datas' => $datas]);
    }
    
    public function create(Request $request)
    {
        return $this->render_template('informasi/berita/create');
    }

    public function store(Request $request)
    {
        $fileupload = $_FILES['fotoBerita'];
        $idMedia = uniqid('med');
        $namaBerita = $request->request->get('namaBerita');
        $deskripsiBerita = $request->request->get('deskripsiBerita');
        $idRelation = $request->request->get('idRelation');
        $approvalBerita = $request->request->get('approvalBerita');
        $dateCreate = date("Y-m-d");

        $data_test = array( 
            'idMedia' => $idMedia,      
            'namaBerita' => $namaBerita,
            'deskripsiBerita' => $deskripsiBerita,
            'idRelation' => $idRelation,
            'approvalBerita'=> $approvalBerita,
            'dateCreate' => $dateCreate
        );

        
        $this->model->create($data_test);
        $this->model2->create($idMedia,$fileupload, $dateCreate, $idRelation);
        
        return header("location:http://kesbangpol.com/informasi/berita");
    }

    public function ReadOne(Request $request)
    {
        $id = $request->attributes->get('id');
        $datas = $this->model->selectOne($id);
        
        return $this->render_template('informasi/berita/edit', ['idBerita' => $datas['idBerita'], 'namaBerita'=>$datas['namaBerita'], 'deskripsiBerita'=>$datas['deskripsiBerita'], 'idRelation'=>$datas['idRelation'], 'approvalBerita'=>$datas['approvalBerita']]);
    }

    public function detail(Request $request) {
        $id = $request->attributes->get('id');
        $datas = $this->model->selectOne($id);
        
        return $this->render_template('informasi/berita/detail', ['detail_berita' => $datas]);
    }

    public function update(Request $request)
    {
        $id = $request->request->get('id');
        $namaBerita = $request->request->get('namaBerita');
        $deskripsiBerita = $request->request->get('deskripsiBerita');
        $idRelation = $request->request->get('idRelation');
        $approvalBerita = $request->request->get('approvalBerita');

        $id = $request->attributes->get('id');
        $data_test = array(
            'namaBerita' => $namaBerita,
            'deskripsiBerita' => $deskripsiBerita,
            'idRelation' => $idRelation,
            'approvalBerita'=> $approvalBerita
        );
        
       $this->model->update($id, $data_test);

       return header("location:http://kesbangpol.com/informasi/berita");
    }

    public function delete(Request $request)
    {
        $id = $request->attributes->get('id');
        $this->model->delete($id);


        return header("location:http://kesbangpol.com/informasi/berita");
    }
}