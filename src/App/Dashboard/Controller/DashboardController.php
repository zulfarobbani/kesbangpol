<?php

namespace App\Dashboard\Controller;

use App\Banner\Model\Banner;
use App\Dashboard\Model\Dashboard;
use App\Berita\Model\Berita;
use App\LayananKesbangpol\Model\LayananKesbangpol;
use App\LayananUnduhan\Model\LayananUnduhan;
use App\Media\Model\Media;
use App\ProfileKesbangpol\Model\ProfileKesbangpol;
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
        // parent::beginSession();
        
    }
    //dashboard
    public function tampil(Request $request){
        $banner = new Banner();
        $data_banner = $banner->selectAll();
        $list_banner = [];
        foreach ($data_banner as $key => $value) {
            if (in_array('dashboard', explode(',', $value['halamanmunculBanner']))) {
                array_push($list_banner, $value);
            }
        }

        return $this->render_template('dashboard', ['banner_dashboard' => $list_banner]);
    }
    //beranda
    public function home(Request $request){
        // $this->dd($this->session);
        $datas_2 = $this->model2->selectAll();
        $datas_3 = $this->model3->selectOne('');
        $site_url = 'http://'.explode('/', $request->server->get('HTTP_REFERER'))[2];

        $banner = new Banner();
        $data_banner = $banner->selectAll();
        
        // return $this->render_template('beranda', ['datas'=>$datas_2 , 'foto'=>$datas_3['pathMedia']]);
        return $this->render_template('beranda', ['datas'=>$datas_2, 'site_url' => $site_url, 'banner' => $banner]);
    }
    //profil
    public function visimisi(Request $request){
        $profileKesbangpol = new ProfileKesbangpol();
        $selectProfile = $profileKesbangpol->selectTop("visi, misi");

        return $this->render_template('visi-misi', ['visimisi' => $selectProfile]);
    }  
    public function tupoksi(Request $request){
        $profileKesbangpol = new ProfileKesbangpol();
        $selectProfile = $profileKesbangpol->selectTop("tugaspokok, fungsi");

        return $this->render_template('tupoksi', ['tupoksi' => $selectProfile]);
    }
    //layanan
    public function pendataan(Request $request){
        $layanan = new LayananKesbangpol();
        $data_layanan = $layanan->selectOneLayanan("WHERE namaLayanan = 'Pendataan ORMAS'");
        
        return $this->render_template('layanan/pendataan', ['layanan' => $data_layanan]);
    }
    public function permohonanhibah(Request $request){
        $layanan = new LayananKesbangpol();
        $data_layanan = $layanan->selectOneLayanan("WHERE namaLayanan = 'Permohonan Hibah'");
        
        return $this->render_template('layanan/permohonan-hibah', ['layanan' => $data_layanan]);
    }
    public function permohonanpenelitian(Request $request){
        $layanan = new LayananKesbangpol();
        $data_layanan = $layanan->selectOneLayanan("WHERE namaLayanan = 'Permohonan Penelitian'");

        return $this->render_template('layanan/permohonan-penelitian', ['layanan' => $data_layanan]);
    }
    public function unduhan(Request $request){
        $unduhan = new LayananUnduhan();
        $data_unduhan = $unduhan->selectAll();

        return $this->render_template('layanan/unduhan', ['unduhan' => $data_unduhan]);
    }
    //organisasi terdaftar
    public function organisasi(Request $request){
        return $this->render_template('organisasi-terdaftar');
    }
    //organisasi terdaftar ormas
    public function ormas(Request $request){
        return $this->render_template('organisasi-terdaftar/ormas');
    }
    //organisasi terdaftar OKP
    public function okp(Request $request){
        return $this->render_template('organisasi-terdaftar/okp');
    }
    //organisasi terdaftar Komunitas
    public function komunitas(Request $request){
        return $this->render_template('organisasi-terdaftar/komunitas');
    }
    //organisasi terdaftar parpol
    public function parpol(Request $request){
        return $this->render_template('organisasi-terdaftar/parpol');
    }

    //data Organisasi
    public function dataOrganisasi(Request $request){
        return $this->render_template('data-organisasi');
    }
    //Struktur Organisasi
    public function strukturOrganisasi(Request $request){
        $media = new Media();
        $selectMedia = $media->selectOneMedia("jenisDokumen = 'struktur_organisasi'");

        return $this->render_template('struktur-organisasi', ['strukturOrganisasi' => $selectMedia]);
    }
    //kelengkapan Administrasi
    public function kelengkapanAdministrasi(Request $request){
        return $this->render_template('kelengkapan-administrasi');
    }
    //program Kerja Tahunan
    public function progKerjaTahunan(Request $request){
        return $this->render_template('prog-kerja-tahunan');
    }
    //data Organisasi
    public function laporanOrganisasi(Request $request){
        return $this->render_template('laporan-organisasi');
    }

    //Forum Umum
    public function forumUmum(Request $request){
        return $this->render_template('forum-umum');
    }
    //Forum Private
    public function forumPrivate(Request $request){
        return $this->render_template('forum-private');
    }
     //Biodata Anggota
    public function biodataAnggota(Request $request){
        return $this->render_template('biodata-anggota');
    }
     //Informasi Berita
    public function informasiBerita(Request $request){
        return $this->render_template('informasi-berita');
    }
     //Informasi Galeri
    public function informasiGaleri(Request $request){
        return $this->render_template('informasi-galeri');
    }
     //Informasi Pengumuman
    public function informasiPengumuman(Request $request){
        return $this->render_template('informasi-Pengumuman');
    }
     //Hubungi Kami
    public function hubungiKami(Request $request){
        return $this->render_template('hubungi-kami');
    }
     //struktur organisasi terdaftar
    public function strukturOrganisasiTerdaftar(Request $request){
        return $this->render_template('struktur-organisasi-terdaftar');
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