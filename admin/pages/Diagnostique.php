<hgroup>
    <h3 class="aligner txtGras">DIANOSTIQUE EFFECTUE</h3>
</hgroup>

<?php
//récupération des elements pour la liste déroulante
$typ = new DiagnostiqueDB($cnx);
$types = $typ->getDiagnostique();
$nbr_type = count($types);
?>


<div class="container">
    <form action="<?php print $_SERVER['PHP_SELF']; ?>" method="get">
            <table class="table table-striped" style="color:black">
              <thead>
                <tr>
                  <th scope="col">Id du Diagnostique</th>
                  <th scope="col">Identifiant Du Mecanicien</th>
                  <th scope="col">Identifiant Du Véhicule en quetion</th>
                  <th scope="col">Identifiant Du Client</th>
                  <th scope="col">Date du diagnostique</th>
                </tr>
              </thead>
              <tbody >
                  <?php
                    for ($i = 0; $i < $nbr_type; $i++) {?>
                <tr>
                 
                  <td><?php  print $types[$i]->id_d; ?></td>
                  <td><?php print $types[$i]->id_mecano; ?></td>
                  <td><?php  print $types[$i]->id_v; ?></td>
                   <td><?php  print $types[$i]->id_c; ?></td>
                   <td><?php  print $types[$i]->date_d; ?></td>
                </tr>
                    <?php } ?>
                </tbody>
            </table>
    </form>
</div>

