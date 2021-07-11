<?php

namespace App\Pendidikan\Controller;

use App\Pendidikan\Model\Pendidikan;
use Core\GlobalFunc;
use Symfony\Component\HttpFoundation\Request;

class PendidikanController extends GlobalFunc
{
    public $model;

    public function __construct()
    {
        $this->model = new Pendidikan();
        
    }
    
    public function index(Request $request)
    {
        $datas = $this->model->selectAll();
        return $this->render_template('pendidikan/index', ['datas' => $datas]);
    }
    
    public function create(Request $request)
    {
       
        return $this->render_template('pendidikan/create');

    }
    public function store(Request $request)
    {
        $namaPendidikan = $request->request->get('namaPendidikan');
        $dateCreate = date("Y-m-d");

        $data_test = array(       
            'namaPendidikan' =>$namaPendidikan,
            'dateCreate' => $dateCreate
        );
        

        $this->model->create($data_test);
        
        return header("location:http://kesbangpol.com/pendidikan");
    }

    public function ReadOne(Request $request)
    {
        $id = $request->attributes->get('id');
        $datas = $this->model->selectOne($id);
        
        return $this->render_template('pendidikan/edit', ['idPendidikan' => $datas['idPendidikan'], 'namaPendidikan'=>$datas['namaPendidikan']]);
    }
    public function update(Request $request)
    {
        $id = $request->request->get('id');
        $namaPendidikan = $request->request->get('namaPendidikan');
        
        
        $id = $request->attributes->get('id');
        $data_test = array(
            'namaPendidikan' => $namaPendidikan
        );   
        
       $this->model->update($id, $data_test);
       
      return header("location:http://kesbangpol.com/pendidikan");
    }
    public function delete(Request $request)
    {
        $id = $request->attributes->get('id');
        $this->model->delete($id);


        return header("location:http://kesbangpol.com/pendidikan");
    }
}