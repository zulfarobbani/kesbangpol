<?php

namespace App\Jenisorsospol\Controller;

use App\Jenisorsospol\Model\Jenisorsospol;
use Core\GlobalFunc;
use Symfony\Component\HttpFoundation\Request;

class JenisorsospolController extends GlobalFunc
{
    public $model;

    public function __construct()
    {
        $this->model = new Jenisorsospol();
        
    }
    
    public function index(Request $request)
    {
        $datas = $this->model->selectAll();
        return $this->render_template('jenisorsospol/index', ['datas' => $datas]);
    }
    
    public function create(Request $request)
    {
       
        return $this->render_template('jenisorsospol/create');

    }
    public function store(Request $request)
    {
        $namaJenisorsospol = $request->request->get('namaJenisorsospol');
        $dateCreate = date("Y-m-d");

        $data_test = array(       
            'namaJenisorospol' => $namaJenisorsospol,
            'dateCreate' => $dateCreate
        );
        

        $this->model->create($data_test);
        
        return header("location:http://kesbangpol.com/jenisorsospol");
    }

    public function ReadOne(Request $request)
    {
        $id = $request->attributes->get('id');
        $datas = $this->model->selectOne($id);
        
        
        return $this->render_template('jenisorsospol/edit', ['idJenisorsospol' => $datas['idJenisorsospol'], 'namaJenisorsospol'=>$datas['namaJenisorsospol']]);
    }
    public function update(Request $request)
    {
        $id = $request->request->get('id');
        $namaJenisorsospol = $request->request->get('namaJenisorsospol');
        
        
        $id = $request->attributes->get('id');
        $data_test = array(
            'namaJenisorsospol' => $namaJenisorsospol
        );   
        
       $this->model->update($id, $data_test);
       
      return header("location:http://kesbangpol.com/jenisorsospol");
    }
    public function delete(Request $request)
    {
        $id = $request->attributes->get('id');
        $this->model->delete($id);


        return header("location:http://kesbangpol.com/jenisorsospol");
    }
}