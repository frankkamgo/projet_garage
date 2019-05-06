<?php

class MecanicienDB extends Mecanicien {
   private $_db;
    private $_array = array();

    public function __construct($db) {
        $this->_db = $db;
    }

    public function getMecanicien() {
        try {
            $query = "select * from mecaniciens";
             
            $resultset = $this->_db->prepare($query);
          //  $resultset->bindValue(':login', $login);
          //  $resultset->bindValue(':password', $password);
            $resultset->execute();

            while ($data = $resultset->fetch()) {
                $_array[] = new Mecanicien($data);
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
