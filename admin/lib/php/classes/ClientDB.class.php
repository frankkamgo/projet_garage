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
            $query = "insert into client(nom_c,prenom_c,tel,email,password,numero,localite,cp,adresse) values(:nom_c,:prenom_c,:tel,:email,:password,:numero,:localite,:cp,:adresse)";
            $resultset=$this->_db->prepare($query);
            $resultset->bindValue(':nom_c', $data['nom_c']);
            $resultset->bindValue(':prenom_c', $data['prenom_c']);
            $resultset->bindValue(':tel', $data['tel']);
            $resultset->bindValue(':email', $data['email1']);
            $resultset->bindValue(':password', $data['password']);
            $resultset->bindValue(':numero', $data['numero']);
            $resultset->bindValue(':localite', $data['localite']);
            $resultset->bindValue(':cp', $data['cp']);
            $resultset->bindValue(':adresse', $data['adresse']);
            $resultset->execute();
            return 1;
        } catch (PDOException $e) {
            print "Echec de l'insertion ".$e->getMessage();
            return 2;
        }
    }
        

    public function getClient() {
        try {
            $query = "select * from client where email_client=:email1 and password=:password";
            $resultset = $this->_db->prepare($query);
          $resultset->bindValue(':email1',$email, PDO::PARAM_STR);
        $resultset->bindValue(':password',$password, PDO::PARAM_STR);
            $resultset->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }

        while ($data = $resultset->fetch()) {
            try {
          // nous n'employerons pas d'objet, afin de faciliter la conversion en Json dans le 
          //fichier ajax ajaxRechercheClient.php
                $_array[] = $data;               
            } catch (PDOException $e) {
                print $e->getMessage();
            }
        }
        return $_array;
    }
    
     public function getClient1(){
          try {
            $query = "select * from client";
             
            $resultset = $this->_db->prepare($query);
          //  $resultset->bindValue(':login', $login);
          //  $resultset->bindValue(':password', $password);
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
