<?php

namespace App\Orsospol\Model;

use Core\GlobalFunc;
use PDOException;

class Orsospol extends GlobalFunc
{
    private $table = 'orsospol';
    public $conn;

    public function __construct()
    {
        $globalFunc = new GlobalFunc();
        $this->conn = $globalFunc->conn;
    }
    
    public function selectAll()
    {
        $sql = "SELECT orsospol.*, provinsi.*, kabupaten.*, kecamatan.*, kelurahan.*, jenisorsospol.*, sosialmedia.* FROM ".$this->table." LEFT JOIN provinsi ON orsospol   .idProvinsi = provinsi.idProvinsi 
        LEFT JOIN kabupaten ON orsospol .idKabupaten = kabupaten.idKabupaten
        LEFT JOIN kecamatan ON orsospol .idKecamatan = kecamatan.idKecamatan
        LEFT JOIN kelurahan ON orsospol .idKelurahan = kelurahan.idKelurahan
        LEFT JOIN jenisorsospol ON orsospol.idJenisorsospol = jenisorsospol.idJenisorsospol
        LEFT JOIN sosialmedia ON orsospol   .idSosialmedia = sosialmedia.idSosialmedia";
        
        try {
            $query = $this->conn->prepare($sql);
            $query->execute();
            $data = $query->fetchAll();

            $datahasil = [];

            foreach($data as $key => $value){
                array_push($datahasil, $value);

                $datahasil[$key]["provinsi"] = array(
                    "idProvinsi" => $value['idProvinsi'],
                    "nameprov" => $value['nameprov']
                );
                $datahasil[$key]["kabupaten"] = array(
                    "idKabupaten" => $value['idKabupaten'],
                    "namekab" => $value['namekab']
                );
                $datahasil[$key]["kecamatan"] = array(
                    "idKecamatan" => $value['idKecamatan'],
                    "namekec" => $value['namekec']
                );
                $datahasil[$key]["kelurahan"] = array(
                    "idKelurahan" => $value['idKelurahan'],
                    "namekel" => $value['namekel']
                );
                $datahasil[$key]["jenis"] = array(
                    "idJenisorsospol"=>$value['idJenisorsospol'],
                    "namaJenisorsospol"=>$value['namaJenisorsospol']
                );
                $datahasil[$key]["sosialmedia"] = array(
                    "idSosialmedia" => $value['idSosialmedia'],
                    "instagramSosialmedia" => $value['instagramSosialmedia'],
                    "facebookSosialmedia" => $value['facebookSosialmedia'],
                    "youtubeSosialmedia" => $value['youtubeSosialmedia'],
                    "twitterSosialmedia" => $value['twitterSosialmedia'],
                    "whatsappSosialmedia" => $value['whatsappSosialmedia'],
                    "telegramSosialmedia" => $value['telegramSosialmedia'],
                );
            }

            
            return $datahasil;
        } catch (PDOException $e) {
            echo $e;
            die();
        }
    }
    public function create($data_test = [])
    {
        $id = uniqid("ors");
        $namaOrsospol = $data_test['namaOrsospol'];
        $idJenisorsospol = $data_test['jenisOrsospol'];
        $notarisOrsospol = $data_test['notarisOrsospol'];
        $kemenkumhamOrsospol = $data_test['kemenkumhamOrsospol'];
        $npwpOrsospol = $data_test['npwpOrsospol'];
        $rekeningOrsospol = $data_test['rekeningOrsospol'];
        $bankOrsospol = $data_test['bankOrsospol'];
        $alamatOrsospol = $data_test['alamatOrsospol'];
        $idProvinsi = $data_test['idProvinsi'];
        $idKab = $data_test['idKab'];
        $idKec = $data_test['idKec'];
        $idKel = $data_test['idKel'];
        $teleponOrsospol = $data_test['teleponOrsospol'];
        $emailOrsospol = $data_test['emailOrsospol'];
        $websiteOrsospol = $data_test['websiteOrsospol'];
        $idSosmed = $data_test['idSosmed'];
        $approvalOrsospol = $data_test['approvalOrsospol'];
        $dateCreate = $data_test['dateCreate'];

        $sql = "INSERT INTO ".$this->table." VALUES ('$id','$namaOrsospol', '$idJenisorsospol', '$notarisOrsospol', '$kemenkumhamOrsospol','$npwpOrsospol', '$rekeningOrsospol', '$bankOrsospol', '$alamatOrsospol', '$idProvinsi', '$idKab', '$idKec', '$idKel', '$emailOrsospol', '$teleponOrsospol', '$websiteOrsospol', '$idSosmed', '$approvalOrsospol', '$dateCreate')";    
          
        
        try {
            $data = $this->conn->prepare($sql);
            $data->execute();
        
            return $data->rowCount();
        } catch (PDOException $e) {
            echo $e;
            die();
        }
    }

    public function selectOne($id)
    {
        
            $sql = "SELECT orsospol.*, provinsi.*, kabupaten.*, kecamatan.*, kelurahan.*, jenisorsospol.*, sosialmedia.*  FROM ".$this->table." LEFT JOIN provinsi ON orsospol   .idProvinsi = provinsi.idProvinsi 
            LEFT JOIN kabupaten ON orsospol .idKabupaten = kabupaten.idKabupaten
            LEFT JOIN kecamatan ON orsospol .idKecamatan = kecamatan.idKecamatan
            LEFT JOIN kelurahan ON orsospol .idKelurahan = kelurahan.idKelurahan
            LEFT JOIN jenisorsospol ON orsospol.idJenisorsospol = jenisorsospol.idJenisorsospol
            LEFT JOIN sosialmedia ON orsospol   .idSosialmedia = sosialmedia.idSosialmedia WHERE idOrsospol = '$id'";

        try {
            $query = $this->conn->prepare($sql);
            $query->execute();
            $data = $query->fetch();

            $data["provinsi"] = array(
                "idProvinsi" => $data['idProvinsi'],
                "nameprov" => $data['nameprov']
            );
            $data["kabupaten"] = array(
                "idKabupaten" => $data['idKabupaten'],
                "namekab" => $data['namekab']
            );
            $data["kecamatan"] = array(
                "idKecamatan" => $data['idKecamatan'],
                "namekec" => $data['namekec']
            );
            $data["kelurahan"] = array(
                "idKelurahan" => $data['idKelurahan'],
                "namekel" => $data['namekel']
            );
            $data["jenis"] = array(
                "idJenisorsospol"=>$data['idJenisorsospol'],
                "namaJenisorsospol"=>$data['namaJenisorsospol']
            );
            $data["sosialmedia"] = array(
                "idSosialmedia" => $data['idSosialmedia'],
                "instagramSosialmedia" => $data['instagramSosialmedia'],
                "facebookSosialmedia" => $data['facebookSosialmedia'],
                "youtubeSosialmedia" => $data['youtubeSosialmedia'],
                "twitterSosialmedia" => $data['twitterSosialmedia'],
                "whatsappSosialmedia" => $data['whatsappSosialmedia'],
                "telegramSosialmedia" => $data['telegramSosialmedia'],
            );
            
            return $data;
        } catch (PDOException $e) {
            echo $e;
            die();
        }
    }
    public function update($idOrsos, $data_test)
    {
        $$namaOrsospol = $data_test['namaOrsospol'];
        $idJenisorsospol = $data_test['jenisOrsospol'];
        $notarisOrsospol = $data_test['notarisOrsospol'];
        $kemenkumhamOrsospol = $data_test['kemenkumhamOrsospol'];
        $npwpOrsospol = $data_test['npwpOrsospol'];
        $rekeningOrsospol = $data_test['rekeningOrsospol'];
        $bankOrsospol = $data_test['bankOrsospol'];
        $alamatOrsospol = $data_test['alamatOrsospol'];
        $idProvinsi = $data_test['idProvinsi'];
        $idKab = $data_test['idKab'];
        $idKec = $data_test['idKec'];
        $idKel = $data_test['idKel'];
        $teleponOrsospol = $data_test['teleponOrsospol'];
        $emailOrsospol = $data_test['emailOrsospol'];
        $websiteOrsospol = $data_test['websiteOrsospol'];
        
        $approvalOrsospol = $data_test['approvalOrsospol'];
        
        $sql = "UPDATE ".$this->table." SET namaOrsospol = '$namaOrsospol', idJenisorsospol = '$idJenisorsospol', notarisOrsospol = '$notarisOrsospol', kemenkumhamOrsospol = '$kemenkumhamOrsospol', npwpOrsospol = '$npwpOrsospol', rekeningOrsospol = '$rekeningOrsospol', bankOrsospol = '$bankOrsospol', alamatOrsospol = '$alamatOrsospol', idProvinsi = '$idProvinsi', idKabupaten = '$idKab', idKecamatan = '$idKec', idKelurahan = '$idKel', emailOrsospol = '$emailOrsospol', teleponOrsospol = '$teleponOrsospol',  websiteOrsospol='$websiteOrsospol', approvalOrsospol='$approvalOrsospol'  WHERE idOrsospol ='$idOrsos'";
        
        
        
        try{
            $data = $this->conn->prepare($sql);
            $data->execute(); 
           
             
        }catch (PDOexception $e){
            echo $e;
            die();
        }
    }

    public function delete($idOrsos)
    {
        $sql = "DELETE FROM ".$this->table." WHERE idOrsospol = '$idOrsos'";

        try{
            $query = $this->conn->prepare($sql);
            $query->execute();
            
        
            return $query;
           
        }catch(PDOException $e) {
            dump($e);
            die();
        }
    }
    public function provinsiall(){
        $sql = "SELECT * FROM provinsi";

        try{
            $query = $this->conn->prepare($sql);
            $query->execute();
            return $query;
        }catch(PDOException $e){
            dump($e);
            die();
        }
    }
    public function kabupatenone($data_kab1){

        $id = $data_kab1;
        $sql = "SELECT * FROM kabupaten WHERE provinsi_id = '$id'";
        try{
            $query = $this->conn->prepare($sql);
            $query->execute();
            $data = $query->fetchAll();
            
            return $data;
        }catch(PDOException $e){
            dump($e);
            die();
        }
    }
    public function kecamatanone($data_kec){

        $id = $data_kec;
        $sql = "SELECT * FROM kecamatan WHERE kabupaten_id = '$id'";

        try{
            $query = $this->conn->prepare($sql);
            $query->execute();
            $data = $query->fetchAll();
            
            return $data;
        }catch(PDOException $e){
            dump($e);
            die();
        }
    }
    public function kelurahanone($data_kec){

        $id = $data_kec;
        $sql = "SELECT * FROM kelurahan WHERE kecamatan_id = '$id'";

        try{
            $query = $this->conn->prepare($sql);
            $query->execute();
            $data = $query->fetchAll();
            
            return $data;
        }catch(PDOException $e){
            dump($e);
            die();
        }
    }
    
    public function jenisorsospolall(){
        $sql = "SELECT * FROM jenisorsospol";

        try{
            $query = $this->conn->prepare($sql);
            $query->execute();
            return $query->fetchAll();
        }catch(PDOException $e){
            dump($e);
            die();
        }
    }
    public function simpansosmed($data_test)
    {
        $id = $data_test['idSosmed'];
        $instagram = $data_test['instagram'];
        $facebook = $data_test['facebook'];
        $youtube = $data_test['youtube'];
        $twitter = $data_test['twitter'];
        $whatsapp =$data_test['whatsapp'];
        $telegram =$data_test['telegram'];
        $dateCreate = date("Y-m-d");

        $sql = "INSERT INTO sosialmedia VALUES ('$id','$instagram','$facebook','$youtube','$twitter','$whatsapp','$telegram', '$dateCreate')";
       
        try{
            $data = $this->conn->prepare($sql);
            $data->execute();
            
            return $data->rowCount();
        }catch(PDOException $e){
            dump($e);
            die();
        }
    }
    public function updatesosmed($idSosmed ,$data_sosmed)
    {
        $instagram = $data_sosmed['instagram'];
        $facebook = $data_sosmed['facebook'];
        $youtube = $data_sosmed['youtube'];
        $twitter = $data_sosmed['twitter'];
        $whatsapp =$data_sosmed['whatsapp'];
        $telegram =$data_sosmed['telegram'];
        

        $sql = "UPDATE sosialmedia SET instagramSosialmedia = '$instagram',  facebookSosialmedia = '$facebook',youtubeSosialmedia = '$youtube', twitterSosialmedia = '$twitter', whatsappSosialmedia = '$whatsapp',telegramSosialmedia = '$telegram' Where idSosialmedia = '$idSosmed'";
        
        try{
            $data = $this->conn->prepare($sql);
            $data->execute();

            return $data->rowCount();
        }catch(PDOException $e){
            dump($e);
            die();
        }
    }
    public function deletesosmed($idsosmed)
    {
        $sql = "DELETE FROM sosialmedia WHERE idSosialmedia = '$idsosmed'";

        try{
            $query = $this->conn->prepare($sql);
            $query->execute();
            
            return $query;
           
        }catch(PDOException $e) {
            dump($e);
            die();
        }
    }
}