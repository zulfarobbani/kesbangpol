<?php

namespace App\Kabupaten\Controller;

use App\Kabupaten\Model\Kabupaten;
use Core\GlobalFunc;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class KabupatenController extends GlobalFunc
{
    public $model;

    public function __construct()
    {
        $this->model = new Kabupaten();
    }
    
    public function index(Request $request)
    {
        $datas = $this->model->selectAll();
        return $this->render_template('kabupaten/index', ['datas' => $datas]);
    }
    
    public function create(Request $request)
    {
        return $this->render_template('kabupaten/create');
    }

    public function store(Request $request)
    {
        $namaProvinsi = $request->request->get('namaProvinsi');
        $namaKab = $request->request->get('namaKab');
        $dateCreate = date("Y-m-d");

        $data_test = array(       
            'namaProvinsi' =>$namaProvinsi,
            'namaKab' => $namaKab,
            'dateCreate' => $dateCreate
        );
        
        $this->model->create($data_test);
        
        return header("location:http://kesbangpol.com/kabupaten");
    }

    public function ReadOne(Request $request)
    {
        $id = $request->attributes->get('id');
        $datas = $this->model->selectOne($id);
        
        return $this->render_template('kabupaten/edit', ['id' => $datas['id'],'idprovinsi'=>$datas['provinsiid'], 'namaProvinsi'=>$datas['provinsiname'], 'namaKab'=>$datas['name']]);
    }
    public function update(Request $request)
    {
        $id = $request->request->get('id');
        $namaProvinsi = $request->request->get('namaProvinsi');
        $namaKab = $request->request->get('namaKab');
        
        $id = $request->attributes->get('id');
        $data_test = array(
            'namaProvinsi' => $namaProvinsi,
            'namaKab' => $namaKab
        );   
        
       $this->model->update($id, $data_test);
       
      return header("location:http://kesbangpol.com/kabupaten");
    }
    public function delete(Request $request)
    {
        $id = $request->attributes->get('id');
        $this->model->delete($id);

        return header("location:http://kesbangpol.com/kabupaten");
    }

    public function get(Request $request)
    {
        $idProvinsi = $request->attributes->get('id');
        $data = $this->model->get($idProvinsi);

        return new JsonResponse($data);
    }
}