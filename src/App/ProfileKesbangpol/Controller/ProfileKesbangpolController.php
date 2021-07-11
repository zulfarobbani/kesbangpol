<?php

namespace App\ProfileKesbangpol\Controller;

use App\Media\Model\Media;
use App\ProfileKesbangpol\Model\ProfileKesbangpol;
use App\Regulasi\Model\Regulasi;
use App\Sakip\Model\Sakip;
use Core\GlobalFunc;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class ProfileKesbangpolController extends GlobalFunc
{
    public $model;

    public function __construct()
    {
        $this->model = new ProfileKesbangpol();
    }
    
    public function index(Request $request)
    {
        $media = new Media();
        $struktur_organisasi = $media->selectOneMedia("jenisDokumen = 'struktur_organisasi'");
        $profileKesbangpol = $this->model->selectTop();
        $sakip = new Sakip();
        $data_sakip = $sakip->selectAll();
        $regulasi = new Regulasi();
        $data_regulasi = $regulasi->selectAll();

        return $this->render_template('profile/form', ['struktur_organisasi' => $struktur_organisasi, 'profileKesbangpol' => $profileKesbangpol, 'sakip' => $data_sakip, 'regulasi' => $data_regulasi]);
    }
    
    public function create(Request $request)
    {
        return $this->render_template('profile/create');
    }
    
    public function storeSOTK(Request $request)
    {
        $media = new Media();
        $idMedia = uniqid('med');
        $idUser = '1';
        
        // select existing struktur organisasi
        $selectMedia = $media->selectOneMedia("jenisDokumen = 'struktur_organisasi'");
        // delete existing struktur organisasi
        $deleteMedia = $media->delete($selectMedia['idMedia']);
        $media->deleteFile($selectMedia['pathMedia']);
        // store struktur organisasi
        $sotkFile = $media->create($idMedia, $_FILES['sotk'], $idUser, '1', 'struktur_organisasi');

        return new RedirectResponse('/profile-kesbangpol');
    }

    public function storeVisimisi(Request $request)
    {
        $profileKesbangpol = new ProfileKesbangpol();

        // select profile kesbangpol
        $selectProfile = $profileKesbangpol->selectTop();
        // update existing profile kesbangpol
        $updateProfile = $profileKesbangpol->update($selectProfile['idProfilekesbangpol'], [
            'visi' => $request->request->get('visi'),
            'misi' => $request->request->get('misi'),
        ]);

        return new RedirectResponse('/profile-kesbangpol');
    }

    public function storeTupoksi(Request $request)
    {
        $profileKesbangpol = new ProfileKesbangpol();

        // select profile kesbangpol
        $selectProfile = $profileKesbangpol->selectTop();
        // update existing profile kesbangpol
        $updateProfile = $profileKesbangpol->update($selectProfile['idProfilekesbangpol'], [
            'tugaspokok' => $request->request->get('tugaspokok'),
            'fungsi' => $request->request->get('fungsi'),
        ]);

        return new RedirectResponse('/profile-kesbangpol');
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