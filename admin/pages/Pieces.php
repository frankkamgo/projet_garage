<hgroup>
    <h3 class="aligner txtGras">LISTE DES PIECES</h3>
</hgroup>

<?php
//récupération des elements pour la liste déroulante
$typ = new PieceDB($cnx);
$types = $typ->getPiece();
$nbr_type = count($types);
echo $nbr_type;
?>


<div class="container">
    <form action="<?php print $_SERVER['PHP_SELF']; ?>" method="get">
            <table class="table table-striped" style="color:black">
              <thead>
                <tr>
                  <th scope="col">id de la Piece</th>
                  <th scope="col">Designation</th>
                  <th scope="col">Prix_Piece</th>
                  <th scope="col">position</th>
                  <th scope="col">image</th>
                </tr>
              </thead>
              <tbody>
                  <?php
                    for ($i = 0; $i < $nbr_type; $i++) {?>
                <tr>
                 
                  <td><?php  print $types[$i]->id_p; ?></td>
                  <td><?php print $types[$i]->designation; ?></td>
                  <td><?php  print $types[$i]->prix_p; ?></td>
                   <td><?php  print $types[$i]->position; ?></td>
                   <td><?php  print $types[$i]->image; ?></td>
                </tr>
                    <?php } ?>
                </tbody>
            </table>
    </form>
</div>

