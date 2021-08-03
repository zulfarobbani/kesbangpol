<?php

namespace App\KontakDarurat\Model;

use Core\GlobalFunc;
use PDOException;

class KontakDarurat extends GlobalFunc
{
    private $table = 'kontakDarurat';
    private $primaryKey = 'idKontakdarurat';
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

    public function create($datas)
    {
        $id = uniqid('kdr');
        $namaKontakdarurat = $datas->get('namaKontakdarurat');
        $isiKontakdarurat = $datas->get('isiKontakdarurat');
        $dateCreate = date('Y-m-d');

        $sql = "INSERT INTO " . $this->table . " VALUES ('$id', '$namaKontakdarurat', '$isiKontakdarurat', '$dateCreate')";

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
    public function update($id, $datas)
    {
        $namaKontakdarurat = $datas->get('namaKontakdarurat');
        $isiKontakdarurat = $datas->get('isiKontakdarurat');

        $sql = "UPDATE " . $this->table . " SET namaKontakdarurat = '$namaKontakdarurat', isiKontakdarurat = '$isiKontakdarurat' WHERE ".$this->primaryKey." ='$id'";
        
        try {
            $data = $this->conn->prepare($sql);
            $data->execute();

            return $id;
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
