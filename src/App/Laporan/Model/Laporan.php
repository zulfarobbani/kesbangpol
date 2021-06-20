<?php

namespace App\Laporan\Model;

use Core\GlobalFunc;
use PDOException;

class Laporan extends GlobalFunc
{
    private $table = 'laporan';
    public $conn;

    public function __construct()
    {
        $globalFunc = new GlobalFunc();
        $this->conn = $globalFunc->conn;
    }
    
    public function selectAll()
    {
        $sql = "SELECT laporan.*, orsospol.idOrsospol FROM ".$this->table." LEFT JOIN orsospol ON laporan.idOrsospol = orsospol.idOrsospol";
        
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
         $idLaporan = uniqid("lap");
         $idOrsospol = $data_test['idOrsospol'];
         $tahunLaporan = $data_test['tahunLaporan'];
         $dateCreate = $data_test['dateCreate'];

        $sql = "INSERT INTO ".$this->table." VALUES ('$idLaporan','$idOrsospol', '$tahunLaporan', '$dateCreate')";
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
        $sql = "SELECT * FROM ".$this->table." WHERE idLaporan = '$id'";

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
        $idOrsospol = $data_test['idOrsospol'];
        $tahunLaporan = $data_test['tahunLaporan'];

        $sql = "UPDATE ".$this->table." SET idOrsospol = '$idOrsospol', tahunLaporan = '$tahunLaporan' WHERE idLaporan='$id'";
        

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
        $sql = "DELETE FROM ".$this->table." WHERE idLaporan = '$id'";

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