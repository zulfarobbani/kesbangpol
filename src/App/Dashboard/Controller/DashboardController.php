<?php

namespace App\Dashboard\Controller;

use App\Dashboard\Model\Dashboard;
use App\Berita\Model\Berita;
use App\Media\Model\Media;
use Core\GlobalFunc;
use Symfony\Component\HttpFoundation\Request;

class DashboardController extends GlobalFunc
{
    public $model;
    public $model2;
    public $model3;

    public function __construct()
    {
        $this->model = new Dashboard();
        $this->model2 = new Berita();
        $this->model3 = new Media();
        
    }
    //dashboard
    public function tampil(Request $request){
        return $this->render_template('/dashboard');
    }
    //beranda
    public function home(Request $request){
        $datas_2 = $this->model2->selectAll();
        $datas_3 = $this->model3->selectOne('med60d2d6b462b8b');
        
        return $this->render_template('/beranda', ['datas'=>$datas_2, 'foto'=>$datas_3['pathMedia']]);
        dump($datas_3['pathMedia']);
        die();
    }
    //profil
    public function visimisi(Request $request){
        return $this->render_template('/visi-misi');
    }  
    public function tupoksi(Request $request){
        return $this->render_template('/tupoksi');
    }
    //layanan
    public function pendataan(Request $request){
        return $this->render_template('/pendataan');
    }
    public function permohonanhibah(Request $request){
        return $this->render_template('/permohonan-hibah');
    }
    public function permohonanpenelitian(Request $request){
        return $this->render_template('/permohonan-penelitian');
    }
    public function unduhan(Request $request){
        return $this->render_template('/unduhan');
    }
    //organisasi terdaftar
    public function organisasi(Request $request){
        return $this->render_template('/organisasi-terdaftar');
    }
    //organisasi terdaftar ormas
    public function ormas(Request $request){
        return $this->render_template('/organisasi-terdaftar/ormas');
    }
    //organisasi terdaftar OKP
    public function okp(Request $request){
        return $this->render_template('/organisasi-terdaftar/okp');
    }
    //organisasi terdaftar Komunitas
    public function komunitas(Request $request){
        return $this->render_template('/organisasi-terdaftar/komunitas');
    }
    //organisasi terdaftar parpol
    public function parpol(Request $request){
        return $this->render_template('/organisasi-terdaftar/parpol');
    }

    //data Organisasi
    public function dataOrganisasi(Request $request){
        return $this->render_template('/data-organisasi');
    }
    //Struktur Organisasi
    public function strukturOrganisasi(Request $request){
        return $this->render_template('/struktur-organisasi');
    }
    //kelengkapan Administrasi
    public function kelengkapanAdministrasi(Request $request){
        return $this->render_template('/kelengkapan-administrasi');
    }
    //program Kerja Tahunan
    public function progKerjaTahunan(Request $request){
        return $this->render_template('/prog-kerja-tahunan');
    }
    //data Organisasi
    public function laporanOrganisasi(Request $request){
        return $this->render_template('/laporan-organisasi');
    }

    //Forum Umum
    public function forumUmum(Request $request){
        return $this->render_template('/forum-umum');
    }
    //Forum Private
    public function forumPrivate(Request $request){
        return $this->render_template('/forum-private');
    }
     //Biodata Anggota
    public function biodataAnggota(Request $request){
        return $this->render_template('/biodata-anggota');
    }
     //Biodata Anggota
    public function hubungiKami(Request $request){
        return $this->render_template('/hubungi-kami');
    }


    public function index(Request $request)
    {
        $datas = $this->model->selectAll();
        return $this->render_template('galeri/index', ['datas' => $datas]);
    }
    
    public function create(Request $request)
    {
        return $this->render_template('galeri/create');

    }
    public function store(Request $request)
    {
        $namaGallery = $request->request->get('namaGallery');
        $deskripsiGallery = $request->request->get('deskripsiGallery');
        $idRelation = $request->request->get('idRelation');
        $approvalGallery = $request->request->get('approvalGallery');
        $dateCreate = date("Y-m-d");
 
        $data_test = array(       
            'namaGallery' => $namaGallery,
            'deskripsiGallery' => $deskripsiGallery,
            'idRelation' => $idRelation,
            'approvalGallery'=> $approvalGallery,
            'dateCreate' => $dateCreate
        );

        
        $this->model->create($data_test);
        
        return header("location:http://kesbangpol.com/galeri");
    }
    public function ReadOne(Request $request)
    {
        $id = $request->attributes->get('id');
        $datas = $this->model->selectOne($id);
        

        return $this->render_template('galeri/edit', ['idGallery' => $datas['idGallery'], 'namaGallery'=>$datas['namaGallery'], 'deskripsiGallery'=>$datas['deskripsiGallery'], 'idRelation'=>$datas['idRelation'], 'approvalGallery'=>$datas['approvalGallery']]);
    }
    public function update(Request $request)
    {
        $id = $request->request->get('id');
        $namaGallery = $request->request->get('namaGallery');
        $deskripsiGallery = $request->request->get('deskripsiGallery');
        $idRelation = $request->request->get('idRelation');
        $approvalGallery = $request->request->get('approvalGallery');

        $id = $request->attributes->get('id');
        $data_test = array(
            'namaGallery' => $namaGallery,
            'deskripsiGallery' => $deskripsiGallery,
            'idRelation' => $idRelation,
            'approvalGallery'=> $approvalGallery
        );
        
       $this->model->update($id, $data_test);

       return header("location:http://kesbangpol.com/galeri");
    }
    public function delete(Request $request)
    {
        $id = $request->attributes->get('id');
        $this->model->delete($id);


        return header("location:http://kesbangpol.com/galeri");
    }
}