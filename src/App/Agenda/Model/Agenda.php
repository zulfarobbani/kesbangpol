<?php

namespace App\Agenda\Model;

use Core\GlobalFunc;
use PDOException;

class Agenda extends GlobalFunc
{
    private $table = 'agenda';
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

    public function selectOne($id)
    {
        $sql = "SELECT * FROM ".$this->table." WHERE idAgenda = '$id'";

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
        $namaAgenda = $data_test['namaAgenda'];
        $deskripsiAgenda = $data_test['deskripsiAgenda'];
        // $datestartAgenda = $data_test['datestartAgenda'];
        // $dateendAgenda = $data_test['dateendAgenda'];

        $sql = "UPDATE ".$this->table." SET namaAgenda = '$namaAgenda', deskripsiAgenda = '$deskripsiAgenda' WHERE idAgenda='$id'";

        try{
            $data = $this->conn->prepare($sql);
            $data->execute();  
        }catch (PDOexception $e){
            echo $e;
            die();
        }
    }

    public function create($data_test = [])
    {
         $idAgenda = uniqid("agn");
         $namaAgenda = $data_test['namaAgenda'];
         $deskripsiAgenda = $data_test['deskripsiAgenda'];
         $datestartAgenda = $data_test['datestartAgenda'];
         $dateendAgenda = $data_test['dateendAgenda'];
         $dateCreate = $data_test['dateCreate'];

        $sql = "INSERT INTO ".$this->table." VALUES ('$idAgenda','$namaAgenda', '$deskripsiAgenda', '$datestartAgenda', '$dateendAgenda', '$dateCreate')";

        try {
            $data = $this->conn->prepare($sql);

            $data->execute();
            return $data->rowCount();
        } catch (PDOException $e) {
            echo $e;
            die();
        }
    }
    public function delete($id)
    {
        $sql = "DELETE FROM ".$this->table." WHERE idAgenda = '$id'";

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