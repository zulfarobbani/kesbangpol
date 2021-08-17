<?php

namespace App\Banner\Model;

use Core\GlobalFunc;
use PDOException;

class Banner extends GlobalFunc
{
    private $table = 'banner';
    private $primaryKey = 'idBanner';
    public $conn;

    public function __construct()
    {
        $globalFunc = new GlobalFunc();
        $this->conn = $globalFunc->conn;
    }
    
    public function selectAll($where = "")
    {
        $sql = "SELECT * FROM ".$this->table." LEFT JOIN media ON media.idRelation = ".$this->table.".".$this->primaryKey." ".$where;
        
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
    public function create($datas)
    {
         $id = uniqid("skp");
         $namaBanner = $datas->get('namaBanner');
         $halamanmunculBanner = implode(',', $datas->get('halamanmunculBanner'));
         
         $dateCreate = date('Y-m-d');

        $sql = "INSERT INTO ".$this->table." VALUES ('$id','$namaBanner', '$halamanmunculBanner', '$dateCreate')";
        
        try {
            $data = $this->conn->prepare($sql);
            $data->execute();
            return $id;
        } catch (PDOException $e) {
            echo $e;
            die();
        }
    }

    public function selectOne($id)
    {
        $sql = "SELECT * FROM ".$this->table." LEFT JOIN media ON media.idRelation = ".$this->table.".".$this->primaryKey." WHERE ".$this->primaryKey." = '$id'";

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
    public function update($id, $datas)
    {
        $namaBanner = $datas->get('namaBanner');
        $halamanmunculBanner = implode(',', $datas->get('halamanmunculBanner'));
        
        $sql = "UPDATE ".$this->table." SET namaBanner = '$namaBanner', halamanmunculBanner = '$halamanmunculBanner' WHERE ".$this->primaryKey." ='$id'";
        
        try{
            $data = $this->conn->prepare($sql);
            $data->execute();

            return $id;
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
}