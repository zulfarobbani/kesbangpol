<?php

namespace App\Media\Model;

use Core\GlobalFunc;
use PDOException;

class Media extends GlobalFunc
{
    private $table = 'media';
    public $conn;

    public function __construct()
    {
        $globalFunc = new GlobalFunc();
        $this->conn = $globalFunc->conn;
    }

    public function selectAll()
    {
        $sql = "SELECT media.*, entitas.idEntitas, member.idMember FROM ".$this->table." 
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
    
    public function create($data_test = [])
    {
         $idMedia = uniqid("med");
         $pathMedia = $data_test['pathMedia'];
         $idRelation = $data_test['idRelation'];
         $idEntity = $data_test['idEntity'];
         $dateCreate = $data_test['dateCreate'];

        $sql = "INSERT INTO ".$this->table." VALUES ('$idMedia','$pathMedia', '$idRelation', '$idEntity', '$dateCreate')";
      
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
        $sql = "SELECT * FROM ".$this->table." WHERE idMedia = '$id'";

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

        $sql = "UPDATE ".$this->table." SET pathMedia = '$pathMedia', idEntity = '$idEntity', idRelation = '$idRelation' WHERE idMedia='$id'";

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
        $sql = "DELETE FROM ".$this->table." WHERE idMedia = '$id'";

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