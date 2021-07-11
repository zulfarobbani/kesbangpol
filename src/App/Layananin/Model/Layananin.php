<?php

namespace App\Layananin\Model;

use Core\GlobalFunc;
use PDOException;

class Layananin extends GlobalFunc
{
    private $table = 'layananinternal';
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
         $idLayanan = uniqid("lyi");
         $namaLayanan = $data_test['namaLayanan'];
         $deskripsiLayanan = $data_test['deskripsiLayanan'];
         $dateCreate = $data_test['dateCreate'];

        $sql = "INSERT INTO ".$this->table." VALUES ('$idLayanan','$namaLayanan', '$deskripsiLayanan', '$dateCreate')";
        
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
        $deskripsiLayanan = $data_test['deskripsiLayanan'];

        $sql = "UPDATE ".$this->table." SET namaLayanan = '$namaLayanan', deskripsiLayanan = '$deskripsiLayanan' WHERE idLayanan='$id'";
        

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