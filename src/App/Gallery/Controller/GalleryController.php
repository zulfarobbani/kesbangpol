<?php

namespace App\Gallery\Controller;

use App\Gallery\Model\Gallery;
use App\Media\Model\Media;
use Core\GlobalFunc;
use Symfony\Component\HttpFoundation\Request;

class GalleryController extends GlobalFunc
{
    public $model;
    public $model2;

    public function __construct()
    {
        $this->model = new Gallery();
        $this->model2 = new Media();
        
    }
    
    public function index(Request $request)
    {
        $datas = $this->model->selectAll();
        return $this->render_template('informasi/galeri/index', ['datas' => $datas]);
    }
    
    public function create(Request $request)
    {
        return $this->render_template('informasi/galeri/create');

    }
    public function store(Request $request)
    {
        $fileupload = $_FILES['fotoGaleri'];
        $idMedia = uniqid('med');
        $namaGallery = $request->request->get('namaGallery');
        $deskripsiGallery = $request->request->get('deskripsiGallery');
        $idRelation = $request->request->get('idRelation');
        $approvalGallery = $request->request->get('approvalGallery');
        $dateCreate = date("Y-m-d");
 
        $data_test = array(       
            'namaGallery' => $namaGallery,
            'deskripsiGallery' => $deskripsiGallery,
            'idRelation' => $idRelation,
            'approvalGallery'=> $approvalGallery,
            'dateCreate' => $dateCreate,
            'idMedia' => $idMedia
        );

        
        $this->model->create($data_test);
        $this->model2->create($idMedia ,$fileupload, $dateCreate, $idRelation);
        
        return header("location:http://kesbangpol.com/informasi/galeri");
    }
    public function ReadOne(Request $request)
    {
        $id = $request->attributes->get('id');
        $datas = $this->model->selectOne($id);
        

        return $this->render_template('informasi/galeri/edit', ['idGallery' => $datas['idGallery'], 'namaGallery'=>$datas['namaGallery'], 'deskripsiGallery'=>$datas['deskripsiGallery'], 'idRelation'=>$datas['idRelation'], 'approvalGallery'=>$datas['approvalGallery']]);
    }
    public function update(Request $request)
    {
        $id = $request->request->get('id');
        $namaGallery = $request->request->get('namaGallery');
        $deskripsiGallery = $request->request->get('deskripsiGallery');
        $idRelation = $request->request->get('idRelation');
        $approvalGallery = $request->request->get('approvalGallery');

        $id = $request->attributes->get('id');
        $data_test = array(
            'namaGallery' => $namaGallery,
            'deskripsiGallery' => $deskripsiGallery,
            'idRelation' => $idRelation,
            'approvalGallery'=> $approvalGallery
        );
        
       $this->model->update($id, $data_test);

       return header("location:http://kesbangpol.com/informasi/galeri");
    }
    public function delete(Request $request)
    {
        $id = $request->attributes->get('id');
        $this->model->delete($id);


        return header("location:http://kesbangpol.com/informasi/galeri");
    }
}