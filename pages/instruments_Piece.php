<hgroup>
    <h3 class="aligner txtGras">Outils de Garage</h3>
    <h4 class="text-muted aligner">Carrosserie - Electricité - Mecanique</h4>
</hgroup>

<?php
//récupération des types pour la liste déroulante
$typ = new TypeDB($cnx);
$types = $typ->getType();
$nbr_type = count($types);

//récupération des pieces
$vue = new Vue_piece_genre_typeDB($cnx);

$liste = array();
$liste = null;
//sans filtre de piece
if (!isset($_GET['submit_choix_type'])) {
    $liste = $vue->getAllPiece();
}
//avec filtre si on a fait un choix dans la liste déroulante: 
else {
    if (isset($_GET['choix_type']) && $_GET['choix_type'] != "") {
        $liste = $vue->getPieceByType($_GET['choix_type']);
    } else {
        $liste = $vue->getAllPiece();
    }
}
?>

<div class="container">
    <form action="<?php print $_SERVER['PHP_SELF']; ?>" method="get">
        <div class="row">  
            <div class="col-sm-1 hidden-xs txtGras text-right">Filtrer</div>               
            <div class="col-sm-11">
                <select name="choix_type" id="choix_type">
                    <option value="">Piece</option>
                    <?php
                    for ($i = 0; $i < $nbr_type; $i++) {
                        ?>
                        <option value="<?php print $types[$i]->id_type; ?>">
                            <?php
                            print $types[$i]->nom_type;
                            ?>
                        </option>
                        <?php
                    }
                    ?>
                </select>
                <input type="submit" name="submit_choix_type" id="submit_choix_type">
            </div>
        </div>
    </form>
</div>


<?php
if ($liste != null) {
    $nbr = count($liste);
    ?>
    <div class="container ecartTop3pc">
        <?php
        for ($i = 0; $i < $nbr; $i++) {
            ?>
            <div class="row">
                <div class="col-sm-3 offset-1 text-center paddingT <?php if ($i < $nbr - 1) {
            echo "bordureb";
        } ?>">
                    <img src="admin/images/<?php print $liste[$i]['image']; ?>" alt="Photo"/><br/><br/>
                </div>
                <div class="col-sm-5 text-center bordurel paddingB <?php if ($i < $nbr - 1) {
            echo "bordureb";
        } ?>">
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
                    <p>
                        <br/><a href="index.php?page=client.php&id_p=<?php print $liste[$i]['id_p'];?> " > 
                            Acheter</a>
                    </p>
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
