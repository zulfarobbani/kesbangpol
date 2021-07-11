<?php

namespace Config;

use PDO;
use PDOException;

class Database{
 
	var $host = "localhost";
	var $username = "root";
	var $pass = "";
	var $db = "kesbangpol";
    var $driver = 'mysql';
    var $conn;
 
	function __construct(){
        try {
            $this->conn = new PDO($this->driver.":host={$this->host};dbname={$this->db};", $this->username, $this->pass);
        } catch (PDOException $th) {
            echo "Tidak dapat terkoneksi dengan database";
            echo $th;
            die();
        }
	}
 
} 

?>