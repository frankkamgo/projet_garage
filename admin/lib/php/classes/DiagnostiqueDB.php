<?php


/**
 * Description of DiagnostiqueDB
 *
 * @author Kamgo
 */
class DiagnostiqueDB extends Diagnostique{
    private $_db;
    private $_array = array();

    public function __construct($db) {//contenu de $cnx de l'index
        $this->_db = $db;
    }

    public function getDiagnostique() {
        try {
            $query = "select * from diagnostique ";
            $resultset = $this->_db->prepare($query);
            //$resultset->bindValue(':login',$login);
           // $resultset->bindValue(':password',$password);
            $resultset->execute();

            while ($data = $resultset->fetch()) {
                $_array[] = new Diagnostique($data);
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
