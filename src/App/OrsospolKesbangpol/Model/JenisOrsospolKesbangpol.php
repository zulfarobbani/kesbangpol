<?php

namespace App\OrsospolKesbangpol\Model;

use Core\GlobalFunc;
use PDOException;

class JenisOrsospolKesbangpol extends GlobalFunc
{
    private $table = 'jenisorsospol';
    private $primaryKey = 'idJenisorsospol';
    public $conn;

    public function __construct()
    {
        $globalFunc = new GlobalFunc();
        $this->conn = $globalFunc->conn;
    }

    public function selectAll($where = "")
    {
        $sql = "SELECT * FROM " . $this->table . " " . $where;

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
        $idJenisorsospol = uniqid("jor");
        $namaJenisorsospol = $datas->get('namaJenisorsospol');
        $dateCreate = date('Y-m-d');

        $sql = "INSERT INTO " . $this->table . " VALUES ('$idJenisorsospol','$namaJenisorsospol', '$dateCreate')";

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
        $sql = "SELECT * FROM " . $this->table . " WHERE " . $this->primaryKey . " = '$id'";

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
        $namaJenisorsospol = $datas->get('namaJenisorsospol');

        $sql = "UPDATE " . $this->table . " SET namaJenisorsospol = '$namaJenisorsospol' WHERE " . $this->primaryKey . "='$id'";


        try {
            $data = $this->conn->prepare($sql);
            $data->execute();
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
