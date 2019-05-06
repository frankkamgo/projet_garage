<?php

class PieceDB extends Piece {
    private $_db;
    private $_array = array();

    public function __construct($db) {
        $this->_db = $db;
    }

    public function getPiece() {
        try {
             //$this->_db->beginTransaction();
            $query = "select * from piece";
            // print $query;
            $resultset = $this->_db->prepare($query);
          //  $resultset->bindValue(':login', $login);
          //  $resultset->bindValue(':password', $password);
            $resultset->execute();
            $this->_db->commit();
            while ($data = $resultset->fetch()) {
                $_array[] = ($data);
               
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
