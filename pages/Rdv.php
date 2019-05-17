
<?php
$erreur = '';
if (isset($_GET['reserver'])) {
    extract($_GET, EXTR_OVERWRITE);

    if (empty($date_rdv) || empty($description)|| empty($mail)|| empty($tel) ) {
        $erreur = "<span class='txtRouge txtGras'>Veuillez remplir tous les champs</span>";
    } else {
           $cl = new RdvDB($cnx);
           $retour = $cl->addRdv($_GET);
           if($retour==1){ 
               print "<br/>rendez_vous effectuée";
           }
           else if($retour==2){
               print "<br/> Déja accordé";
           }
           //var_dump($_GET);
    }
}
?>

    <div class="block-30 block-30-sm item" style="background-image: url('./Admin/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-10">
                <span class="subheading-sm">rendez_vous</span>
                <h2 class="heading">rendez_vous</h2>
            </div>
        </div>
    </div>
</div>
            <?php print $erreur; ?>
   <form   method="get" action="<?php print $_SERVER['PHP_SELF']; ?>" >
  <div class="form-row">
        <div class="col-md-4 mb-3">
      <label for="date_rdv">date</label>
      <input type="text" class="form-control is-valid" id="date_rdv" placeholder="entre date souhaité" name="date_rdv" value="" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
      
    <div class="col-md-4 mb-3">
      <label for="description">description</label>
      <input type="text" class="form-control is-valid" id="description" placeholder="objet"
       name="description" value="" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
       <div class="col-md-4 mb-3">
      <label for="mail">mail</label>
      <input type="text" class="form-control is-valid" id="mail" placeholder="email"
       name="mail" value="" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
       <div class="col-md-4 mb-3">
      <label for="tel">télephone</label>
      <input type="text" class="form-control is-valid" id="tel" placeholder="phone"
       name="tel" value="" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
      
  </div>
  
    <input type="submit" value="reserver" class="btn btn-primary" name="reserver" id="reserver">
 
</form></div>
   