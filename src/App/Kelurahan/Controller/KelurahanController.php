<?php

namespace App\Kelurahan\Controller;

use App\Kelurahan\Model\Kelurahan;
use Core\GlobalFunc;
use Symfony\Component\HttpFoundation\Request;


class KelurahanController extends GlobalFunc
{
    public $model;

    public function __construct()
    {
        $this->model = new Kelurahan();
        
    }
    
    public function index(Request $request)
    {
        $datas = $this->model->selectAll();
        return $this->render_template('kelurahan/index', ['datas' => $datas]);
    }
    
    public function create(Request $request)
    {
       
        return $this->render_template('kelurahan/create');

    }
    public function store(Request $request)
    {
        $namaKec = $request->request->get('namaKec');
        $namaKel = $request->request->get('namaKel');
        $dateCreate = date("Y-m-d");

        $data_test = array(       
            'namaKec' =>$namaKec,
            'namaKel' => $namaKel,
            'dateCreate' => $dateCreate
        );
        

        $this->model->create($data_test);
        
        return header("location:http://kesbangpol.com/kelurahan");
    }

    public function ReadOne(Request $request)
    {
        $id = $request->attributes->get('id');
        $datas = $this->model->selectOne($id);
 
        return $this->render_template('kelurahan/edit', ['id' => $datas['id'],'idKec'=>$datas['kecamatanid'], 'namaKec'=>$datas['kecamatanname'], 'namaKel'=>$datas['name']]);
  
    }
    public function update(Request $request)
    {
        $id = $request->request->get('id');
        $namaKel = $request->request->get('namaKel');
        $namaKec = $request->request->get('namaKec');
        
        
        $id = $request->attributes->get('id');
        $data_test = array(
            'namaKec' => $namaKec,
            'namaKel' => $namaKel
        );   
        
       $this->model->update($id, $data_test);
       
      return header("location:http://kesbangpol.com/kelurahan");
    }
    public function delete(Request $request)
    {
        $id = $request->attributes->get('id');
        $this->model->delete($id);


        return header("location:http://kesbangpol.com/kelurahan");
    }
}