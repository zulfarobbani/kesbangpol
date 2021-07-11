<?php

namespace App\ProfileKesbangpol\Model;

use Core\GlobalFunc;
use PDOException;

class ProfileKesbangpol extends GlobalFunc
{
    private $table = 'profilekesbangpol';
    private $primaryKey = 'idProfilekesbangpol';
    public $conn;

    public function __construct()
    {
        $globalFunc = new GlobalFunc();
        $this->conn = $globalFunc->conn;
    }

    public function selectAll()
    {
        $sql = "SELECT * FROM ".$this->table;

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
         $idProfile = uniqid("pfk");
         $visi = $data_test['visi'];
         $misi = $data_test['misi'];
         $dateCreate = date('Y-m-d');

        $sql = "INSERT INTO ".$this->table." VALUES ('$idProfile','$visi', '$misi', '$dateCreate')";
        
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
        $setValue = "";
        foreach ($data_test as $key => $value) {
            $setValue.= $key." = '".$value."', ";
        }

        $sql = "UPDATE ".$this->table." SET ".$setValue." ".$this->primaryKey." = '$id'";

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

    public function selectTop($select = "*")
    {
        $sql = "SELECT ".$select." FROM ".$this->table;

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