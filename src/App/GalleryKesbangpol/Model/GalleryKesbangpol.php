<?php

namespace App\GalleryKesbangpol\Model;

use App\GroupItem\Model\GroupItem;
use App\Transaksi\Model\Transaksi;
use Core\GlobalFunc;
use PDOException;

class GalleryKesbangpol extends GlobalFunc
{
    private $table = 'gallery';
    private $primaryKey = 'idGallery';
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
        $sql = "SELECT * FROM " . $this->table ." LEFT JOIN media ON media.idRelation = ".$this->table.".".$this->primaryKey." ".$where;

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
        $id = uniqid('prt');
        $namaGallery = $datas->get('namaGallery');
        $deskripsiGallery = $datas->get('deskripsiGallery');
        $dateCreate = date('Y-m-d');

        $sql = "INSERT INTO " . $this->table . " VALUES ('$id', '$namaGallery', '$deskripsiGallery', '', '', '$dateCreate')";

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
        $sql = "SELECT * FROM " . $this->table . " LEFT JOIN media ON media.idRelation = ".$this->table.".".$this->primaryKey." WHERE ".$this->primaryKey." = '$id'";

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
        $namaGallery = $datas->get('namaGallery');
        $deskripsiGallery = $datas->get('deskripsiGallery');

        $sql = "UPDATE " . $this->table . " SET namaGallery = '$namaGallery', deskripsiGallery = '$deskripsiGallery' WHERE ".$this->primaryKey." = '$id'";

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

            return $query;
        } catch (PDOException $e) {
            dump($e);
            die();
        }
    }

    public function chronologyMessage($action, $user, $object)
    {
        $message = [
            'store' => $user." telah menambah gallery \"".$object['gallery']."\"",
            'update' => $user." telah mengubah gallery \"".$object['gallery']."\"",
            'delete' => $user." telah menghapus gallery \"".$object['gallery']."\""
        ];

        return $message[$action];
    }
}
