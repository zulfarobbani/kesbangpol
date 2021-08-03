<?php 


	namespace App\Register\Model;
	use Core\GlobalFunc;


/**
 * 
 */
class Register extends GlobalFunc
{
	private $table = 'users';
    public $conn;

    public function __construct()
    {
        $globalFunc = new GlobalFunc();
        $this->conn = $globalFunc->conn;
    }
      public function createRegisterEksternal($idUser, $namaUser, $passwordUser, $nik, $nip)
    {   
        $namaUser = $this->esc_str($this->conn, $namaUser);
        $passwordUser = $this->esc_str($this->conn, $passwordUser);
        $nik = $this->esc_str($this->conn, $nik);
  
        $sql = "INSERT INTO \"".$this->table."\" VALUES ('$idUser', '$namaUser', '$passwordUser' , '$nik', '$nip')";
        $query = pg_query($sql);
        
     return pg_fetch_row($query);
    }
}
 ?>