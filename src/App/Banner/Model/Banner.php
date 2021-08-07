<?php

namespace App\Banner\Model;

use Core\GlobalFunc;
use PDOException;

class Banner extends GlobalFunc
{
    private $table = 'banner';
    private $primaryKey = 'idBanner';
    public $conn;

    public function __construct()
    {
        $globalFunc = new GlobalFunc();
        $this->conn = $globalFunc->conn;
    }
    
    public function selectAll()
    {
        $sql = "SELECT * FROM ".$this->table." LEFT JOIN media ON media.idRelation = ".$this->table.".".$this->primaryKey;
        
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
         $id = uniqid("skp");
         $namaBanner = $data_test['namaBanner'];
         
         $dateCreate = date('Y-m-d');

        $sql = "INSERT INTO ".$this->table." VALUES ('$id','$namaBanner', '$dateCreate')";
        
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
        $sql = "SELECT * FROM ".$this->table." LEFT JOIN media ON media.idRelation = ".$this->table.".".$this->primaryKey." WHERE ".$this->primaryKey." = '$id'";

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
        $namaBanner = $data_test['namaBanner'];
        
        $sql = "UPDATE ".$this->table." SET namaBanner = '$namaBanner' WHERE ".$this->primaryKey." ='$id'";
        
        try{
            $data = $this->conn->prepare($sql);
            $data->execute();

            return $id;
        }catch (PDOexception $e){
            echo $e;
            die();
        }
    }

    public function delete($id)
    {
        $sql = "DELETE FROM ".$this->table." WHERE ".$this->primaryKey." = '$id'";

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