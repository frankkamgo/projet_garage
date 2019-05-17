<?php
header('Content-Type: application/json');
require '../pgConnect.php';
require '../classes/Connexion.class.php';
require '../classes/Piece.class.php';
require '../classes/PieceDB.class.php';

$cnx = Connexion::getInstance($dsn,$user,$pass);

try{       
   $update= new PieceDB($cnx);
   
   extract($_GET,EXTR_OVERWRITE);
    $parametre = 'id='.$id.'&champ='.$champ.'&nouveau='.$nouveau;
    $update->updatePiece($champ, $nouveau, $id);
    print json_encode($update);   
}
catch(PDOException $e){
    print $e->getMessage()." ".$e->getLine()." ".$e->getTrace()." ".$e->getCode();
}
