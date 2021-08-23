<?php

namespace App\Pegawai\Model;

use Core\GlobalFunc;
use PDOException;

class Pegawai extends GlobalFunc
{
    private $table = 'pegawai';
    private $primaryKey = 'idPegawai';
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

    public function selectOne($id_pegawai)
    {
        $sql = "SELECT * FROM " . $this->table . " LEFT JOIN users ON users.idUser = ".$this->table.".idUser LEFT JOIN media ON media.idRelation = users.idUser WHERE " . $this->primaryKey . " = '$id_pegawai'";

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
        $idPegawai = uniqid('pgw');
        $namaPegawai = $datas->get('namaPegawai');
        $jabatanPegawai = $datas->get('jabatanPegawai');
        $nipPegawai = $datas->get('nipPegawai');
        $emailPegawai = $datas->get('emailPegawai');
        $dateCreate = date('Y-m-d');

        $sql = "INSERT INTO " . $this->table . " VALUES('$idPegawai', '$namaPegawai', '$jabatanPegawai', '$nipPegawai', '$emailPegawai', '$idUser', '$dateCreate')";
        
        try {
            $query = $this->conn->prepare($sql);
            $status = $query->execute();

            return $idPegawai;
        } catch (PDOException $e) {
            echo $e;
            die();
        }
    }

    public function update($id_pegawai, $datas)
    {
        $namaPegawai = $datas->get('namaPegawai');
        $jabatanPegawai = $datas->get('jabatanPegawai');
        $nipPegawai = $datas->get('nipPegawai');
        $emailPegawai = $datas->get('emailPegawai');

        $sql = "UPDATE " . $this->table . " SET namaPegawai = '$namaPegawai', jabatanPegawai = '$jabatanPegawai', nipPegawai = '$nipPegawai', emailPegawai = '$emailPegawai' WHERE " . $this->primaryKey . " = '$id_pegawai'";

        try {
            $query = $this->conn->prepare($sql);
            $query->execute();

            return $id_pegawai;
        } catch (PDOException $e) {
            echo $e;
            die();
        }
    }

    public function delete($id_pegawai)
    {
        $sql = "DELETE FROM " . $this->table . " WHERE ".$this->primaryKey." = '$id_pegawai'";

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
