<?php

namespace App\Permissions\Model;

use Core\GlobalFunc;
use PDOException;

class Permissions extends GlobalFunc
{
    private $table = 'permissions';
    private $primaryKey = 'idPermission';
    public $conn;

    public function __construct()
    {
        $globalFunc = new GlobalFunc();
        $this->conn = $globalFunc->conn;
    }

    public function selectAll()
    {
        $sql = "SELECT * FROM " . $this->table;

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
        $id = uniqid('per');
        $namaPermission = $datas->get('namaPermission');
        $aliasPermission = strtolower(implode('-', explode(' ', $namaPermission)));
        $dateCreate = date('Y-m-d');

        $sql = "INSERT INTO " . $this->table . " VALUES ('$id', '$namaPermission', '$aliasPermission', '$dateCreate')";

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
        $sql = "SELECT * FROM " . $this->table . " WHERE ".$this->primaryKey." = '$id'";

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
        $namaPermission = $datas->get('namaPermission');
        $aliasPermission = strtolower(implode('-', explode(' ', $namaPermission)));

        $sql = "UPDATE " . $this->table . " SET namaPermission = '$namaPermission', aliasPermission = '$aliasPermission' WHERE ".$this->primaryKey." = '$id'";

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
        $sql = "DELETE FROM " . $this->table . " WHERE ".$this->primaryKey." = '$id'";

        try {
            $query = $this->conn->prepare($sql);
            $query->execute();

            return $id;
        } catch (PDOException $e) {
            dump($e);
            die();
        }
    }
}
