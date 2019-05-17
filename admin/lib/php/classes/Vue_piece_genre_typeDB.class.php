<?php

class Vue_piece_genre_typeDB {

    private $_db;
    private $_array = array();

    public function __construct($db) {//contenu de $cnx de l'index
        $this->_db = $db;
    }

    public function getAllPiece() {
        try {
            $this->_db->beginTransaction();
            $query = "select * from vue_piece_genre_type";
            $resultset = $this->_db->prepare($query);
            $resultset->execute();
            $this->_db->commit();
            while ($data = $resultset->fetch()) {
                $_array[] = $data;
            }
        } catch (PDOException $e) {
            print $e->getMessage();
        }
        if (!empty($_array)) {
            return $_array;
        } else {
            return null;
        }
    }

    public function getPiecesByType($id_p) {
        try {
            $this->_db->beginTransaction();
            $query = "select * from vue_piece_genre_type where id_p=:id_p";
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':id_p', $id_p);
            $resultset->execute();
            $this->_db->commit();
            while ($data = $resultset->fetch()) {
                $_array[] = $data;
            }
        } catch (PDOException $e) {
            print $e->getMessage();
        }
        if (!empty($_array)) {
            return $_array;
        } else {
            return null;
        }
    }

}
