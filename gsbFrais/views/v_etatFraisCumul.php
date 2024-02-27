
    <div class="encadre">

  	<table class="listeLegere">
            <tr>
                <th class="visiteur">Visiteur</th>
                <th class='montant'>Montant</th>                
            </tr>
        <?php      
          foreach ( $lesVisiteursTypeFrais as $unVisiteurTypeFrais ) 
		  {
			$numVisiteur = $unVisiteurTypeFrais['numVisiteur'];
			$montant = $unVisiteurTypeFrais['montant'];
		?>
            <tr>
                <td><?php echo $numVisiteur ?></td>
                <td><?php echo $montant ?></td>
            </tr>
        <?php 
          }
		?>
    </table>
  </div>