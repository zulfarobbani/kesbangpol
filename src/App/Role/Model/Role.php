<?php

namespace App\Role\Model;

use Core\GlobalFunc;
use PDOException;

class Role extends GlobalFunc
{
    private $table = 'role';
    private $primaryKey = 'idRole';
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
        $id = uniqid('rol');
        $namaRole = $datas->get('namaRole');
        $aliasRole = $datas->get('aliasRole');
        $dateCreate = date('Y-m-d');

        $sql = "INSERT INTO " . $this->table . " VALUES ('$id', '$namaRole', '$aliasRole', '$dateCreate')";

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
        $namaRole = $datas->get('namaRole');
        $aliasRole = $datas->get('aliasRole');

        $sql = "UPDATE " . $this->table . " SET namaRole = '$namaRole', aliasRole = '$aliasRole' WHERE ".$this->primaryKey." = '$id'";

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
