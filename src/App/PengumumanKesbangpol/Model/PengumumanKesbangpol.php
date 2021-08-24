<?php

namespace App\PengumumanKesbangpol\Model;

use Core\GlobalFunc;
use PDOException;

class PengumumanKesbangpol extends GlobalFunc
{
    private $table = 'pengumuman';
    private $primaryKey = 'idPengumuman';
    public $conn;

    public function __construct()
    {
        $globalFunc = new GlobalFunc();
        $this->conn = $globalFunc->conn;
    }

    public function selectAll()
    {
        $sql = "SELECT * FROM " . $this->table . " LEFT JOIN media ON " . $this->table . ".".$this->primaryKey." = media.idRelation";
        try {
            $query = $this->conn->prepare($sql);
            $query->execute();
            $data = $query->fetchAll();

            return $data;
        } catch (PDOException $e) {
            echo $e;
            die();
        }
    }

    // public function create($data_test = [])
    // {
    //      $idBerita = uniqid("brt");
    //      $namaBerita = $data_test['namaBerita'];
    //      $deskripsiBerita = $data_test['deskripsiBerita'];
    //      $idRelation = $data_test['idRelation'];
    //      $approvalBerita = $data_test['approvalBerita'];
    //      $dateCreate = $data_test['dateCreate'];
    //      $idMedia = $data_test['idMedia'];

    //     $sql = "INSERT INTO ".$this->table." VALUES ('$idBerita','$namaBerita', '$deskripsiBerita', '$idRelation', '$approvalBerita', '$dateCreate', '$idMedia')";

    //     try {
    //         $data = $this->conn->prepare($sql);

    //         $data->execute();
    //         return $data->rowCount();
    //     } catch (PDOException $e) {
    //         echo $e;
    //         die();
    //     }
    // }

    public function create($datas)
    {
        $idPengumuman = uniqid('png');
        $namaPengumuman = $datas->get('namaPengumuman');
        $deskripsiPengumuman = $datas->get('deskripsiPengumuman');
        $dateCreate = date('Y-m-d');

        $sql = "INSERT INTO " . $this->table . " VALUES ('$idPengumuman', '$namaPengumuman', '$deskripsiPengumuman', '$dateCreate')";

        try {
            $data = $this->conn->prepare($sql);

            $data->execute();
            return $idPengumuman;
        } catch (PDOException $e) {
            echo $e;
            die();
        }
    }

    public function selectOne($id)
    {
        $sql = "SELECT * FROM " . $this->table . " LEFT JOIN media ON " . $this->table . "." . $this->primaryKey . " = media.idRelation WHERE " . $this->primaryKey . " = '$id'";

        try {
            $query = $this->conn->prepare($sql);
            $query->execute();
            $data = $query->fetch();

            return $data;
        } catch (PDOException $e) {
            echo $e;
            die();
        }
    }
    public function update($idPengumuman, $datas)
    {
        $namaPengumuman = $datas->get('namaPengumuman');
        $deskripsiPengumuman = $datas->get('deskripsiPengumuman');

        $sql = "UPDATE " . $this->table . " SET namaPengumuman = '$namaPengumuman', deskripsiPengumuman = '$deskripsiPengumuman' WHERE ".$this->primaryKey." ='$idPengumuman'";
        
        try {
            $data = $this->conn->prepare($sql);
            $data->execute();

            return $idPengumuman;
        } catch (PDOexception $e) {
            echo $e;
            die();
        }
    }

    public function delete($id)
    {
        $sql = "DELETE FROM " . $this->table . " WHERE " . $this->primaryKey . " = '$id'";

        try {
            $query = $this->conn->prepare($sql);
            $query->execute();
            return $query;
        } catch (PDOException $e) {
            dump($e);
            die();
        }
    }

    public function createTimeditor($datas, $berita)
    {
        $sql = "INSERT INTO timeditorberita VALUES ";
        foreach ($datas->get('idUser') as $key => $value) {
            $id = uniqid('teb');
            $dateCreate = date('Y-m-d');
            $sql.= $key > 0 ? ',' : '';
            $sql.= "('$id', '$value', '$berita', '$dateCreate')";
        }
        
        try {
            $data = $this->conn->prepare($sql);
            $data->execute();
        } catch (PDOException $e) {
            echo $e;
            die();
        }
        return true;
    }

    public function createTagpengumuman($datas, $berita)
    {
        $sql = "INSERT INTO tagberita VALUES ";
        foreach ($datas as $key => $value) {
            $id = uniqid('tag');
            $dateCreate = date('Y-m-d');
            $sql.= $key > 0 ? ',' : '';
            $sql.= "('$id', '$value', '$berita', '$dateCreate')";
        }
        
        try {
            $data = $this->conn->prepare($sql);
            $data->execute();
        } catch (PDOException $e) {
            echo $e;
            die();
        }
        return true;
    }
}
