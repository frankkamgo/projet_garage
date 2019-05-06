<?php

/**
 * Description of RdvDB
 *
 * @author Kamgo
 */
class RdvDB extends Rdv {
    private $_db;
    private $_array = array();

    public function __construct($db) {//contenu de $cnx de l'index
        $this->_db = $db;
    }

    public function getRdv() {
        try {
            $query = "select * from rdv ";
            $resultset = $this->_db->prepare($query);
            //$resultset->bindValue(':login',$login);
           // $resultset->bindValue(':password',$password);
            $resultset->execute();

            while ($data = $resultset->fetch()) {
                $_array[] = new Rdv($data);
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
