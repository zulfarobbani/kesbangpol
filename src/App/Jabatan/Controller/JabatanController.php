<?php

namespace App\Jabatan\Controller;

use App\Jabatan\Model\Jabatan;
use Core\GlobalFunc;
use Symfony\Component\HttpFoundation\Request;

class JabatanController extends GlobalFunc
{
    public $model;

    public function __construct()
    {
        $this->model = new Jabatan();
        
    }
    
    public function index(Request $request)
    {
        $datas = $this->model->selectAll();
        return $this->render_template('jabatan/index', ['datas' => $datas]);
    }
    
    public function create(Request $request)
    {
        return $this->render_template('jabatan/create');

    }
    public function store(Request $request)
    {
        $namaJabatan = $request->request->get('namaJabatan');
        $hirarkiJabatan = $request->request->get('hirarkiJabatan');
        $dateCreate = date("Y-m-d");

        $data_test = array(       
            'namaJabatan' => $namaJabatan,
            'hirarkiJabatan' => $hirarkiJabatan,
            'dateCreate' => $dateCreate
        );
        

        $this->model->create($data_test);
        
        return header("location:http://kesbangpol.com/jabatan");
    }

    public function ReadOne(Request $request)
    {
        $id = $request->attributes->get('id');
        $datas = $this->model->selectOne($id);
        
        
        return $this->render_template('jabatan/edit', ['idJabatan' => $datas['idJabatan'], 'namaJabatan'=>$datas['namaJabatan'], 'hirarkiJabatan'=>$datas['hirarkiJabatan']]);
    }
    public function update(Request $request)
    {
        $id = $request->request->get('id');
        $namaJabatan = $request->request->get('namaJabatan');
        $hirarkiJabatan = $request->request->get('hirarkiJabatan');
        
        $id = $request->attributes->get('id');
        $data_test = array(
            'namaJabatan' => $namaJabatan,
            'hirarkiJabatan' => $hirarkiJabatan,
        );
        
        
       $this->model->update($id, $data_test);

       return header("location:http://kesbangpol.com/jabatan");
    }
    public function delete(Request $request)
    {
        $id = $request->attributes->get('id');
        $this->model->delete($id);


        return header("location:http://kesbangpol.com/jabatan");
    }
}