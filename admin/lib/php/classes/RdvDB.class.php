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
 public function addRdv($data){
        //$_db->beginTransaction();
        try{
            $query = "insert into rdv(date_rdv,description,mail,tel) values(:date_rdv,:description,:mail,:tel)";
            $resultset=$this->_db->prepare($query);
            $resultset->bindValue(':date_rdv', $data['date_rdv']);
            $resultset->bindValue(':description', $data['description']);
             $resultset->bindValue(':mail', $data['mail']);
              $resultset->bindValue(':tel', $data['tel']);
            $resultset->execute();
            return 1;
        } catch (PDOException $e) {
            print "Echec du rendez_vous ".$e->getMessage();
            return 2;
        }
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
