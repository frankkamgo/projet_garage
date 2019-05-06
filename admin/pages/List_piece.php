<hgroup>
    <h3 class="aligner txtGras">PIECES_AUTO</h3>
    <h4 class="text-muted aligner">outils et pieces</h4>
</hgroup>

<?php
//récupération des types pour la liste déroulante
//$typ = new TypeDB($cnx);
//$types = $typ->getType();
//$nbr_type = count($types);

//récupération des pieces
$vue = new vue_pieceDB($cnx);

$liste = array();
$liste = null;
//sans filtre de piece
    $liste = $vue->getAllPiece();
//$nbr=count($liste);
//avec filtre si on a fait un choix dans la liste déroulante: 
/*else {
    if (isset($_GET['choix_type']) && $_GET['choix_type'] != "") {
        $liste = $vue->getPiecesByType($_GET['choix_type']);
    } else {
        $liste = $vue->getAllPiece();
    }
}*/
?>

<?php
if ($liste != null) {
    $nbr = count($liste);
    ?>
    <div class="container ecartTop3pc">
        <?php
        for ($i = 0; $i < $nbr; $i++) {
            ?>
            <div class="row">
                <div class="col-sm-3 offset-1 text-center paddingT <?php if($i<$nbr-1){ echo "bordureb"; } ?>">
                    <ul>
                        <li >
                             <img src="images/<?php print $liste[$i]['image']; ?>" alt="Photo"/><br/><br/>
                        </li>
                    </ul>
                
                  
                </div>
                <div class="col-sm-5 text-center bordurel paddingB <?php if($i<$nbr-1){ echo "bordureb"; } ?>">
                    <?php
                    print "<br/>" . $liste[$i]['designation'] . "<br/><br/>";
                    print $liste[$i]['prix_p'] . " €<br/><br/>";
                    if ($liste[$i]['stock'] > 0) {
                        print "Il reste " . $liste[$i]['stock'] . " exemplaire";
                        if ($liste[$i]['stock'] > 1) {
                            print "s";
                        }
                        print " en stock<br/> ";
                    }
                    ?>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
    <?php
}//fin if $nbr >0
else {
    ?>
    <div class="container">
        <p>( contenu signifiant un problème ... )</p>
    </div>
    <?php
}