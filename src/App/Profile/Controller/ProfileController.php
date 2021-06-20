<?php

namespace App\Profile\Controller;

use App\Profile\Model\Profile;
use Core\GlobalFunc;
use Symfony\Component\HttpFoundation\Request;

class ProfileController extends GlobalFunc
{
    public $model;

    public function __construct()
    {
        $this->model = new Profile();
        
    }
    
    public function index(Request $request)
    {
        $datas = $this->model->selectAll();
        return $this->render_template('profile/index', ['datas' => $datas]);
    }
    
    public function create(Request $request)
    {
        return $this->render_template('profile/create');

    }
    public function store(Request $request)
    {
        $namaProfile = $request->request->get('namaProfile');
        $deskripsiProfile = $request->request->get('deskripsiProfile');
        $idRelation = $request->request->get('idRelation');
        $dateCreate = date("Y-m-d");
 
        $data_test = array(       
            'namaProfile' => $namaProfile,
            'deskripsiProfile' => $deskripsiProfile,
            'idRelation' => $idRelation,
            'dateCreate' => $dateCreate
        );

        
        $this->model->create($data_test);
        
        return header("location:http://kesbangpol.com/profile");
    }
    public function ReadOne(Request $request)
    {
        $id = $request->attributes->get('id');
        $datas = $this->model->selectOne($id);
        
        return $this->render_template('profile/edit', ['idProfile' => $datas['idProfile'], 'namaProfile'=>$datas['namaProfile'], 'deskripsiProfile'=>$datas['deskripsiProfile'], 'idRelation'=>$datas['idRelation']]);
    }
    public function update(Request $request)
    {
        $id = $request->request->get('id');
        $namaProfile = $request->request->get('namaProfile');
        $deskripsiProfile = $request->request->get('deskripsiProfile');
        $idRelation = $request->request->get('idRelation');

        $id = $request->attributes->get('id');
        $data_test = array(
            'namaProfile' => $namaProfile,
            'deskripsiProfile' => $deskripsiProfile,
            'idRelation' => $idRelation,
            'dateCreate' => $dateCreate
        );
        
       $this->model->update($id, $data_test);

       return header("location:http://kesbangpol.com/profile");
    }
    public function delete(Request $request)
    {
        $id = $request->attributes->get('id');
        $this->model->delete($id);


        return header("location:http://kesbangpol.com/profile");
    }
}