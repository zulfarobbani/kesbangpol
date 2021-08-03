<?php

namespace App\Login\Model;

use Core\GlobalFunc;
use PDOException;

class Login extends GlobalFunc
{
    private $table = 'users';
    private $primaryKey = 'idUser';
    public $conn;

    public function __construct()
    {
        $globalFunc = new GlobalFunc();
        $this->conn = $globalFunc->conn;
    }

    public function create($datas)
    {
        $id = uniqid('usr');
        $namaUser = $datas['namaUser'];
        $emailUser = $datas['emailUser'];
        $passwordUser = password_hash($datas['passwordUser'], PASSWORD_DEFAULT);
        $date = date('Y-m-d');

        $sql = "INSERT INTO ".$this->table." VALUES ('$id', '$namaUser', '$emailUser', '$passwordUser', '$date')";

        try {
            $data = $this->conn->prepare($sql);

            $data->execute();
            return $data->rowCount();
        } catch (PDOException $e) {
            echo $e;
            die();
        }
    }
}
