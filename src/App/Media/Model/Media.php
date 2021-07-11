<?php

namespace App\Media\Model;

use Core\GlobalFunc;
use PDOException;

class Media extends GlobalFunc
{
    private $table = 'media';
    private $primaryKey = 'idMedia';
    public $conn;

    public function __construct()
    {
        $globalFunc = new GlobalFunc();
        $this->conn = $globalFunc->conn;
    }

    public function selectAll()
    {
        $sql = "SELECT media.*, entitas.idEntitas, member.idMember FROM " . $this->table . " 
        LEFT JOIN entitas ON media.idEntity = entitas.idEntitas LEFT JOIN member on media.idRelation = member.idMember";

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

    public function create($idMedia, $fileUpload, $idRelation, $idEntity = '1', $jenisDokumen = null)
    {
        $file = $fileUpload;
        $namaMedia = $file['name'];
        $namaSementara = $file['tmp_name'];
        $ekstensi_diperbolehkan    = array('png', 'jpg');
        $x = explode('.', $namaMedia);
        $nama = strtolower($x['0']);
        $ekstensi = strtolower(end($x));
        $ukuran    = $file['size'];
        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            if ($ukuran < 1044070) {
                move_uploaded_file($namaSementara, __DIR__ . '/../../../../web/assets/media/' . $nama."".uniqid()."".$ekstensi);
            }
        }
        $dateCreate = date('Y-m-d');

        $sql = "INSERT INTO " . $this->table . " VALUES ('$idMedia', '$namaMedia', '$idRelation', $idEntity, '$jenisDokumen', '$dateCreate')";

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

    public function update($id, $data_test = [])
    {
        $pathMedia = $data_test['pathMedia'];
        $idRelation = $data_test['idRelation'];
        $idEntity = $data_test['idEntity'];

        $sql = "UPDATE " . $this->table . " SET pathMedia = '$pathMedia', idEntity = '$idEntity', idRelation = '$idRelation' WHERE ".$this->primaryKey."='$id'";

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

    public function deleteFile($file)
    {
        if (file_exists(__DIR__ . '/../../../../web/assets/media/' . $file)) {
            unlink(__DIR__ . '/../../../../web/assets/media/' . $file);

            return true;
        }

        return false;
    }

    public function selectOneMedia($where)
    {
        $sql = "SELECT * FROM " . $this->table . " WHERE ".$where;

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
}
