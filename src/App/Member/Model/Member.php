<?php

namespace App\Member\Model;

use Core\GlobalFunc;
use PDOException;

class Member extends GlobalFunc
{
    private $table = 'member';
    public $conn;

    public function __construct()
    {
        $globalFunc = new GlobalFunc();
        $this->conn = $globalFunc->conn;
    }
    
    public function selectAll()
    {
        $sql = "SELECT member.*, provinsi.*, kabupaten.*, kecamatan.*, kelurahan.*, jabatan.*, pendidikan.*, orsospol.*, sosialmedia.* FROM ".$this->table." LEFT JOIN provinsi ON member.idProvinsi = provinsi.idProvinsi 
        LEFT JOIN kabupaten ON member.idKabupaten = kabupaten.idKabupaten
        LEFT JOIN kecamatan ON member.idKecamatan = kecamatan.idKecamatan
        LEFT JOIN kelurahan ON member.idKelurahan = kelurahan.idKelurahan
        LEFT JOIN jabatan ON member.idJabatan = jabatan.idJabatan
        LEFT JOIN pendidikan ON member.idPendidikan = pendidikan.idPendidikan
        LEFT JOIN orsospol ON member.idOrsospol = orsospol.idOrsospol
        LEFT JOIN sosialmedia ON member.idSosialmedia = sosialmedia.idSosialmedia";
        
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
                $datahasil[$key]["jabatan"] = array(
                    "idJabatan" => $value['idJabatan'],
                    "namaJabatan" => $value['namaJabatan']
                );
                $datahasil[$key]["pendidikan"] = array(
                    "idPendidikan" => $value['idPendidikan'],
                    "namaPendidikan" => $value['namaPendidikan']
                );
                $datahasil[$key]["orsospol"] = array(
                    "idOrsospol" => $value['idOrsospol'],
                    "namaOrsospol" => $value['namaOrsospol']
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
        $id = uniqid("mem");
        $namaMember = $data_test['namaMember'];
        $nikMember = $data_test['nikMember'];
        $niaMember = $data_test['niaMember'];
        $alamatMember = $data_test['alamatMember'];
        $idProvinsi = $data_test['idProvinsi'];
        $idKab = $data_test['idKab'];
        $idKec = $data_test['idKec'];
        $idKel = $data_test['idKel'];
        $teleponMember = $data_test['teleponMember'];
        $fotoMember = $data_test['fotoMember'];
        $idjabatan = $data_test['idjabatan'];
        $idPendidikan = $data_test['idPendidikan'];
        $idOrsospol = $data_test['idOrsospol'];
        $idSosmed = $data_test['idSosmed'];
        $dateCreate = $data_test['dateCreate'];

        $sql = "INSERT INTO ".$this->table." VALUES ('$id','$namaMember', '$nikMember', '$niaMember', '$alamatMember', '$idProvinsi', '$idKab', '$idKec', '$idKel', '$teleponMember', '$fotoMember', '$idjabatan', '$idPendidikan', '$idOrsospol', '$idSosmed', '$dateCreate')";    
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
        
            $sql = "SELECT member.*, provinsi.*, kabupaten.*, kecamatan.*, kelurahan.*, jabatan.*, pendidikan.*, orsospol.*, sosialmedia.* FROM ".$this->table." LEFT JOIN provinsi ON member.idProvinsi = provinsi.idProvinsi 
            LEFT JOIN kabupaten ON member.idKabupaten = kabupaten.idKabupaten
            LEFT JOIN kecamatan ON member.idKecamatan = kecamatan.idKecamatan
            LEFT JOIN kelurahan ON member.idKelurahan = kelurahan.idKelurahan
            LEFT JOIN jabatan ON member.idJabatan = jabatan.idJabatan
            LEFT JOIN pendidikan ON member.idPendidikan = pendidikan.idPendidikan
            LEFT JOIN orsospol ON member.idOrsospol = orsospol.idOrsospol
            LEFT JOIN sosialmedia ON member.idSosialmedia = sosialmedia.idSosialmedia WHERE idMember = '$id'";

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
            $data["jabatan"] = array(
                "idJabatan" => $data['idJabatan'],
                "namaJabatan" => $data['namaJabatan']
            );
            $data["pendidikan"] = array(
                "idPendidikan" => $data['idPendidikan'],
                "namaPendidikan" => $data['namaPendidikan']
            );
            $data["orsospol"] = array(
                "idOrsospol" => $data['idOrsospol'],
                "namaOrsospol" => $data['namaOrsospol']
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
    public function update($idMember, $data_test)
    {
        $namaMember = $data_test['namaMember'];
        $nikMember = $data_test['nikMember'];
        $niaMember = $data_test['niaMember'];
        $alamatMember = $data_test['alamatMember'];
        $idProvinsi = $data_test['idProvinsi'];
        $idKab = $data_test['idKab'];
        $idKec = $data_test['idKec'];
        $idKel = $data_test['idKel'];
        $teleponMember = $data_test['teleponMember'];
        $fotoMember = $data_test['fotoMember'];
        $idjabatan = $data_test['idjabatan'];
        $idPendidikan = $data_test['idPendidikan'];
        $idOrsospol = $data_test['idOrsospol'];
        
        $sql = "UPDATE ".$this->table." SET namaMember = '$namaMember', nikMember = '$nikMember', niaMember = '$niaMember', alamatMember = '$alamatMember', idProvinsi = '$idProvinsi', idKabupaten = '$idKab', idKecamatan = '$idKec', idKelurahan = '$idKel', teleponMember = '$teleponMember', fotoMember = '$fotoMember', idJabatan = '$idjabatan', idPendidikan = '$idPendidikan', idOrsospol = '$idOrsospol' WHERE idMember ='$idMember'";
        
        
        
        try{
            $data = $this->conn->prepare($sql);
            $data->execute(); 
           
             
        }catch (PDOexception $e){
            echo $e;
            die();
        }
    }

    public function delete($idMember)
    {
        $sql = "DELETE FROM ".$this->table." WHERE idMember = '$idMember'";

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
    public function jabatan1(){
        $sql = "SELECT * FROM jabatan";

        try{
            $query = $this->conn->prepare($sql);
            $query->execute();
            return $query->fetchAll();
        }catch(PDOException $e){
            dump($e);
            die();
        }
    }
    public function pendidikan(){
        $sql = "SELECT * FROM pendidikan";

        try{
            $query = $this->conn->prepare($sql);
            $query->execute();
            return $query->fetchAll();
        }catch(PDOException $e){
            dump($e);
            die();
        }
    }
    public function orsos(){
        $sql = "SELECT * FROM orsospol";

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