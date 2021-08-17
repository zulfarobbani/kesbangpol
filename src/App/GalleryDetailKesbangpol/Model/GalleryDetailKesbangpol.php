<?php

namespace App\GalleryDetailKesbangpol\Model;

use Core\GlobalFunc;
use PDOException;

class GalleryDetailKesbangpol extends GlobalFunc
{
    private $table = 'gallerydetail';
    private $primaryKey = 'idGallerydetail';
    public $conn;

    public function __construct()
    {
        $globalFunc = new GlobalFunc();
        $this->conn = $globalFunc->conn;
    }

    public function selectAll($where = "")
    {
        $sql = "SELECT * FROM " . $this->table . " LEFT JOIN media ON media.idRelation = " . $this->table . "." . $this->primaryKey . " " . $where;

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

    public function create($deskripsi, $nama, $foreignKey)
    {
        $id = uniqid('dpr');
        $dateCreate = date('Y-m-d');

        $sql = "INSERT INTO " . $this->table . " VALUES ('$id', '$foreignKey', '$nama', '$deskripsi', '$dateCreate')";

        try {
            $data = $this->conn->prepare($sql);
            $data->execute();

            return $id;
        } catch (PDOException $e) {
            echo $e;
            die();
        }
    }

    public function createMediaDetail($idMedia, $fileUpload, $idRelation, $idEntity = 1, $key)
    {
        $file = $fileUpload;
        $namaMedia = $file['name'][$key];
        $namaSementara = $file['tmp_name'][$key];
        $ekstensi_diperbolehkan    = array('png', 'jpg', 'jpeg', 'pdf');
        $x = explode('.', $namaMedia);
        $nama = strtolower($x['0']);
        $ekstensi = strtolower(end($x));
        $ukuran    = $file['size'][$key];
        $filename = $nama . "" . uniqid() . "." . $ekstensi;
        
        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            if ($ukuran < 1055070) {
                move_uploaded_file($namaSementara, __DIR__ . '/../../../../web/assets/media/' . $filename);
                
                $dateCreate = date('Y-m-d');
                $sql = "INSERT INTO media VALUES ('$idMedia', '$filename', '$idRelation', '$idEntity', '', '$dateCreate')";
            }
        }

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
        $sql = "SELECT * FROM " . $this->table . " LEFT JOIN media ON media.idRelation = " . $this->table . ".idItem WHERE idItem = '$id'";

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
        $deskripsiGallery = $datas->get('deskripsiPorGallery');

        $sql = "UPDATE " . $this->table . " SET namaGallery = '$namaGallery', deksripsiGallery = '$deskripsiGallery' WHERE " . $this->primaryKey . " = '$id'";

        try {
            $data = $this->conn->prepare($sql);
            $data->execute();

            return $id;
        } catch (PDOexception $e) {
            echo $e;
            die();
        }
    }

    public function updateDetail($id, $deskripsi, $nama)
    {
        $sql = "UPDATE " . $this->table . " SET namaGallerydetail = '$nama', deskripsiGallerydetail = '$deskripsi' WHERE " . $this->primaryKey . " = '$id'";

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

    public function deleteGroup($id)
    {
        $sql = "DELETE FROM " . $this->table . " WHERE idGallery = '$id'";

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
            'store' => $user . " telah menambah gallery \"" . $object['gallery'] . "\"",
            'update' => $user . " telah mengubah gallery \"" . $object['gallery'] . "\"",
            'delete' => $user . " telah menghapus gallery \"" . $object['gallery'] . "\""
        ];

        return $message[$action];
    }
}
