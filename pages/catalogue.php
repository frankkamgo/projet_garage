<hgroup>
    <h3 class="aligner txtGras">Gestion des pieces</h3>
    <h4 class="text-muted aligner">Carrosseries - Mecanique - Electricite</h4>
</hgroup>
<?php

//récupération des pieces
$vue = new PieceDB($cnx);
$liste = array();
$liste = null;

$liste = $vue->getPiece();
$nbr = count($liste);
echo $liste[0]->id_p;
?>

<div class="row">
    <div class="col-sm-12">
        <a href="./pages/printCatalogue.php" class="pull-right" target="_blank">Imprimer</a>
    </div>
</div>

<br/>

<h2 id="titre"> tableau dynamique</h2>

<div class="container table">
    <table class="table-responsive">
        <tr style="color:#ff0000">
            <th class="ecart">numéro de la piece</th>
            <th class="ecart">Genre de piece</th>
            <th class="ecart">Type</th>
            <th class="ecart">Désignation</th>
            <th class="ecart">Prix unitaire</th>
            
            <th class="ecart">Stocks en magasin</th>
        </tr>
        <?php
        for ($i = 0; $i < $nbr; $i++) {
            ?>
            <tr style="color:white">
               <td class="ecart"><?php print $liste[$i]->id_p; ?></td>
                <td class="ecart"><?php print $liste[$i]->id_genre; ?></td>
                <td class="ecart"><?php print $liste[$i]->id_type; ?></td>
                <td><span contenteditable="true" name="designation" class="ecart" id="<?php print $liste[$i]->id_p; ?>">
                        <?php print $liste[$i]->designation; ?></span>
                </td>
              
                <td><span contenteditable="true" name="prix_p" class="ecart" id="<?php print $liste[$i]->id_p; ?>">
                        <?php print $liste[$i]->prix_p; ?></span>
                </td>
                <td><span contenteditable="true" name="stock" class="ecart" id="<?php print $liste[$i]->id_p; ?>">
                        <?php print $liste[$i]->stock; ?></span>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>  
</div>