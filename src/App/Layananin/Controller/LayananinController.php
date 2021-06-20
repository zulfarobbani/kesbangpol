<?php

namespace App\Layananin\Controller;

use App\Layananin\Model\Layananin;
use Core\GlobalFunc;
use Symfony\Component\HttpFoundation\Request;

class LayananinController extends GlobalFunc
{
    public $model;

    public function __construct()
    {
        $this->model = new Layananin();
        
    }
    
    public function index(Request $request)
    {
        $datas = $this->model->selectAll();
        return $this->render_template('layananin/index', ['datas' => $datas]);
    }
    
    public function create(Request $request)
    {
        return $this->render_template('layananin/create');

    }
    public function store(Request $request)
    {
        $namaLayanan = $request->request->get('namaLayanan');
        $deskripsiLayanan = $request->request->get('deskripsiLayanan');
        $dateCreate = date("Y-m-d");

        $data_test = array(       
            'namaLayanan' => $namaLayanan,
            'deskripsiLayanan' => $deskripsiLayanan,
            'dateCreate' => $dateCreate
        );
        

        $this->model->create($data_test);
        
        return header("location:http://kesbangpol.com/layananin");
    }

    public function ReadOne(Request $request)
    {
        $id = $request->attributes->get('id');
        $datas = $this->model->selectOne($id);

    
        return $this->render_template('layananin/edit', ['idLayanan' => $datas['idLayanan'], 'namaLayanan'=>$datas['namaLayanan'], 'deskripsiLayanan'=>$datas['deskripsiLayanan']]);
    }
    public function update(Request $request)
    {
        $id = $request->request->get('id');
        $namaLayanan = $request->request->get('namaLayanan');
        $deskripsiLayanan = $request->request->get('deskripsiLayanan');
        
        $id = $request->attributes->get('id');
        $data_test = array(
            'namaLayanan' => $namaLayanan,
            'deskripsiLayanan' => $deskripsiLayanan,
        );
        
        
       $this->model->update($id, $data_test);

       return header("location:http://kesbangpol.com/layananin");
    }
    public function delete(Request $request)
    {
        $id = $request->attributes->get('id');
        $this->model->delete($id);


        return header("location:http://kesbangpol.com/layananin");
    }
}