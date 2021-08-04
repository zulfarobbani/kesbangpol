<?php

namespace App\OrsospolKesbangpol\Model;

use Core\GlobalFunc;
use PDOException;

class OrsospolKesbangpol extends GlobalFunc
{
    private $table = 'orsospol';
    private $primaryKey = 'idOrsospol';
    private $foreignKey = 'idJenisorsospol';
    public $conn;

    public function __construct()
    {
        $globalFunc = new GlobalFunc();
        $this->conn = $globalFunc->conn;
    }

    public function selectAll($idJenisOrsospol, $whereAnd = "")
    {
        $sql = "SELECT * FROM " . $this->table . " LEFT JOIN provinsi ON orsospol.idProvinsi = provinsi.idProvinsi 
        LEFT JOIN kabupaten ON orsospol .idKabupaten = kabupaten.idKabupaten
        LEFT JOIN kecamatan ON orsospol .idKecamatan = kecamatan.idKecamatan
        LEFT JOIN kelurahan ON orsospol .idKelurahan = kelurahan.idKelurahan
        LEFT JOIN jenisorsospol ON orsospol." . $this->foreignKey . " = jenisorsospol." . $this->foreignKey . "
        LEFT JOIN sosialmedia ON orsospol.idSosialmedia = sosialmedia.idSosialmedia WHERE orsospol." . $this->foreignKey . " = '$idJenisOrsospol' ".$whereAnd;

        try {
            $query = $this->conn->prepare($sql);
            $query->execute();
            $data = $query->fetchAll();

            $datahasil = [];

            foreach ($data as $key => $value) {
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
                    "idJenisorsospol" => $value['idJenisorsospol'],
                    "namaJenisorsospol" => $value['namaJenisorsospol']
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
    public function create($datas, $idSosmed, $idUser = null)
    {
        $id = uniqid("ors");
        $noAHU = $datas->get('noAHU');
        $namaOrsosopol = $datas->get('namaOrsosopol');
        $idJenisorsospol = $datas->get('idJenisorsospol');
        $notarisOrsospol = $datas->get('notarisOrsospol');
        $kemenkumhamOrsospol = $datas->get('kemenkumhamOrsospol');
        $npwpOrsospol = $datas->get('npwpOrsospol');
        $rekeningOrsospol = $datas->get('rekeningOrsospol');
        $bankOrsospol = $datas->get('bankOrsospol');
        $alamatOrsospol = $datas->get('alamatOrsospol');
        $provinsiId = $datas->get('provinsiId');
        $kabupatenId = $datas->get('kabupatenId');
        $kecamatanId = $datas->get('kecamatanId');
        $kelurahanId = $datas->get('kelurahanId');
        $teleponOrsospol = $datas->get('teleponOrsospol');
        $emailOrsospol = $datas->get('emailOrsospol');
        $websiteOrsospol = $datas->get('websiteOrsospol');
        $singkatanOrsospol = $datas->get('singkatanOrsospol');
        $approvalOrsospol = '1';
        $dateCreate = date('Y-m-d');

        $sql = "INSERT INTO " . $this->table . " VALUES ('$id','$namaOrsosopol', '$idJenisorsospol', '$notarisOrsospol', '$kemenkumhamOrsospol','$npwpOrsospol', '$rekeningOrsospol', '$bankOrsospol', '$alamatOrsospol', '$provinsiId', '$kabupatenId', '$kecamatanId', '$kelurahanId', '$emailOrsospol', '$teleponOrsospol', '$websiteOrsospol', '$idSosmed', '$approvalOrsospol', '$dateCreate', '$noAHU', '$idUser', '$singkatanOrsospol')";

        try {
            $data = $this->conn->prepare($sql);
            $data->execute();

            return $id;
        } catch (PDOException $e) {
            echo $e;
            die();
        }
    }

    public function selectOne($id)
    {
        $sql = "SELECT * FROM " . $this->table . " LEFT JOIN provinsi ON " . $this->table . ".idProvinsi = provinsi.idProvinsi 
            LEFT JOIN kabupaten ON " . $this->table . ".idKabupaten = kabupaten.idKabupaten
            LEFT JOIN kecamatan ON " . $this->table . ".idKecamatan = kecamatan.idKecamatan
            LEFT JOIN kelurahan ON " . $this->table . ".idKelurahan = kelurahan.idKelurahan
            LEFT JOIN jenisorsospol ON " . $this->table . ".idJenisorsospol = jenisorsospol.idJenisorsospol
            LEFT JOIN sosialmedia ON " . $this->table . ".idSosialmedia = sosialmedia.idSosialmedia WHERE idOrsospol = '$id'";

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
                "idJenisorsospol" => $data['idJenisorsospol'],
                "namaJenisorsospol" => $data['namaJenisorsospol']
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

    public function selectOrsospolAkun($id)
    {
        $sql = "SELECT * FROM " . $this->table . " LEFT JOIN provinsi ON " . $this->table . ".idProvinsi = provinsi.idProvinsi 
            LEFT JOIN kabupaten ON " . $this->table . ".idKabupaten = kabupaten.idKabupaten
            LEFT JOIN kecamatan ON " . $this->table . ".idKecamatan = kecamatan.idKecamatan
            LEFT JOIN kelurahan ON " . $this->table . ".idKelurahan = kelurahan.idKelurahan
            LEFT JOIN jenisorsospol ON " . $this->table . ".idJenisorsospol = jenisorsospol.idJenisorsospol
            LEFT JOIN sosialmedia ON " . $this->table . ".idSosialmedia = sosialmedia.idSosialmedia WHERE idUser = '$id'";

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
                "idJenisorsospol" => $data['idJenisorsospol'],
                "namaJenisorsospol" => $data['namaJenisorsospol']
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

    public function update($idOrsos, $datas)
    {
        $noAHU = $datas->get('noAHU');
        $namaOrsosopol = $datas->get('namaOrsosopol');
        $idJenisorsospol = $datas->get('idJenisorsospol');
        $notarisOrsospol = $datas->get('notarisOrsospol');
        $kemenkumhamOrsospol = $datas->get('kemenkumhamOrsospol');
        $npwpOrsospol = $datas->get('npwpOrsospol');
        $rekeningOrsospol = $datas->get('rekeningOrsospol');
        $bankOrsospol = $datas->get('bankOrsospol');
        $alamatOrsospol = $datas->get('alamatOrsospol');
        $provinsiId = $datas->get('provinsiId');
        $kabupatenId = $datas->get('kabupatenId');
        $kecamatanId = $datas->get('kecamatanId');
        $kelurahanId = $datas->get('kelurahanId');
        $idKel = $datas->get('idKel');
        $teleponOrsospol = $datas->get('teleponOrsospol');
        $emailOrsospol = $datas->get('emailOrsospol');
        $websiteOrsospol = $datas->get('websiteOrsospol');
        $approvalOrsospol = '1';

        $sql = "UPDATE " . $this->table . " SET noAHU = '$noAHU', namaOrsospol = '$namaOrsosopol', idJenisorsospol = '$idJenisorsospol', notarisOrsospol = '$notarisOrsospol', kemenkumhamOrsospol = '$kemenkumhamOrsospol', npwpOrsospol = '$npwpOrsospol', rekeningOrsospol = '$rekeningOrsospol', bankOrsospol = '$bankOrsospol', alamatOrsospol = '$alamatOrsospol', idProvinsi = '$provinsiId', idKabupaten = '$kabupatenId', idKecamatan = '$kecamatanId', idKelurahan = '$kelurahanId', emailOrsospol = '$emailOrsospol', teleponOrsospol = '$teleponOrsospol',  websiteOrsospol='$websiteOrsospol', approvalOrsospol='$approvalOrsospol'  WHERE idOrsospol ='$idOrsos'";

        try {
            $data = $this->conn->prepare($sql);
            $data->execute();

            return $idOrsos;
        } catch (PDOexception $e) {
            echo $e;
            die();
        }
    }

    public function delete($idOrsos)
    {
        $sql = "DELETE FROM " . $this->table . " WHERE idOrsospol = '$idOrsos'";

        try {
            $query = $this->conn->prepare($sql);
            $query->execute();


            return $query;
        } catch (PDOException $e) {
            dump($e);
            die();
        }
    }
    public function provinsiall()
    {
        $sql = "SELECT * FROM provinsi";

        try {
            $query = $this->conn->prepare($sql);
            $query->execute();
            return $query;
        } catch (PDOException $e) {
            dump($e);
            die();
        }
    }
    public function kabupatenone($data_kab1)
    {

        $id = $data_kab1;
        $sql = "SELECT * FROM kabupaten WHERE provinsi_id = '$id'";
        try {
            $query = $this->conn->prepare($sql);
            $query->execute();
            $data = $query->fetchAll();

            return $data;
        } catch (PDOException $e) {
            dump($e);
            die();
        }
    }
    public function kecamatanone($data_kec)
    {

        $id = $data_kec;
        $sql = "SELECT * FROM kecamatan WHERE kabupaten_id = '$id'";

        try {
            $query = $this->conn->prepare($sql);
            $query->execute();
            $data = $query->fetchAll();

            return $data;
        } catch (PDOException $e) {
            dump($e);
            die();
        }
    }
    public function kelurahanone($data_kec)
    {

        $id = $data_kec;
        $sql = "SELECT * FROM kelurahan WHERE kecamatan_id = '$id'";

        try {
            $query = $this->conn->prepare($sql);
            $query->execute();
            $data = $query->fetchAll();

            return $data;
        } catch (PDOException $e) {
            dump($e);
            die();
        }
    }

    public function jenisorsospolall()
    {
        $sql = "SELECT * FROM jenisorsospol";

        try {
            $query = $this->conn->prepare($sql);
            $query->execute();
            return $query->fetchAll();
        } catch (PDOException $e) {
            dump($e);
            die();
        }
    }
    public function simpansosmed($datas)
    {
        $id = uniqid('sos');
        $instagram = $datas->get('instagramSosialmedia');
        $facebook = $datas->get('facebookSosialmedia');
        $youtube = $datas->get('youtubeSosialmedia');
        $twitter = $datas->get('twitterSosialmedia');
        $whatsapp = $datas->get('whatsappSosialmedia');
        $telegram = $datas->get('telegramSosialmedia');
        $dateCreate = date("Y-m-d");

        $sql = "INSERT INTO sosialmedia VALUES ('$id','$instagram','$facebook','$youtube','$twitter','$whatsapp','$telegram', '$dateCreate')";

        try {
            $data = $this->conn->prepare($sql);
            $data->execute();

            return $id;
        } catch (PDOException $e) {
            dump($e);
            die();
        }
    }
    public function updatesosmed($idSosmed, $datas)
    {
        $instagram = $datas->get('instagramSosialmedia');
        $facebook = $datas->get('facebookSosialmedia');
        $youtube = $datas->get('youtubeSosialmedia');
        $twitter = $datas->get('twitterSosialmedia');
        $whatsapp = $datas->get('whatsappSosialmedia');
        $telegram = $datas->get('telegramSosialmedia');


        $sql = "UPDATE sosialmedia SET instagramSosialmedia = '$instagram',  facebookSosialmedia = '$facebook',youtubeSosialmedia = '$youtube', twitterSosialmedia = '$twitter', whatsappSosialmedia = '$whatsapp',telegramSosialmedia = '$telegram' Where idSosialmedia = '$idSosmed'";

        try {
            $data = $this->conn->prepare($sql);
            $data->execute();

            return $data->rowCount();
        } catch (PDOException $e) {
            dump($e);
            die();
        }
    }
    public function deletesosmed($idsosmed)
    {
        $sql = "DELETE FROM sosialmedia WHERE idSosialmedia = '$idsosmed'";

        try {
            $query = $this->conn->prepare($sql);
            $query->execute();

            return $query;
        } catch (PDOException $e) {
            dump($e);
            die();
        }
    }
}
