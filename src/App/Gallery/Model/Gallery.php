<?php

namespace App\Gallery\Model;

use Core\GlobalFunc;
use PDOException;

class Gallery extends GlobalFunc
{
    private $table = 'gallery';
    private $primaryKey = 'idGallery';
    public $conn;

    public function __construct()
    {
        $globalFunc = new GlobalFunc();
        $this->conn = $globalFunc->conn;
    }

    public function selectAll()
    {
        $sql = "SELECT * FROM ".$this->table." LEFT JOIN media ON ".$this->table.".".$this->primaryKey." = media.idRelation ";
        
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
    
    public function create($data_test = [])
    {
         $idGallery = uniqid("glr");
         $namaGallery = $data_test['namaGallery'];
         $deskripsiGallery = $data_test['deskripsiGallery'];
         $idRelation = $data_test['idRelation'];
         $approvalGallery = $data_test['approvalGallery'];
         $dateCreate = $data_test['dateCreate'];
         $idMedia = $data_test['idMedia'];

        $sql = "INSERT INTO ".$this->table." VALUES ('$idGallery','$namaGallery', '$deskripsiGallery', '$idRelation', '$approvalGallery', '$dateCreate', '$idMedia')";
       
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
        $sql = "SELECT * FROM ".$this->table." WHERE ".$this->primaryKey." = '$id'";

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
        $namaGallery = $data_test['namaGallery'];
        $deskripsiGallery = $data_test['deskripsiGallery'];
        $idRelation = $data_test['idRelation'];
        $approvalGallery = $data_test['approvalGallery'];

        $sql = "UPDATE ".$this->table." SET namaGallery = '$namaGallery', deskripsiGallery = '$deskripsiGallery', idRelation = '$idRelation', approvalGallery = '$approvalGallery' WHERE idGallery='$id'";

        try{
            $data = $this->conn->prepare($sql);
            $data->execute();  
        }catch (PDOexception $e){
            echo $e;
            die();
        }
    }

    public function delete($id)
    {
        $sql = "DELETE FROM ".$this->table." WHERE idGallery = '$id'";

        try{
            $query = $this->conn->prepare($sql);
            $query->execute();
            return $query;
           
        }catch(PDOException $e) {
            dump($e);
            die();
        }
    }
}