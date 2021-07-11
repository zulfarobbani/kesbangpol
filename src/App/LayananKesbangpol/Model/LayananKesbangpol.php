<?php

namespace App\LayananKesbangpol\Model;

use Core\GlobalFunc;
use PDOException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class LayananKesbangpol extends GlobalFunc
{
    private $table = 'layanan';
    private $primaryKey = 'idLayanan';
    public $conn;

    public function __construct()
    {
        $globalFunc = new GlobalFunc();
        $this->conn = $globalFunc->conn;
    }
    
    public function selectAll()
    {
        $sql = "SELECT * FROM ".$this->table." LEFT JOIN media ON media.idRelation = ".$this->table.".".$this->primaryKey;
        
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

    public function selectAllMenu()
    {
        $sql = "SELECT idLayanan, iconLayanan, namaLayanan FROM ".$this->table." LEFT JOIN media ON media.idRelation = ".$this->table.".".$this->primaryKey;
        
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
         $id = uniqid("lyn");
         $namaLayanan = $data_test['namaLayanan'];
         $judulLayanan = $data_test['judulLayanan'];
         $deskripsiLayanan = $data_test['deskripsiLayanan'];
         
         $dateCreate = date('Y-m-d');

        $sql = "INSERT INTO ".$this->table." VALUES ('$id','$namaLayanan', '$judulLayanan', '$deskripsiLayanan', '$dateCreate')";
        
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

    public function selectOneLayanan($where)
    {
        $sql = "SELECT * FROM ".$this->table." LEFT JOIN media ON media.idRelation = ".$this->table.".".$this->primaryKey." ".$where;

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
        $judulLayanan = $data_test['judulLayanan'];
        $deskripsiLayanan = $data_test['deskripsiLayanan'];
        
        $sql = "UPDATE ".$this->table." SET namaLayanan = '$namaLayanan', judulLayanan = '$judulLayanan', deskripsiLayanan = '$deskripsiLayanan' WHERE ".$this->primaryKey." ='$id'";
        
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

    public function downloadBerkas(Request $request)
    {
        $idLayananunduhan = $request->attributes->get("id");

        $detail = $this->model->selectOne($idLayananunduhan);

        $filepath = __DIR__ . "/../../../../web/assets/media/" . $detail['pathMedia'];

        if (file_exists($filepath)) {
            $response = new Response();
            $response->headers->set('Content-type', 'application/octet-stream');
            $response->headers->set('Content-Disposition', sprintf('attachment; filename="%s"', $detail['pathMedia']));
            $response->setContent(file_get_contents($filepath));
            $response->setStatusCode(200);
            $response->headers->set('Content-Transfer-Encoding', 'binary');
            $response->headers->set('Pragma', 'no-cache');
            $response->headers->set('Expires', '0');

            return $response;
        } else {
            http_response_code(404);
            die();
        }
    }
}