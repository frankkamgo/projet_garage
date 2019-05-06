


   <form action="<?php print $_SERVER['PHP_SELF']; ?>"div class="mx-auto" style="width: 500px;" class="needs-validation novalidate">
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">NOM</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="Nom" value="Nom" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip02">PRENOM</label>
      <input type="text" class="form-control" id="validationTooltip02" placeholder="Prenom" value="prenom" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltipUsername">Mail</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
        </div>
        <input type="text" class="form-control" id="validationTooltipUsername" placeholder="Mail" aria-describedby="validationTooltipUsernamePrepend" required>
        <div class="invalid-tooltip">
          SVP entrez un mail existant.
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationTooltip03">Marque</label>
      <input type="text" class="form-control" id="validationTooltip03" placeholder="marque de votre voiture" required>
      <div class="invalid-tooltip">
        
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationTooltip04">ville</label>
      <input type="text" class="form-control" id="validationTooltip04" placeholder="ville" required>
      <div class="invalid-tooltip">
        SVP entrez la bonne ville.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationTooltip05">telephone</label>
      <input type="text" class="form-control" id="validationTooltip05" placeholder="tel" required>
      <div class="invalid-tooltip">
         SVP entrez un numero valide.
      </div>
    </div>
      <div class="form-row">
       
    <div class="form-row">
   
  <div class="form-row align-items-center">
      <div class="col-auto my-1" class="col-md-3 mb-3">
       <label for="validationTooltip07">Quel type de problemme ? SVP</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option selected>Fite un choix...</option>
        <option value="1">Accident</option>
        <option value="2">Mecanique</option>
        <option value="3">carrosserie</option>
        <option value="3">Autre</option>
      </select>
         <div class="invalid-tooltip">
         SVP entrez un numero valide.
      </div>
    </div>
    </div>
       <div class="form-group">
            <label for="validationTooltip07">Vous pouvez faire un commentaire</label>
            <textarea class="form-control" name="message" rows="3" placeholder="Message"></textarea>
              <div class="col-md-3 mb-3">
    </div>
       </div>
         <div class="col-md-3 mb-3">
      <label for="validationTooltip05">telephone</label>
      <button class="btn btn-primary" class="mx-auto"  type="submit">Submit form</button>
      <div class="invalid-tooltip">
         
      </div>
    </div>
      
  </div>
  </div>
</form>


