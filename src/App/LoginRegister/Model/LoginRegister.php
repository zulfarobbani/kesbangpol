<?php

namespace App\LoginRegister\Model;

use Core\GlobalFunc;
use PDOException;

class LoginRegister extends GlobalFunc
{
    // private $table = 'l';
    public $conn;

    public function __construct()
    {
        $globalFunc = new GlobalFunc();
        $this->conn = $globalFunc->conn;
    }
}