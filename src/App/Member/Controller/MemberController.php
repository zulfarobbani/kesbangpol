<?php

namespace App\Member\Controller;

use App\Member\Model\Member;
use Core\GlobalFunc;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class MemberController extends GlobalFunc
{
    public $model;

    public function __construct()
    {
        $this->model = new Member();
    }
    
    public function index(Request $request)
    {
        $datas = $this->model->selectAll();
    
        return $this->render_template('member/index', ['datas' => $datas]);
    }
    
    public function create(Request $request)
    {
        $data_prov = $this->model->provinsiall();
        $jabatan1 = $this->model->jabatan1();
        $pendidikan = $this->model->pendidikan();
        $orsospol = $this->model->orsos();
        return $this->render_template('member/create', ['data_prov'=>$data_prov, 'jabatan1'=>$jabatan1, 'pendidikan'=>$pendidikan, 'orsospol'=>$orsospol]);

    }
    public function createkab(Request $request)
    {
        $data_kab1 = $request->request->get('data');

        $dataret =$this->model->kabupatenone($data_kab1);
     return new JsonResponse($dataret);
    }

    public function createkec(Request $request)
    {
        $data_kec = $request->request->get('data');

        $dataret =$this->model->kecamatanone($data_kec);
     return new JsonResponse($dataret);
    }

    public function createkel(Request $request)
    {
        $data_kel = $request->request->get('data');

        $dataret =$this->model->kelurahanone($data_kel);
     return new JsonResponse($dataret);
    }
    public function createorsos(Request $request)
    {
        $dataret = $this->model->orsos();
        return new JsonResponse($dataret);
    }

    public function store(Request $request)
    {
        $idSosmed = uniqid("sos");
        $namaMember = $request->request->get('namaMember');
        $nikMember = $request->request->get('nikMember');
        $niaMember = $request->request->get('niaMember');
        $alamatMember = $request->request->get('alamatMember');
        $idProvinsi = $request->request->get('idProvinsi');
        $idKab = $request->request->get('idKab');
        $idKec = $request->request->get('idKec');
        $idKel = $request->request->get('idKel');
        $teleponMember = $request->request->get('teleponMember');
        $fotoMember = $_FILES['fotoMember']['name'];
        $idjabatan = $request->request->get('idjabatan');
        $idPendidikan = $request->request->get('idPendidikan');
        $idOrsospol = $request->request->get('idOrsospol');
        $instagram = $request->request->get('instagram');
        $facebook = $request->request->get('facebook');
        $youtube = $request->request->get('youtube');
        $twitter = $request->request->get('twitter');
        $whatsapp = $request->request->get('whatsapp');
        $telegram = $request->request->get('telegram');
        $dateCreate = date("Y-m-d");
        $namaSementara = $_FILES['fotoMember']['tmp_name'];
        $ekstensi_diperbolehkan	= array('png','img','jpg');
        $x = explode('.', $fotoMember);
        $ekstensi = strtolower(end($x));
        $ukuran	= $_FILES['fotoMember']['size'];
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
		    if($ukuran < 1044070){			
			move_uploaded_file($namaSementara, __DIR__.'/../../../assets/foto/'.$fotoMember);
            }
        }

        $data_test = array(   
            'idSosmed' => $idSosmed,    
            'namaMember' =>$namaMember,
            'nikMember' =>$nikMember,
            'niaMember' =>$niaMember,
            'alamatMember' =>$alamatMember,
            'idProvinsi' =>$idProvinsi,
            'idKab' =>$idKab,
            'idKec' =>$idKec,
            'idKel' =>$idKel,
            'teleponMember' =>$teleponMember,
            'fotoMember' =>$fotoMember,
            'idjabatan' =>$idjabatan,
            'idPendidikan' =>$idPendidikan,
            'idOrsospol' =>$idOrsospol,
            'instagram' =>$instagram,
            'namaMember' =>$namaMember,
            'facebook' =>$facebook,
            'youtube' =>$youtube,
            'twitter'=>$twitter,
            'whatsapp' =>$whatsapp,
            'telegram' =>$telegram,
            'dateCreate' => $dateCreate
        );
        
        $this->model->create($data_test);
        $this->model->simpansosmed($data_test);
        return header("location:http://kesbangpol.com/member");
    }

    public function ReadOne(Request $request)
    {
        $id = $request->attributes->get('id');
        $datas = $this->model->selectOne($id);
        $data_prov = $this->model->provinsiall();
        $jabatan1 = $this->model->jabatan1();
        $pendidikan = $this->model->pendidikan();
        $orsospol = $this->model->orsos();
        
        return $this->render_template('member/edit', ['datas' => $datas, 'data_prov'=>$data_prov, 'jabatan1'=>$jabatan1, 'pendidikan'=>$pendidikan, 'orsospol'=>$orsospol]);
    }
    public function update(Request $request)
    {
        // $id = $request->request->get('id');
        $namaMember = $request->request->get('namaMember');
        $nikMember = $request->request->get('nikMember');
        $niaMember = $request->request->get('niaMember');
        $alamatMember = $request->request->get('alamatMember');
        $idProvinsi = $request->request->get('idProvinsi');
        $idKab = $request->request->get('idKab');
        $idKec = $request->request->get('idKec');
        $idKel = $request->request->get('idKel');
        $teleponMember = $request->request->get('teleponMember');
        $fotoMember = $request->request->get('fotoMember');
        $idjabatan = $request->request->get('idjabatan');
        $idPendidikan = $request->request->get('idPendidikan');
        $idOrsospol = $request->request->get('idOrsospol');
        $instagram = $request->request->get('instagram');
        $facebook = $request->request->get('facebook');
        $youtube = $request->request->get('youtube');
        $twitter = $request->request->get('twitter');
        $whatsapp = $request->request->get('whatsapp');
        $telegram = $request->request->get('telegram');
        
        $idMember = $request->attributes->get('idMember');
        $idSosmed = $request->attributes->get('idSosmed');
        
        
        $data_test = array(
            'namaMember' =>$namaMember,
            'nikMember' =>$nikMember,
            'niaMember' =>$niaMember,
            'alamatMember' =>$alamatMember,
            'idProvinsi' =>$idProvinsi,
            'idKab' =>$idKab,
            'idKec' =>$idKec,
            'idKel' =>$idKel,
            'teleponMember' =>$teleponMember,
            'fotoMember' =>$fotoMember,
            'idjabatan' =>$idjabatan,
            'idPendidikan' =>$idPendidikan,
            'idOrsospol' =>$idOrsospol       
        );   
        $data_sosmed = array(
            'instagram' =>$instagram,
            'namaMember' =>$namaMember,
            'facebook' =>$facebook,
            'youtube' =>$youtube,
            'twitter'=>$twitter,
            'whatsapp' =>$whatsapp,
            'telegram' =>$telegram
        );
        
        $this->model->update($idMember, $data_test);
        $this->model->updatesosmed($idSosmed, $data_sosmed);
        
      return header("location:http://kesbangpol.com/member");
    }
    public function delete(Request $request)
    {
        $idMember = $request->attributes->get('idMember');
        $idSosmed = $request->attributes->get('idSosmed');
        $this->model->delete($idMember);
        $this->model->deletesosmed($idSosmed);


        return header("location:http://kesbangpol.com/member");
    }
}