<?php

namespace App\Berita\Model;

use Core\GlobalFunc;
use PDOException;

class Berita extends GlobalFunc
{
    private $table = 'berita';
    private $primaryKey = 'idBerita';
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
        $idBerita = uniqid('nws');
        $namaBerita = $datas->get('namaBerita');
        $deskripsiBerita = $datas->get('deskripsiBerita');
        $jenisBerita = $datas->get('jenisBerita');
        $idRelation = '1';
        $approvalBerita = '1';
        $authorBerita = '1';
        $dateCreate = date('Y-m-d');

        $sql = "INSERT INTO " . $this->table . " VALUES ('$idBerita', '$namaBerita', '$deskripsiBerita', '$idRelation', '$approvalBerita', '$authorBerita', '$dateCreate', '$jenisBerita')";

        try {
            $data = $this->conn->prepare($sql);

            $data->execute();
            return $idBerita;
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
    public function update($idBerita, $datas)
    {
        $namaBerita = $datas->get('namaBerita');
        $deskripsiBerita = $datas->get('deskripsiBerita');
        $jenisBerita = $datas->get('jenisBerita');
        $idRelation = '1';
        $approvalBerita = '1';
        $authorBerita = '1';
        $dateCreate = date('Y-m-d');

        $sql = "UPDATE " . $this->table . " SET namaBerita = '$namaBerita', deskripsiBerita = '$deskripsiBerita', idRelation = '$idRelation', approvalBerita = '$approvalBerita', authorBerita = '$authorBerita', jenisBerita = '$jenisBerita' WHERE ".$this->primaryKey." ='$idBerita'";
        $this->dd($sql);
        
        try {
            $data = $this->conn->prepare($sql);
            $data->execute();

            return $idBerita;
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
}
