<?php

namespace App\Berita\Model;

use Core\GlobalFunc;
use PDOException;

class Berita extends GlobalFunc
{
    private $table = 'berita';
    private $primaryKey = 'idBerita';
    public $conn;

    public function __construct()
    {
        $globalFunc = new GlobalFunc();
        $this->conn = $globalFunc->conn;
    }

    public function selectAll($where = "")
    {
        $sql = "SELECT * FROM " . $this->table . " LEFT JOIN users ON users.idUser = ".$this->table.".authorBerita LEFT JOIN orsospol ON orsospol.idUser = users.idUser LEFT JOIN pegawai ON pegawai.idUser = users.idUser LEFT JOIN media ON " . $this->table . ".".$this->primaryKey." = media.idRelation ".$where;
        
        try {
            $query = $this->conn->prepare($sql);
            $query->execute();
            $data = $query->fetchAll();

            foreach ($data as $key => $value) {
                $data[$key]['deskripsiBerita'] = html_entity_decode(nl2br($value['deskripsiBerita']));
            }

            return $data;
        } catch (PDOException $e) {
            echo $e;
            die();
        }
    }

    // public function create($data_test = [])
    // {
    //      $idBerita = uniqid("brt");
    //      $namaBerita = $data_test['namaBerita'];
    //      $deskripsiBerita = $data_test['deskripsiBerita'];
    //      $idRelation = $data_test['idRelation'];
    //      $approvalBerita = $data_test['approvalBerita'];
    //      $dateCreate = $data_test['dateCreate'];
    //      $idMedia = $data_test['idMedia'];

    //     $sql = "INSERT INTO ".$this->table." VALUES ('$idBerita','$namaBerita', '$deskripsiBerita', '$idRelation', '$approvalBerita', '$dateCreate', '$idMedia')";

    //     try {
    //         $data = $this->conn->prepare($sql);

    //         $data->execute();
    //         return $data->rowCount();
    //     } catch (PDOException $e) {
    //         echo $e;
    //         die();
    //     }
    // }

    public function create($datas, $authorBerita)
    {
        $idBerita = uniqid('nws');
        $namaBerita = $datas->get('namaBerita');
        $deskripsiBerita = $datas->get('deskripsiBerita');
        $jenisBerita = $datas->get('jenisBerita');
        $idRelation = '1';
        $dateCreate = date('Y-m-d');

        $sql = "INSERT INTO " . $this->table . " VALUES ('$idBerita', '$namaBerita', '$deskripsiBerita', '$idRelation', 2, '$authorBerita', '$dateCreate', '$jenisBerita')";

        try {
            $data = $this->conn->prepare($sql);

            $data->execute();
            return $idBerita;
        } catch (PDOException $e) {
            echo $e;
            die();
        }
    }

    public function createTimeditor($datas, $berita)
    {
        $sql = "INSERT INTO timeditorberita VALUES ";
        foreach ($datas->get('idUser') as $key => $value) {
            $id = uniqid('teb');
            $dateCreate = date('Y-m-d');
            $sql.= $key > 0 ? ',' : '';
            $sql.= "('$id', '$value', '$berita', '$dateCreate')";
        }
        
        try {
            $data = $this->conn->prepare($sql);
            $data->execute();
        } catch (PDOException $e) {
            echo $e;
            die();
        }
        return true;
    }

    public function createTagberita($datas, $berita)
    {
        $sql = "INSERT INTO tagberita VALUES ";
        foreach ($datas as $key => $value) {
            $id = uniqid('tag');
            $dateCreate = date('Y-m-d');
            $sql.= $key > 0 ? ',' : '';
            $sql.= "('$id', '$value', '$berita', '$dateCreate')";
        }
        
        try {
            $data = $this->conn->prepare($sql);
            $data->execute();
        } catch (PDOException $e) {
            echo $e;
            die();
        }
        return true;
    }

    public function selectTimeditorberita($id)
    {
        $sql = "SELECT * FROM timeditorberita LEFT JOIN users ON users.idUser = timeditorberita.idUser LEFT JOIN pegawai ON pegawai.idUser = timeditorberita.idUser LEFT JOIN media ON media.idRelation = pegawai.idUser WHERE idBerita = '$id'";
        
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

    public function selectAuthorberita($id)
    {
        $sql = "SELECT * FROM users LEFT JOIN pegawai ON pegawai.idUser = users.idUser LEFT JOIN media ON media.idRelation = users.idUser WHERE users.idUser = '$id'";
        
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

    public function selectTag($id)
    {
        $sql = "SELECT * FROM tagberita WHERE idBerita = '$id'";
        
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
        $sql = "SELECT * FROM " . $this->table . " LEFT JOIN media ON " . $this->table . "." . $this->primaryKey . " = media.idRelation WHERE " . $this->primaryKey . " = '$id'";

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

    public function update($idBerita, $datas)
    {
        $namaBerita = $datas->get('namaBerita');
        $deskripsiBerita = htmlspecialchars($datas->get('deskripsiBerita'));
        $jenisBerita = $datas->get('jenisBerita');
        $idRelation = '1';

        $sql = "UPDATE " . $this->table . " SET namaBerita = '$namaBerita', deskripsiBerita = \"$deskripsiBerita\", idRelation = '$idRelation', jenisBerita = '$jenisBerita' WHERE ".$this->primaryKey." ='$idBerita'";
        
        try {
            $data = $this->conn->prepare($sql);
            $data->execute();

            return $idBerita;
        } catch (PDOexception $e) {
            echo $e;
            die();
        }
    }

    public function approval($id, $approvalBerita)
    {
        $sql = "UPDATE " . $this->table . " SET approvalBerita = '$approvalBerita' WHERE ".$this->primaryKey." ='$id'";
        
        try {
            $data = $this->conn->prepare($sql);
            $data->execute();

            return $id;
        } catch (PDOexception $e) {
            echo $e;
            die();
        }
    }

    public function delete($id)
    {
        $sql = "DELETE FROM " . $this->table . " WHERE " . $this->primaryKey . " = '$id'";

        try {
            $query = $this->conn->prepare($sql);
            $query->execute();
            return $query;
        } catch (PDOException $e) {
            dump($e);
            die();
        }
    }

    public function updateLikeComment($idBerita, $datas)
    {
        $sql = "UPDATE " . $this->table . " SET countlikeBerita = '".$datas['countlikeBerita']."', countdislikeBerita = '".$datas['countdislikeBerita']."', countcommentBerita = '".$datas['countcommentBerita']."', countshareBerita = '".$datas['countshareBerita']."' WHERE ".$this->primaryKey." = '$idBerita'";
        
        try {
            $data = $this->conn->prepare($sql);
            $data->execute();

            return $id;
        } catch (PDOexception $e) {
            echo $e;
            die();
        }
    }
}
