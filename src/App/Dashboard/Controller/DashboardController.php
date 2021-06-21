<?php

namespace App\Dashboard\Controller;

use App\Dashboard\Model\Dashboard;
use Core\GlobalFunc;
use Symfony\Component\HttpFoundation\Request;

class DashboardController extends GlobalFunc
{
    public $model;

    public function __construct()
    {
        $this->model = new Dashboard();
        
    }
    public function tampil(Request $request){
        return $this->render_template('dasboard/index');
    }
    
    public function index(Request $request)
    {
        $datas = $this->model->selectAll();
        return $this->render_template('galeri/index', ['datas' => $datas]);
    }
    
    public function create(Request $request)
    {
        return $this->render_template('galeri/create');

    }
    public function store(Request $request)
    {
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
            'dateCreate' => $dateCreate
        );

        
        $this->model->create($data_test);
        
        return header("location:http://kesbangpol.com/galeri");
    }
    public function ReadOne(Request $request)
    {
        $id = $request->attributes->get('id');
        $datas = $this->model->selectOne($id);
        

        return $this->render_template('galeri/edit', ['idGallery' => $datas['idGallery'], 'namaGallery'=>$datas['namaGallery'], 'deskripsiGallery'=>$datas['deskripsiGallery'], 'idRelation'=>$datas['idRelation'], 'approvalGallery'=>$datas['approvalGallery']]);
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

       return header("location:http://kesbangpol.com/galeri");
    }
    public function delete(Request $request)
    {
        $id = $request->attributes->get('id');
        $this->model->delete($id);


        return header("location:http://kesbangpol.com/galeri");
    }
}