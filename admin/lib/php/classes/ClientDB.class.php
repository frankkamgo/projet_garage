<?php

/**
 * Description of ClientDB
 *
 * @author Kamgo
 */
class ClientDB extends Client {
    private $_db;
    private $_array = array();

    public function __construct($db) {//contenu de $cnx de l'index
        $this->_db = $db;
    }
    
     public function addClient($data){
        //$_db->beginTransaction();
        try{
            /*$query="insert into client(nom_client,email_client,password_client,adresse,numero,localite,cp)"
                    . " values(:nom_client,:email_client,:password_client,:adresse,:numero,:localite,:cp)";*/
            $query = "select ajouter_client(:nom_c,:prenom_c,:tel,:email,:password,:numero,:localite,:cp,:adresse) as retour";
            $resultset=$this->_db->prepare($query);
            $resultset->bindValue(':nom_c', $data['nom']);
            $resultset->bindValue(':prenom_c', $data['prenom']);
            $resultset->bindValue(':tel', $data['telephone']);
            $resultset->bindValue(':email', $data['email']);
            $resultset->bindValue(':password', $data['password']);
            $resultset->bindValue(':numero', $data['numero']);
            $resultset->bindValue(':localite', $data['localite']);
            $resultset->bindValue(':cp', $data['codepostal']);
            $resultset->bindValue(':adresse', $data['adresse']);
            $resultset->execute();
            $retour = $resultset->fetchColumn(0);
            return $retour;
        } catch (PDOException $e) {
            print "Echec de l'insertion ".$e->getMessage();
        }
    }
        

    public function getClient() {
        try {
            $query = "select * from client ";
            $resultset = $this->_db->prepare($query);
            //$resultset->bindValue(':login',$login);
           // $resultset->bindValue(':password',$password);
            $resultset->execute();

            while ($data = $resultset->fetch()) {
                $_array[] = new Client($data);
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
