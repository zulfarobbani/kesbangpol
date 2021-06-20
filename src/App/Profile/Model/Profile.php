<?php

namespace App\Profile\Model;

use Core\GlobalFunc;
use PDOException;

class Profile extends GlobalFunc
{
    private $table = 'profile';
    public $conn;

    public function __construct()
    {
        $globalFunc = new GlobalFunc();
        $this->conn = $globalFunc->conn;
    }

    public function selectAll()
    {
        $sql = "SELECT profile.*, member.idMember, member.idOrsospol FROM ".$this->table. " LEFT JOIN member ON profile.idRelation = member.idMember" ;

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
         $idProfile = uniqid("prf");
         $namaProfile = $data_test['namaProfile'];
         $deskripsiProfile = $data_test['deskripsiProfile'];
         $idRelation = $data_test['idRelation'];
         $dateCreate = $data_test['dateCreate'];

        $sql = "INSERT INTO ".$this->table." VALUES ('$idProfile','$namaProfile', '$deskripsiProfile', '$idRelation', '$dateCreate')";
        
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
        $sql = "SELECT * FROM ".$this->table." WHERE idProfile = '$id'";

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
        $namaProfile = $data_test['namaProfile'];
        $deskripsiProfile = $data_test['deskripsiProfile'];
        $idRelation = $data_test['idRelation'];

        $sql = "UPDATE ".$this->table." SET namaProfile = '$namaProfile', deskripsiProfile = '$deskripsiProfile', idRelation = '$idRelation' WHERE idProfile='$id'";

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
        $sql = "DELETE FROM ".$this->table." WHERE idProfile = '$id'";

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