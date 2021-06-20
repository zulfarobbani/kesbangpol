<?php

namespace App\Kabupaten\Model;

use Core\GlobalFunc;
use PDOException;

class Kabupaten extends GlobalFunc
{
    private $table = 'kabupaten';
    public $conn;

    public function __construct()
    {
        $globalFunc = new GlobalFunc();
        $this->conn = $globalFunc->conn;
    }
    
    public function selectAll()
    {
        $sql = "SELECT kabupaten.*, provinsi.id AS idprovinsi, provinsi.name AS  provinsiname FROM ".$this->table. " LEFT JOIN provinsi ON kabupaten.provinsi_id = provinsi.id";
        
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
         $id = uniqid(prkab);
         $namaProvinsi = $data_test['namaProvinsi'];
         $namaKab = $data_text['namaKab'];

        $sql = "INSERT INTO ".$this->table." VALUES ('$id','$namaProvinsi', '$namaKab')";
       
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
        $sql = "SELECT kabupaten.*, provinsi.id AS provinsiid, provinsi.name AS  provinsiname FROM ".$this->table. " LEFT JOIN provinsi ON kabupaten.provinsi_id = provinsi.id WHERE kabupaten.id = '$id'";

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
        $namaProvinsi = $data_test['namaProvinsi'];
        $namaKab = $data_test['namaKab'];
        
        $sql = "UPDATE ".$this->table." SET name = '$namaKab' WHERE kabupaten.id = '$id'";
    
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
        $sql = "DELETE FROM ".$this->table." WHERE kabupaten.id = '$id'";

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