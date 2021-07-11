<?php

namespace App\Kecamatan\Controller;

use App\Kecamatan\Model\Kecamatan;
use Core\GlobalFunc;
use Symfony\Component\HttpFoundation\Request;


class KecamatanController extends GlobalFunc
{
    public $model;

    public function __construct()
    {
        $this->model = new Kecamatan();
        
    }
    
    public function index(Request $request)
    {
        $datas = $this->model->selectAll();
        return $this->render_template('kecamatan/index', ['datas' => $datas]);
    }
    
    public function create(Request $request)
    {
       
        return $this->render_template('kecamatan/create');

    }
    public function store(Request $request)
    {
        $namaKab = $request->request->get('namaKab');
        $namaKec = $request->request->get('namaKec');
        $dateCreate = date("Y-m-d");

        $data_test = array(       
            'namaKec' =>$namaKec,
            'namaKab' => $namaKab,
            'dateCreate' => $dateCreate
        );
        

        $this->model->create($data_test);
        
        return header("location:http://kesbangpol.com/kecamatan");
    }

    public function ReadOne(Request $request)
    {
        $id = $request->attributes->get('id');
        $datas = $this->model->selectOne($id);
        
        return $this->render_template('kecamatan/edit', ['id' => $datas['id'],'idKab'=>$datas['kabupatenid'], 'namaKab'=>$datas['kabupatenname'], 'namaKec'=>$datas['name']]);
  
    }
    public function update(Request $request)
    {
        $id = $request->request->get('id');
        $namaKab = $request->request->get('namaKab');
        $namaKec = $request->request->get('namaKec');
        
        
        $id = $request->attributes->get('id');
        $data_test = array(
            'namaKec' => $namaKec,
            'namaKab' => $namaKab
        );   
        
       $this->model->update($id, $data_test);
       
      return header("location:http://kesbangpol.com/kecamatan");
    }
    public function delete(Request $request)
    {
        $id = $request->attributes->get('id');
        $this->model->delete($id);


        return header("location:http://kesbangpol.com/kecamatan");
    }
}