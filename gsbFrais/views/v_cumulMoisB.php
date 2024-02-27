<div id="contenu">
      <h2>Mes fiches de frais</h2>
      <h3>Le cumul des frais pour un visiteur :</h3>
      <form action="index.php?uc=etatFrais&action=validerCumulB" method="post">
      <div class="corpsForm">
      
      <p>
	
        <label for="idVisiteur" accesskey="n">Visiteur : </label>
        <input type="text" name="idVisiteur">

        <label for="typeFrais" accesskey="n">Type : </label>
        <select id="typeFrais" name="typeFrais">
            <?php foreach ($lesTypesFrais as $unTypeFrais):?>
              <option value="<?php echo $unTypeFrais['id']?>"><?php echo $unTypeFrais['id']?></option>	
            <?php endforeach?>    
        </select>

      </p>
      </div>
      <div class="piedForm">
      <p>
        <input id="ok" type="submit" value="Valider" size="20" />
        <input id="annuler" type="reset" value="Effacer" size="20" />
      </p> 
      </div>
        
      </form>