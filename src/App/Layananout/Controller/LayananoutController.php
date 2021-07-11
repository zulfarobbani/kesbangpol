<?php

namespace App\Layananout\Controller;

use App\Layananout\Model\Layananout;
use Core\GlobalFunc;
use Symfony\Component\HttpFoundation\Request;

class LayananoutController extends GlobalFunc
{
    public $model;

    public function __construct()
    {
        $this->model = new Layananout();
        
    }
    
    public function index(Request $request)
    {
        $datas = $this->model->selectAll();
        return $this->render_template('layananout/index', ['datas' => $datas]);
    }
    
    public function create(Request $request)
    {
        return $this->render_template('layananout/create');

    }
    public function store(Request $request)
    {
        $namaLayanan = $request->request->get('namaLayanan');
        $urlLayanan = $request->request->get('urlLayanan');
        $dateCreate = date("Y-m-d");

        $data_test = array(       
            'namaLayanan' => $namaLayanan,
            'urlLayanan' => $urlLayanan,
            'dateCreate' => $dateCreate
        );
        

        $this->model->create($data_test);
        
        return header("location:http://kesbangpol.com/layananout");
    }

    public function ReadOne(Request $request)
    {
        $id = $request->attributes->get('id');
        $datas = $this->model->selectOne($id);

    
        return $this->render_template('layananout/edit', ['idLayanan' => $datas['idLayanan'], 'namaLayanan'=>$datas['namaLayanan'], 'urlLayanan'=>$datas['urlLayanan']]);
    }
    public function update(Request $request)
    {
        $id = $request->request->get('id');
        $namaLayanan = $request->request->get('namaLayanan');
        $urlLayanan = $request->request->get('urlLayanan');
        
        $id = $request->attributes->get('id');
        $data_test = array(
            'namaLayanan' => $namaLayanan,
            'urlLayanan' => $urlLayanan,
        );
        
        
       $this->model->update($id, $data_test);

       return header("location:http://kesbangpol.com/layananout");
    }
    public function delete(Request $request)
    {
        $id = $request->attributes->get('id');
        $this->model->delete($id);


        return header("location:http://kesbangpol.com/layananout");
    }
}