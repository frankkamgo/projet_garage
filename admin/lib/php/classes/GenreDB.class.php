<?php

class GenreDB extends Genre {

    private $_db;
    private $_array = array();

    public function __construct($db) {//contenu de $cnx de l'index
        $this->_db = $db;
    }

    public function getGenre($login, $password) {
        try {
            $query = "select * from genre";
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':login', $login);
            $resultset->bindValue(':password', $password);
            $resultset->execute();

            while ($data = $resultset->fetch()) {
                $_array[] = new Genre($data);
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
