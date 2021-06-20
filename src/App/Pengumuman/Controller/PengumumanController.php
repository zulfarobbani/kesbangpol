<?php

namespace App\Pengumuman\Controller;

use App\Pengumuman\Model\Pengumuman;
use Core\GlobalFunc;
use Symfony\Component\HttpFoundation\Request;

class PengumumanController extends GlobalFunc
{
    public $model;

    public function __construct()
    {
        $this->model = new Pengumuman();
        
    }
    
    public function index(Request $request)
    {
        $datas = $this->model->selectAll();
        return $this->render_template('pengumuman/index', ['datas' => $datas]);
    }
    
    public function create(Request $request)
    {
        return $this->render_template('pengumuman/create');

    }
    public function store(Request $request)
    {
        $namaPengumuman = $request->request->get('namaPengumuman');
        $deskripsiPengumuman = $request->request->get('deskripsiPengumuman');
        $dateCreate = date("Y-m-d");

        $data_test = array(       
            'namaPengumuman' => $namaPengumuman,
            'deskripsiPengumuman' => $deskripsiPengumuman,
            'dateCreate' => $dateCreate
        );
        

        $this->model->create($data_test);
        
        return header("location:http://kesbangpol.com/pengumuman");
    }

    public function ReadOne(Request $request)
    {
        $id = $request->attributes->get('id');
        $datas = $this->model->selectOne($id);

    
        return $this->render_template('pengumuman/edit', ['idPengumuman' => $datas['idPengumuman'], 'namaPengumuman'=>$datas['namaPengumuman'], 'deskripsiPengumuman'=>$datas['deskripsiPengumuman']]);
    }
    public function update(Request $request)
    {
        $id = $request->request->get('id');
        $namaPengumuman = $request->request->get('namaPengumuman');
        $deskripsiPengumuman = $request->request->get('deskripsiPengumuman');
        
        $id = $request->attributes->get('id');
        $data_test = array(
            'namaPengumuman' => $namaPengumuman,
            'deskripsiPengumuman' => $deskripsiPengumuman,
        );
        
        
       $this->model->update($id, $data_test);

       return header("location:http://kesbangpol.com/pengumuman");
    }
    public function delete(Request $request)
    {
        $id = $request->attributes->get('id');
        $this->model->delete($id);


        return header("location:http://kesbangpol.com/pengumuman");
    }
}