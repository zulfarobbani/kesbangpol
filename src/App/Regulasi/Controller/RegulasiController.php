<?php

namespace App\Regulasi\Controller;

use App\Regulasi\Model\Regulasi;
use Core\GlobalFunc;
use Symfony\Component\HttpFoundation\Request;

class RegulasiController extends GlobalFunc
{
    public $model;

    public function __construct()
    {
        $this->model = new Regulasi();
        
    }
    
    public function index(Request $request)
    {
        $datas = $this->model->selectAll();
        return $this->render_template('regulasi/index', ['datas' => $datas]);
    }
    
    public function create(Request $request)
    {
       
        return $this->render_template('regulasi/create');

    }
    public function store(Request $request)
    {
        $namaRegulasi = $request->request->get('namaRegulasi');
        $dateCreate = date("Y-m-d");

        $data_test = array(       
            'namaRegulasi' =>$namaRegulasi,
            'dateCreate' => $dateCreate
        );
        

        $this->model->create($data_test);
        return header("location:http://kesbangpol.com/regulasi");
    }

    public function ReadOne(Request $request)
    {
        $id = $request->attributes->get('id');
        $datas = $this->model->selectOne($id);
        
        return $this->render_template('regulasi/edit', ['idRegulasi' => $datas['idRegulasi'], 'namaRegulasi'=>$datas['namaRegulasi']]);
    }
    public function update(Request $request)
    {
        $id = $request->request->get('id');
        $namaRegulasi = $request->request->get('namaRegulasi');
        
        $id = $request->attributes->get('id');
        $data_test = array(
            'namaRegulasi' => $namaRegulasi
        );   
        
        $this->model->update($id, $data_test);
        
      return header("location:http://kesbangpol.com/regulasi");
    }
    public function delete(Request $request)
    {
        $id = $request->attributes->get('id');
        $this->model->delete($id);


        return header("location:http://kesbangpol.com/regulasi");
    }
}