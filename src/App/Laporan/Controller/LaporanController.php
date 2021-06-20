<?php

namespace App\Laporan\Controller;

use App\Laporan\Model\Laporan;
use Core\GlobalFunc;
use Symfony\Component\HttpFoundation\Request;

class LaporanController extends GlobalFunc
{
    public $model;

    public function __construct()
    {
        $this->model = new Laporan();
        
    }
    
    public function index(Request $request)
    {
        $datas = $this->model->selectAll();
        return $this->render_template('laporan/index', ['datas' => $datas]);
    }
    
    public function create(Request $request)
    {
        return $this->render_template('laporan/create');

    }
    public function store(Request $request)
    {
        $idOrsospol = $request->request->get('idOrsospol');
        $tahunLaporan = $request->request->get('tahunLaporan');
        $dateCreate = date("Y-m-d");

        $data_test = array(       
            'idOrsospol' => $idOrsospol,
            'tahunLaporan' => $tahunLaporan,
            'dateCreate' => $dateCreate
        );
        

        $this->model->create($data_test);
        
        return header("location:http://kesbangpol.com/laporan");
    }

    public function ReadOne(Request $request)
    {
        $id = $request->attributes->get('id');
        $datas = $this->model->selectOne($id);
        
        
        return $this->render_template('laporan/edit', ['idLaporan' => $datas['idLaporan'], 'idOrsospol'=>$datas['idOrsospol'], 'tahunLaporan'=>$datas['tahunLaporan']]);
    }
    public function update(Request $request)
    {
        $id = $request->request->get('id');
        $idOrsospol = $request->request->get('idOrsospol');
        $tahunLaporan = $request->request->get('tahunLaporan');
        
        $id = $request->attributes->get('id');
        $data_test = array(
            'idOrsospol' => $idOrsospol,
            'tahunLaporan' => $tahunLaporan
        );
        
        
       $this->model->update($id, $data_test);

       return header("location:http://kesbangpol.com/laporan");
    }
    public function delete(Request $request)
    {
        $id = $request->attributes->get('id');
        $this->model->delete($id);


        return header("location:http://kesbangpol.com/laporan");
    }
}