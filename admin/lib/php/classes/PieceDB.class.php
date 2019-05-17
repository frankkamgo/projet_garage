<?php

class PieceDB extends Piece {
   
    private $_db;
    private $_array = array();

    public function __construct($db) {//contenu de $cnx de l'index
        $this->_db = $db;
    }

    public function getPiece() {
        try {
            $query = "select * from piece";
            $resultset = $this->_db->prepare($query);
            $resultset->execute();

            while ($data = $resultset->fetch()) {
                $_array[] = new Piece($data);
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
    
    public function updatePiece($champ,$nouveau,$id){        
        
        try {
          // PREPARER LA REQUETE COMME VU PRECEDEMMENT
            $query="UPDATE piece set ".$champ." = '".$nouveau."' where id_p ='".$id."'";            
            $resultset = $this->_db->prepare($query);
            $resultset->execute();            
            
        }catch(PDOException $e){
            print $e->getMessage();
        }
    }

}
