
<?php
$erreur = '';
if (isset($_GET['Inscription'])) {
    extract($_GET, EXTR_OVERWRITE);

    if (empty($nom_c) || empty($prenom_c) || empty($tel) || empty($email1) || empty($password) || empty($numero) || empty($localite) || empty($cp) || empty($adresse)) {
        $erreur = "<span class='txtRouge txtGras'>Veuillez remplir tous les champs</span>";
    } else {
           $cl = new ClientDB($cnx);
           $retour = $cl->addClient($_GET);
           if($retour==1){ 
               print "<br/>Insertion effectuée";
           }
           else if($retour==2){
               print "<br/> Déjà encodé";
           }
           //var_dump($_GET);
    }
}
?>
    <div class="block-30 block-30-sm item" style="background-image: url('./Admin/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-10">
                <span class="subheading-sm">inscription</span>
                <h2 class="heading">inscription</h2>
            </div>
        </div>
    </div>
</div>
            <?php print $erreur; ?>
   <form   method="get" action="<?php print $_SERVER['PHP_SELF']; ?>" >
  <div class="form-row">
        <div class="col-md-4 mb-3">
      <label for="nom_c">Nom</label>
      <input type="text" class="form-control is-valid" id="nom_c" placeholder="entre nom" name="nom_c" value="" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
      
    <div class="col-md-4 mb-3">
      <label for="prenom_c">Prénom</label>
      <input type="text" class="form-control is-valid" id="prenom_c" placeholder="entre prénom"
       name="prenom_c" value="" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
       <div class="col-md-6 mb-3">
      <label for="telephone">Telephone</label>
      <input type="telephone" class="form-control is-invalid" id="telephone"name="tel" placeholder="xxx/xx.xx.xx"
        required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
      
    <div class="col-md-4 mb-3">
      <label for="email1">Email</label>
      <input type="email" class="form-control is-valid" id="email" placeholder="aaa@aaa.aa" name="email1"
         required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

       <div class="col-md-4 mb-3">
      <label for="password">password</label>
      <input type="password" class="form-control is-valid" id="password" placeholder="entre pass"
       name="password"  required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    
  <div class="form-row">
   
    <div class="col-md-3 mb-3">
      <label for="adresse">Adresse</label>
      <input type="adresse" class="form-control is-invalid" id="adresse" name="adresse" placeholder="Adresse"
        required>
     <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="numero">Numero</label>
      <input type="numero" class="form-control is-invalid" id="numero" placeholder="numero"
       name="numero" required>
     <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  </div>
   <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="codepostal">Codepostal</label>
      <input type="codepostal" class="form-control is-invalid" id="codepostal" name="cp"  placeholder="codepostal"
       required>
       <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="localite">Localite</label>
      <input type="localite" class="form-control is-invalid" id="localite" name="localite" placeholder="localite"
        required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    
  </div>
  
  </div>
    <input type="submit" value="S'enregistrer" class="btn btn-primary" name="Inscription" id="Inscription">
 
</form></div>
   