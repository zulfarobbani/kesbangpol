<?php

namespace App\Pengumuman\Model;

use Core\GlobalFunc;
use PDOException;

class Pengumuman extends GlobalFunc
{
    private $table = 'pengumuman';
    public $conn;

    public function __construct()
    {
        $globalFunc = new GlobalFunc();
        $this->conn = $globalFunc->conn;
    }
    
    public function selectAll()
    {
        $sql = "SELECT pengumuman.*, media.* FROM ".$this->table." LEFT JOIN media ON pengumuman.idMedia = media.idMedia";
        
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
         $idPengumuman = uniqid("peg");
         $namaPengumuman = $data_test['namaPengumuman'];
         $deskripsiPengumuman = $data_test['deskripsiPengumuman'];
         $dateCreate = $data_test['dateCreate'];
         $idMedia = $data_test['idMedia'];

        $sql = "INSERT INTO ".$this->table." VALUES ('$idPengumuman','$namaPengumuman', '$deskripsiPengumuman', '$dateCreate', '$idMedia')";
        
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
        $sql = "SELECT * FROM ".$this->table." WHERE idPengumuman = '$id'";

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
        $namaPengumuman = $data_test['namaPengumuman'];
        $deskripsiPengumuman = $data_test['deskripsiPengumuman'];

        $sql = "UPDATE ".$this->table." SET namaPengumuman = '$namaPengumuman', deskripsiPengumuman = '$deskripsiPengumuman' WHERE idPengumuman='$id'";
        

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
        $sql = "DELETE FROM ".$this->table." WHERE idPengumuman = '$id'";

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