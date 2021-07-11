<?php

namespace App\Sosmed\Model;

use Core\GlobalFunc;
use PDOException;

class Sosmed extends GlobalFunc
{
    private $table = 'sosialmedia';
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
        $id = uniqid("sos");
         $instagramSosialmedia = $data_test['instagramSosialmedia'];
         $facebookSosialmedia = $data_test['facebookSosialmedia'];
         $youtubeSosialmedia = $data_test['youtubeSosialmedia'];
         $twitterSosialmedia = $data_test['twitterSosialmedia'];
         $whatsappSosialmedia = $data_test['whatsappSosialmedia'];
         $telegramSosialmedia = $data_test['telegramSosialmedia'];
         $dateCreate = $data_test['dateCreate'];

        $sql = "INSERT INTO ".$this->table." VALUES ('$id','$instagramSosialmedia','$facebookSosialmedia','$youtubeSosialmedia','$twitterSosialmedia','$whatsappSosialmedia','$telegramSosialmedia', '$dateCreate')";
        
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
        $sql = "SELECT * FROM ".$this->table." WHERE idSosialmedia = '$id'";

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
        $instagramSosialmedia = $data_test['instagramSosialmedia'];
         $facebookSosialmedia = $data_test['facebookSosialmedia'];
         $youtubeSosialmedia = $data_test['youtubeSosialmedia'];
         $twitterSosialmedia = $data_test['twitterSosialmedia'];
         $whatsappSosialmedia = $data_test['whatsappSosialmedia'];
         $telegramSosialmedia = $data_test['telegramSosialmedia'];
        
        $sql = "UPDATE ".$this->table." SET instagramSosialmedia = '$instagramSosialmedia', facebookSosialmedia = '$facebookSosialmedia', youtubeSosialmedia = '$youtubeSosialmedia', twitterSosialmedia = '$twitterSosialmedia', whatsappSosialmedia = '$whatsappSosialmedia', telegramSosialmedia = '$telegramSosialmedia' WHERE idSosialmedia ='$id'";
       
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
        $sql = "DELETE FROM ".$this->table." WHERE idSosialmedia = '$id'";

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