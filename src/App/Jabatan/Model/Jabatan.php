<?php

namespace App\Jabatan\Model;

use Core\GlobalFunc;
use PDOException;

class Jabatan extends GlobalFunc
{
    private $table = 'jabatan';
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
         $idJabatan = uniqid("jbt");
         $namaJabatan = $data_test['namaJabatan'];
         $hirarkiJabatan = $data_test['hirarkiJabatan'];
         $dateCreate = $data_test['dateCreate'];

        $sql = "INSERT INTO ".$this->table." VALUES ('$idJabatan','$namaJabatan', '$hirarkiJabatan', '$dateCreate')";

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
        $sql = "SELECT * FROM ".$this->table." WHERE idJabatan = '$id'";

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
        $namaJabatan = $data_test['namaJabatan'];
        $hirarkiJabatan = $data_test['hirarkiJabatan'];

        $sql = "UPDATE ".$this->table." SET namaJabatan = '$namaJabatan', hirarkiJabatan = '$hirarkiJabatan' WHERE idJabatan='$id'";
        

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
        $sql = "DELETE FROM ".$this->table." WHERE idJabatan = '$id'";

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