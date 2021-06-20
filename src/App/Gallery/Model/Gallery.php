<?php

namespace App\Gallery\Model;

use Core\GlobalFunc;
use PDOException;

class Gallery extends GlobalFunc
{
    private $table = 'gallery';
    public $conn;

    public function __construct()
    {
        $globalFunc = new GlobalFunc();
        $this->conn = $globalFunc->conn;
    }

    public function selectAll()
    {
        $sql = "SELECT gallery.*, member.idMember, member.idOrsospol FROM ".$this->table." LEFT JOIN member ON gallery.idRelation = member.idMember";

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

        $sql = "INSERT INTO ".$this->table." VALUES ('$idGallery','$namaGallery', '$deskripsiGallery', '$idRelation', '$approvalGallery', '$dateCreate')";
       
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
        $sql = "SELECT * FROM ".$this->table." WHERE idGallery = '$id'";

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