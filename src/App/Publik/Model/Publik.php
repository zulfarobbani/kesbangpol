<?php

namespace App\Publik\Model;

use Core\GlobalFunc;
use PDOException;

class Publik extends GlobalFunc
{
    private $table = 'publik';
    private $primaryKey = 'idPublik';
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

    public function selectOne($id)
    {
        $sql = "SELECT * FROM " . $this->table . " LEFT JOIN users ON users.idUser = ".$this->table.".idUser LEFT JOIN media ON media.idRelation = users.idUser WHERE " . $this->primaryKey . " = '$id'";

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
        $sql = "SELECT * FROM " . $this->table . " LEFT JOIN role ON role.idRole = ".$this->table.".idRole LEFT JOIN media ON media.idRelation = " . $this->table . "." . $this->primaryKey . " " . $where;

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

    public function create($datas, $idUser)
    {
        $idPublik = uniqid('pbk');
        $nama = $datas->get('nama');
        $nohandphone = $datas->get('nohandphone');
        $email = $datas->get('email');
        $dateCreate = date('Y-m-d');

        $sql = "INSERT INTO " . $this->table . " VALUES('$idPublik', '$nama', '$nohandphone', '$email', '$idUser', '$dateCreate')";
        
        try {
            $query = $this->conn->prepare($sql);
            $status = $query->execute();

            return $idPublik;
        } catch (PDOException $e) {
            echo $e;
            die();
        }
    }

    public function update($id, $datas)
    {
        $nama = $datas->get('nama');
        $nohandphone = $datas->get('nohandphone');
        $email = $datas->get('email');

        $sql = "UPDATE " . $this->table . " SET nama = '$nama', nohandphone = '$nohandphone', email = '$email' WHERE " . $this->primaryKey . " = '$id'";

        try {
            $query = $this->conn->prepare($sql);
            $query->execute();

            return $id;
        } catch (PDOException $e) {
            echo $e;
            die();
        }
    }

    public function delete($id)
    {
        $sql = "DELETE FROM " . $this->table . " WHERE ".$this->primaryKey." = '$id'";

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
}
