<?php

namespace App\CommentBerita\Model;

use Core\GlobalFunc;
use PDOException;

class CommentBerita extends GlobalFunc
{
    private $table = 'commentberita';
    private $primaryKey = 'idCommentberita';
    public $conn;

    public function __construct()
    {
        $globalFunc = new GlobalFunc();
        $this->conn = $globalFunc->conn;
    }

    public function selectAll($where = "")
    {
        $sql = "SELECT * FROM " . $this->table . " LEFT JOIN users ON users.idUser = " . $this->table . ".idUser LEFT JOIN media ON media.idRelation = users.idUser " . $where;

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

    public function create($datas, $idBerita, $idUser, $idComment = null)
    {
        $idCommentberita = uniqid("bar");
        $commentText = $datas->get('commentText');
        $countlikeComment = 0;
        $countdislikeComment = 0;
        $countcommentComment = 0;
        $approval = '2';
        $dateCreate = date('Y-m-d');

        $sql = "INSERT INTO " . $this->table . " VALUES ('$idCommentberita', '$idUser', '$idBerita', '$commentText', '$countlikeComment', '$countdislikeComment', '$countcommentComment', '$idComment', '$approval', '$dateCreate')";

        try {
            $data = $this->conn->prepare($sql);

            $data->execute();
            return $idCommentberita;
        } catch (PDOException $e) {
            echo $e;
            die();
        }
    }

    public function update($datas, $idBerita, $idUser, $idComment)
    {
        $commentText = $datas['commentText'];
        $countlikeComment = $datas['countlikeComment'] != null ? $datas['countlikeComment'] : 0;
        $countdislikeComment = $datas['countdislikeComment'] != null ? $datas['countdislikeComment'] : 0;
        $countcommentComment = $datas['countcommentComment'] != null ? $datas['countcommentComment'] : 0;
        $commentonComment = $datas['commentonComment'] != null ? $datas['commentonComment'] : null;
        $approval = '2';
        $dateCreate = date('Y-m-d');

        $sql = "UPDATE " . $this->table . " SET idUser = '$idUser', idBerita = '$idBerita', commentText = '$commentText', countlikeComment = '$countlikeComment', countdislikeComment = '$countdislikeComment', countcommentComment = '$countcommentComment', commentonComment = '$commentonComment', approval = '$approval', dateCreate = '$dateCreate' WHERE ".$this->primaryKey." = '$idComment'";

        try {
            $data = $this->conn->prepare($sql);

            $data->execute();
            return $idComment;
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

    public function delete($id)
    {
        $sql = "DELETE FROM " . $this->table . " WHERE idPengumuman = '$id'";

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
