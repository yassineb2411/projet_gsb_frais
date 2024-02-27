<div id="contenu">
      <h2>Mes fiches de frais</h2>
      <h3>Le cumul des frais pour tous les visiteurs :</h3>
      <form action="index.php?uc=etatFrais&action=validerCumul" method="post">
      <div class="corpsForm">
         
      <p>
	 
        <label for="lstMois" accesskey="n">Mois : </label>
        <select id="lstMois" name="lstMois">
            <?php
			foreach ($lesMois as $unMois)
			{
			    $mois = $unMois['mois'];
				$numAnnee =  $unMois['numAnnee'];
				$numMois =  $unMois['numMois'];
				if($mois == $moisASelectionner){
				?>
				<option selected value="<?php echo $mois ?>"><?php echo  $numMois."/".$numAnnee ?> </option>
				<?php 
				}
				else{ ?>
				<option value="<?php echo $mois ?>"><?php echo  $numMois."/".$numAnnee ?> </option>
				<?php 
				}
			
			}
           
		   ?>    
            
        </select>

        <label for="typeFrais" accesskey="n">Type : </label>
        <select id="typeFrais" name="typeFrais">
            <?php foreach ($lesTypesFrais as $unTypeFrais):?>
				<option selected value="<?php echo $unTypeFrais['id']?>"><?php echo $unTypeFrais['id'] ?> </option>	
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