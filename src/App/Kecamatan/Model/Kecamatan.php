<?php

namespace App\Kecamatan\Model;

use Core\GlobalFunc;
use PDOException;

class Kecamatan extends GlobalFunc
{
    private $table = 'kecamatan';
    public $conn;

    public function __construct()
    {
        $globalFunc = new GlobalFunc();
        $this->conn = $globalFunc->conn;
    }
    
    public function selectAll()
    {
        $sql = "SELECT kecamatan.*, kabupaten.id AS idkabupaten, kabupaten.name AS  kabupatenname FROM ".$this->table. " LEFT JOIN kabupaten ON kecamatan.kabupaten_id = kabupaten.id";
        
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
         $id = uniqid("kec");
         $namaKab = $data_test['namaKab'];
         $namaKec = $data_test['namaKec'];

        $sql = "INSERT INTO  ".$this->table." VALUES ('$id','$namaKab','$namaKec' )";
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
        $sql = "SELECT kecamatan.*, kabupaten.id AS kabupatenid, kabupaten.name AS  kabupatenname FROM ".$this->table. " LEFT JOIN kabupaten ON kecamatan.kabupaten_id = kabupaten.id WHERE kecamatan.id = '$id'";

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
        $namaKab = $data_test['namaKab'];
        $namaKec = $data_test['namaKec'];
        
        $sql = "UPDATE ".$this->table." SET name = '$namaKec' WHERE kecamatan.id = '$id'";
        
    
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
        $sql = "DELETE FROM ".$this->table." WHERE kecamatan.id = '$id'";

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