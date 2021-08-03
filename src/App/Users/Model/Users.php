<?php

namespace App\Users\Model;

use Core\GlobalFunc;
use PDOException;

class Users extends GlobalFunc
{
    private $table = 'users';
    private $primaryKey = 'idUser';
    public $conn;

    public function __construct()
    {
        $globalFunc = new GlobalFunc();
        $this->conn = $globalFunc->conn;
    }

    public function countRows()
    {
        $sql = "SELECT COUNT(".$this->primaryKey.") as count FROM " . $this->table;

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

    public function selectAll($where = "")
    {
        $sql = "SELECT * FROM ".$this->table. " ".$where;

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

    public function selectOne($id_user)
    {
        $sql = "SELECT * FROM " . $this->table . " LEFT JOIN media ON media.idRelation = " . $this->table . "." . $this->primaryKey . " WHERE " . $this->primaryKey . " = '$id_user'";

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

    public function selectOneWhere($where = "")
    {
        $sql = "SELECT * FROM " . $this->table . " LEFT JOIN media ON media.idRelation = " . $this->table . "." . $this->primaryKey . " " . $where;
        // $this->dd($sql);

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

    public function create($datas)
    {
        $idUsers = uniqid('usr');
        $namaUser = $datas->get('namaUser');
        $passwordUser = password_hash($datas->get('passwordUser'), PASSWORD_DEFAULT);
        $usernameUser = $datas->get('usernameUser');
        $idRole = $datas->get('idRole');
        $emailUser = $datas->get('emailUser');
        $dateCreate = date('Y-m-d');

        $sql = "INSERT INTO " . $this->table . " VALUES('$idUsers', '$namaUser', '$usernameUser', '$passwordUser', '$idRole', '$emailUser', '$dateCreate')";

        try {
            $query = $this->conn->prepare($sql);
            $status = $query->execute();

            return $idUsers;
        } catch (PDOException $e) {
            echo $e;
            die();
        }
    }

    public function update($id_user, $datas)
    {
        $namaUser = $datas->get('namaUser');
        $usernameUser = $datas->get('usernameUser');
        $idRole = $datas->get('idRole');
        $emailUser = $datas->get('emailUser');

        $sql = "UPDATE " . $this->table . " SET namaUser = '$namaUser', usernameUser = '$usernameUser', idRole = '$idRole', emailUser = '$emailUser' WHERE " . $this->primaryKey . " = '$id_user'";

        try {
            $query = $this->conn->prepare($sql);
            $query->execute();

            return $id_user;
        } catch (PDOException $e) {
            echo $e;
            die();
        }
    }

    public function delete($id_user)
    {
        $sql = "DELETE FROM " . $this->table . " WHERE ".$this->primaryKey." = '$id_user'";

        try {
            $query = $this->conn->prepare($sql);

            $status = $query->execute();

            return $status;
        } catch (PDOException $e) {
            echo $e;
            die();
        }
    }

    public function chronologyMessage($action, $user, $object)
    {
        $message = [
            'store' => $user . " telah menambah user \"" . $object['user'] . "\"",
            'update' => $user . " telah mengubah user \"" . $object['user'] . "\"",
            'delete' => $user . " telah menghapus user \"" . $object['user'] . "\"",
            // 'retur' => $user." telah melakukan retur user \"".$object['user']."\" dengan kuantitas ".$object['retur']." ".$object['satuan'],
        ];

        return $message[$action];
    }

    public function resetPassword($id_user)
    {
        $passwordUser = password_hash('123', PASSWORD_DEFAULT);
        $sql = "UPDATE " . $this->table . " SET passwordUser = '$passwordUser' WHERE " . $this->primaryKey . " = '$id_user'";

        try {
            $query = $this->conn->prepare($sql);
            $status = $query->execute();

            return $id_user;
        } catch (PDOException $e) {
            echo $e;
            die();
        }
    }

    public function updatePassword($id_user, $passwordBaru)
    {
        $passwordUser = password_hash($passwordBaru, PASSWORD_DEFAULT);
        $sql = "UPDATE " . $this->table . " SET passwordUser = '$passwordUser' WHERE " . $this->primaryKey . " = '$id_user'";

        try {
            $query = $this->conn->prepare($sql);
            $status = $query->execute();

            return $id_user;
        } catch (PDOException $e) {
            echo $e;
            die();
        }
    }

    public function selectAllRole()
    {
        $sql = "SELECT * FROM hirarki";

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

    public function getRolePermission($id)
    {
        $sql = "SELECT * FROM permission LEFT JOIN users ON users.idUser = permission.idUser WHERE users.idUser = '$id'";

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

    public function createPermission($id, $datas)
    {
        $dateCreate = date('Y-m-d');
        $hakAkeses = $datas->get('hakAkses');

        foreach ($hakAkeses as $key => $value) {
            $idPermission = uniqid('pms');
            $sql = "INSERT INTO permission VALUES('$idPermission', '$id', '$value', '$dateCreate')";
            // $this->dd($sql);

            try {
                $query = $this->conn->prepare($sql);
                $status = $query->execute();
            } catch (PDOException $e) {
                echo $e;
                die();
            }
        }

        return $idPermission;
    }
}
