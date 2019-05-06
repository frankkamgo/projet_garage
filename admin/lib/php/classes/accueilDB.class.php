<?php

class AccueilDB extends Accueil {//classe DAO

    private $_db;
    private $_array = array();

    public function __construct($db) {//contenu de $cnx de l'index
        $this->_db = $db;
    }

    public function getTexteAccueil() {
        try {
            $query = "select * from vue_fleur";
            $resultset = $this->_db->prepare($query);
            $resultset->execute();

            while ($data = $resultset->fetch()) {
                $_array[] = new Accueil($data);
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
