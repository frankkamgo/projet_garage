<hgroup>
    <h3 class="aligner txtGras">Outil et Pieces</h3>
    <h4 class="text-muted aligner">Commande</h4>
</hgroup>

<?php

if (isset($_GET['commander'])) {
    extract($_GET, EXTR_OVERWRITE);

    if (empty($email1) || empty($email2) || empty($nom_c) || empty($prenom_c) || empty($tel) || empty($adresse) || empty($numero) || empty($cp) || empty($localite)) {
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

$ok = 0;

if (!isset($_GET['id_p'])) {
    print "<p><br/><span class='txtGras'>Pour commander, choisissez <a href='index.php?page=instruments_piece.php'>ici</a> votre article</span></p>";
} else {
    print "<br/>Afficher ici le rappel de la  piece commandé<br/><br/>";
    $vue=new Vue_piece_genre_typeDB($cnx);
    $liste = $vue->getPiecesByType($_GET['id_p']);
    ?>
    <div class="row">
        <div class="col-xs-4 col-sm-2">
            <img src="./admin/images/<?php echo $liste[0]['image']; ?>" alt="Votre commande"/> 
        </div>
        <div class="col-xs-8 pull-left">
            <br/><span class="txtGras">Votre commande : <span class="txtRouge"></span></span><br/>
        </div>
    </div>
    <br/>
    <span class="txtGras">Veuillez entrer vos coordonnées :</span> <br/><br/>

     <div class="container">
          <?php
        if (isset($erreur))
            print $erreur;
        ?>
   <form action="<?php print $_SERVER['PHP_SELF']; ?>" method="get">
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="email1">Email</label>
      <input type="email" class="form-control is-valid" id="email" placeholder="aaa@aaa.aa" name="email1"
         required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    
      <div class="col-md-4 mb-3">
      <label for="email1">Confirmez votre email</label>
      <input type="email" class="form-control is-valid" id="email2" placeholder="aaa@aaa.aa" 
       name="email2"  required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
      
    <div class="col-md-4 mb-3">
      <label for="nom_c">Nom</label>
      <input type="text" class="form-control is-valid" id="nom_c" placeholder="entre nom"
       name="nom_c"  required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="prenom_c">Prénom</label>
      <input type="text" class="form-control is-valid" id="prenom_c" placeholder="entre prénom"
       name="prenom_c"  required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
       <div class="col-md-4 mb-3">
      <label for="password">password</label>
      <input type="password" class="form-control is-valid" id="prenom_c" placeholder="entre pass"
       name="password"  required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="telephone">Telephone</label>
      <input type="telephone" class="form-control is-valid" id="telephone" placeholder="xxx/xx.xx.xx"
        required>
        <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="adresse">Adresse</label>
      <input type="adresse" class="form-control is-valid" id="adresse" name="adresse" placeholder="Adresse"
        required>
      <div class="invalid-feedback">
        
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="numero">Numero</label>
      <input type="numero" class="form-control is-valid" id="numero" placeholder="numero"
       name="numero" required>
        <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  </div>
   <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="codepostal">Codepostal</label>
      <input type="codepostal" class="form-control is-valid" id="codepostal" name="cp"  placeholder="codepostal"
       required>
        <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="localite">Localite</label>
      <input type="localite" class="form-control is-valid" id="localite" name="localite" placeholder="localite"
        required>
       <div class="valid-feedback">
        Looks good!
      </div>
    </div>
     <div class="col-md-3 mb-3">
       <input type="hidden" name="id_p" value="<?php print $_GET['id_p']; ?>"/>
            <input type="submit" name="commander" id="commander" value="Finaliser ma commande" class="btn btn-primary"/>&nbsp;           
           
  </div>
        <input type="reset" id="reset" value="Annuler" class="btn btn-primary"/>
  </div>
  </div>
            
 
</form></div>
    <?php
}
?>
