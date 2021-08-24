<?php

namespace App\LikePengumuman\Model;

use Core\GlobalFunc;
use PDOException;

class LikePengumuman extends GlobalFunc
{
    private $table = 'likepengumuman';
    private $primaryKey = 'idLikepengumuman';
    public $conn;

    public function __construct()
    {
        $globalFunc = new GlobalFunc();
        $this->conn = $globalFunc->conn;
    }

    public function selectAll($where = "")
    {
        $sql = "SELECT * FROM " . $this->table . " LEFT JOIN users ON users.idUser = " . $this->table . ".idUser LEFT JOIN media ON media.idRelation = users.idUser LEFT JOIN pengumuman ON pengumuman.idPengumuman = ".$this->table.".idPengumuman " . $where;

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

    public function create($datas, $idPengumuman, $idUser, $jenislikePengumuman)
    {
        $idLikepengumuman = uniqid("lbr");
        // $jenislikePengumuman = $datas->get('jenislikePengumuman');
        $dateCreate = date('Y-m-d');

        $sql = "INSERT INTO " . $this->table . " VALUES ('$idLikepengumuman', '$idUser', '$idPengumuman', '$jenislikePengumuman', '$dateCreate')";

        try {
            $data = $this->conn->prepare($sql);

            $data->execute();
            return $idLikepengumuman;
        } catch (PDOException $e) {
            echo $e;
            die();
        }
    }

    public function update($datas, $idPengumuman, $idUser, $idLikepengumuman = '')
    {
        $jenislikePengumuman = $datas->get('jenislikePengumuman');
        $dateCreate = date('Y-m-d');

        $sql = "UPDATE " . $this->table . " SET idUser = '$idUser', idPengumuman = '$idPengumuman', jenislikePengumuman = '$jenislikePengumuman' WHERE ".$this->primaryKey." = '$idLikepengumuman'";

        try {
            $data = $this->conn->prepare($sql);

            $data->execute();
            return $idLikepengumuman;
        } catch (PDOException $e) {
            echo $e;
            die();
        }
    }

    public function selectOne($id)
    {
        $sql = "SELECT * FROM " . $this->table . " LEFT JOIN media ON " . $this->table . "." . $this->primaryKey . " = media.idRelation LEFT JOIN users ON users.idUser = ".$this->table.".idUser LEFT JOIN berita ON berita.idPengumuman = ".$this->table.".idPengumuman WHERE " . $this->primaryKey . " = '$id'";

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

    public function delete($where = "")
    {
        $sql = "DELETE FROM " . $this->table . " ". $where;

        try {
            $query = $this->conn->prepare($sql);
            $query->execute();
            return $query;
        } catch (PDOException $e) {
            dump($e);
            die();
        }
    }

}