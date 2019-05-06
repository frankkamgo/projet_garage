<hgroup>
    <h3 class="aligner txtGras">RENDEZ_VOUS</h3>
</hgroup>

<?php
//récupération des elements pour la liste déroulante
$typ = new RdvDB($cnx);
$types = $typ->getRdv();
$nbr_type = count($types);
?>


<div class="container">
    <form action="<?php print $_SERVER['PHP_SELF']; ?>" method="get">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">Numero du rdv</th>
                  <th scope="col">Nom client</th>
                  <th scope="col">Prenom client</th>
                  <th scope="col">ville</th>
                  <th scope="col">rue</th>
                  <th scope="col">numero_rue</th>
                  <th scope="col">tel</th>
                  <th scope="col">Email</th>
                   <th scope="col">date du jour</th>
                </tr>
              </thead>
              <tbody>
                  <?php
                    for ($i = 0; $i < $nbr_type; $i++) {?>
                <tr>
                  <th scope="row"><?php print $types[$i]->id_rdv;?></th>
                  <td><?php  print $types[$i]->nom; ?></td>
                  <td><?php print $types[$i]->prenom; ?></td>
                  <td><?php  print $types[$i]->ville; ?></td>
                  <td><?php  print $types[$i]->rue; ?></td>
                  <td><?php  print $types[$i]->num; ?></td>
                  <td><?php  print $types[$i]->tel; ?></td>
                  <td><?php  print $types[$i]->email; ?></td>
                  <td><?php  print $types[$i]->date; ?></td>
                </tr>
                    <?php } ?>
                </tbody>
            </table>
    </form>
</div>

