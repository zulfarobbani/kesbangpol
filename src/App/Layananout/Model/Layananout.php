<?php

namespace App\Layananout\Model;

use Core\GlobalFunc;
use PDOException;

class Layananout extends GlobalFunc
{
    private $table = 'layananeksternal';
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
         $idLayanan = uniqid("lyx");
         $namaLayanan = $data_test['namaLayanan'];
         $urlLayanan = $data_test['urlLayanan'];
         $dateCreate = $data_test['dateCreate'];

        $sql = "INSERT INTO ".$this->table." VALUES ('$idLayanan','$namaLayanan', '$urlLayanan', '$dateCreate')";
        
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
        $sql = "SELECT * FROM ".$this->table." WHERE idLayanan = '$id'";

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
        $namaLayanan = $data_test['namaLayanan'];
        $urlLayanan = $data_test['urlLayanan'];

        $sql = "UPDATE ".$this->table." SET namaLayanan = '$namaLayanan', urlLayanan = '$urlLayanan' WHERE idLayanan='$id'";
        

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
        $sql = "DELETE FROM ".$this->table." WHERE idLayanan = '$id'";

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