<hgroup>
    <h3 class="aligner txtGras">LISTE DES MECANICIENS</h3>
</hgroup>

<?php
//récupération des elements pour la liste déroulante
$typ = new MecanicienDB($cnx);
$types = $typ->getMecanicien();
$nbr_type = count($types);
?>


<div class="container">
    <form action="<?php print $_SERVER['PHP_SELF']; ?>" method="get">
            <table class="table table-striped" style="color:black">
              <thead>
                <tr>
                  <th scope="col">identifiant du mecanicien</th>
                  <th scope="col">Nom</th>
                  <th scope="col">prenom</th>
                  <th scope="col">tel</th>
                </tr>
              </thead>
              <tbody >
                  <?php
                    for ($i = 0; $i < $nbr_type; $i++) {?>
                <tr>
                 
                  <td><?php  print $types[$i]->id_mecano; ?></td>
                  <td><?php print $types[$i]->nom_mecano; ?></td>
                  <td><?php  print $types[$i]->prenom_mecano; ?></td>
                   <td><?php  print $types[$i]->tel; ?></td>
                </tr>
                    <?php } ?>
                </tbody>
            </table>
    </form>
</div>

