<?php

namespace App\Agenda\Controller;

use App\Agenda\Model\Agenda;
use Core\GlobalFunc;
use Symfony\Component\HttpFoundation\Request;

class AgendaController extends GlobalFunc
{
    public $model;

    public function __construct()
    {
        $this->model = new Agenda();
        
    }

    public function index(Request $request)
    {
        $datas = $this->model->selectAll();
        return $this->render_template('agenda/index', ['datas' => $datas]);
    }

    public function ReadOne(Request $request)
    {
        $id = $request->attributes->get('id');
        $datas = $this->model->selectOne($id);
        

        return $this->render_template('agenda/edit', ['idAgenda' => $datas['idAgenda'], 'namaAgenda'=>$datas['namaAgenda'], 'deskripsiAgenda'=>$datas['deskripsiAgenda'], 'datestartAgenda'=>$datas['datestartAgenda'], 'dateendAgenda'=>$datas['dateendAgenda']]);
    }
    public function updateordelete(Request $request)
    {
        $id = $request->attributes->get('id');
        $delete = $request->request->get('delete');

        if ($delete == null){
            $namaAgenda = $request->request->get('namaAgenda');
            $deskripsiAgenda = $request->request->get('deskripsiAgenda');
            // $datestartAgenda = $request->request->get('datestartAgenda');
            // $dateendAgenda = $request->request->get('dateendAgenda');

            $data_test = array(
                'namaAgenda' => $namaAgenda,
                'deskripsiAgenda' => $deskripsiAgenda,
                // 'datestartAgenda' => $datestartAgenda,
                // 'dateendAgenda' => $dateendAgenda
            );
            
            $this->model->update($id, $data_test);
        } else {
            $this->model->delete($id);
        }

        return header("location:http://kesbangpol.com/agenda");
    }
    // public function delete(Request $request)
    // {
    //     $id = $request->attributes->get('id');
    //     $this->model->delete($id);


    //     return header("location:http://kesbangpol.com/agenda");
    // }
    public function create(Request $request)
    {
        return $this->render_template('agenda/create');

    }
    public function store(Request $request)
    {
        $namaAgenda = $request->request->get('namaAgenda');
        $deskripsiAgenda = $request->request->get('deskripsiAgenda');
        $datestartAgenda = $request->request->get('datestartAgenda');
        $dateendAgenda = $request->request->get('dateendAgenda');
        $dateCreate = date("Y-m-d");

        $data_test = array(       
            'namaAgenda' => $namaAgenda,
            'deskripsiAgenda' => $deskripsiAgenda,
            'datestartAgenda' => $datestartAgenda,
            'dateendAgenda'=> $dateendAgenda,
            'dateCreate' => $dateCreate
        );
        

        $this->model->create($data_test);
        
        return header("location:http://kesbangpol.com/agenda");
    }
}