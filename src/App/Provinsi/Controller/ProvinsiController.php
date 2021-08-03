<?php

namespace App\Provinsi\Controller;

use App\Provinsi\Model\Provinsi;
use Core\GlobalFunc;
use Symfony\Component\HttpFoundation\Request;

class ProvinsiController extends GlobalFunc
{
    public $model;

    public function __construct()
    {
        $this->model = new Provinsi();
    }
    
    public function index(Request $request)
    {
        $datas = $this->model->selectAll();
        return $this->render_template('provinsi/index', ['datas' => $datas]);
    }
    
    public function create(Request $request)
    {
       
        return $this->render_template('provinsi/create');

    }
    public function store(Request $request)
    {
        $namaProvinsi = $request->request->get('namaProvinsi');
        $dateCreate = date("Y-m-d");

        $data_test = array(       
            'namaProvinsi' =>$namaProvinsi,
            'dateCreate' => $dateCreate
        );
        

        $this->model->create($data_test);
        
        return header("location:http://kesbangpol.com/provinsi");
    }

    public function ReadOne(Request $request)
    {
        $id = $request->attributes->get('id');
        $datas = $this->model->selectOne($id);
        
        return $this->render_template('provinsi/edit', ['id' => $datas['id'], 'name'=>$datas['name']]);
    }
    public function update(Request $request)
    {
        $id = $request->request->get('id');
        $namaProvinsi = $request->request->get('namaProvinsi');
        
        
        $id = $request->attributes->get('id');
        $data_test = array(
            'namaProvinsi' => $namaProvinsi
        );   
        
       $this->model->update($id, $data_test);
       
      return header("location:http://kesbangpol.com/provinsi");
    }
    public function delete(Request $request)
    {
        $id = $request->attributes->get('id');
        $this->model->delete($id);

        return header("location:http://kesbangpol.com/provinsi");
    }
}