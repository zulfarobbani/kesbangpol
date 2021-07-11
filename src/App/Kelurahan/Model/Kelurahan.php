<?php

namespace App\Kelurahan\Model;

use Core\GlobalFunc;
use PDOException;

class Kelurahan extends GlobalFunc
{
    private $table = 'kelurahan';
    public $conn;

    public function __construct()
    {
        $globalFunc = new GlobalFunc();
        $this->conn = $globalFunc->conn;
    }
    
    public function selectAll()
    {
        $sql = "SELECT kelurahan.*, kecamatan.id AS idkecaman, kecamatan.name AS  kecamatanname FROM ".$this->table. " LEFT JOIN kecamatan ON kelurahan.kecamatan_id = kecamatan.id";
        
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
         $id = uniqid("kel");
         $namaKel = $data_test['namaKel'];
         $namaKec = $data_test['namaKec'];

        $sql = "INSERT INTO  ".$this->table." VALUES ('$id','$namaKec','$namaKel' )";
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
        $sql = "SELECT kelurahan.*, kecamatan.id AS kecamatanid, kecamatan.name AS  kecamatanname FROM ".$this->table. " LEFT JOIN kecamatan ON kelurahan.kecamatan_id = kecamatan.id WHERE kelurahan.id = '$id'";

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
        $namaKel = $data_test['namaKel'];
        $namaKec = $data_test['namaKec'];
        
        $sql = "UPDATE ".$this->table." SET name = '$namaKel' WHERE kelurahan.id = '$id'";
        
    
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
        $sql = "DELETE FROM ".$this->table." WHERE kelurahan.id = '$id'";

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