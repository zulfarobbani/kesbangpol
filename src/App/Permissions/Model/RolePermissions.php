<?php

namespace App\Permissions\Model;

use Core\GlobalFunc;
use PDOException;

class RolePermissions extends GlobalFunc
{
    private $table = 'rolepermission';
    private $primaryKey = 'idRolepermission';
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
    public function create($datas, $idRole)
    {
        foreach ($datas->get('idPermissions') as $key => $value) {
            $id = uniqid('rpm');
            $idPermission = $value;
            $dateCreate = date('Y-m-d');

            $sql = "INSERT INTO " . $this->table . " VALUES ('$id', '$idRole', '$idPermission', '$dateCreate')";

            try {
                $data = $this->conn->prepare($sql);

                $data->execute();
            } catch (PDOException $e) {
                echo $e;
                die();
            }
        }

        return $idRole;
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

    public function get($idRole)
    {
        $sql = "SELECT * FROM " . $this->table . " LEFT JOIN `permissions` ON `permissions`.idPermission = ".$this->table.".idPermission WHERE idRole = '$idRole'";

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

    public function update($datas, $idRole)
    {
        $this->deleteRolePermission($idRole);

        foreach ($datas->get('idPermissions') as $key => $value) {
            $id = uniqid('rpm');
            $idPermission = $value;
            $dateCreate = date('Y-m-d');

            $sql = "INSERT INTO " . $this->table . " VALUES ('$id', '$idRole', '$idPermission', '$dateCreate')";

            try {
                $data = $this->conn->prepare($sql);

                $data->execute();
            } catch (PDOException $e) {
                echo $e;
                die();
            }
        }

        return $idRole;
    }

    public function delete($id)
    {
        $sql = "DELETE FROM " . $this->table . " WHERE " . $this->primaryKey . " = '$id'";

        try {
            $query = $this->conn->prepare($sql);
            $query->execute();

            return $id;
        } catch (PDOException $e) {
            dump($e);
            die();
        }
    }

    public function deleteRolePermission($id)
    {
        $sql = "DELETE FROM " . $this->table . " WHERE idRole = '$id'";

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
