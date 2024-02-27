<div class="encadre">

<table class="listeLegere">
      <tr>
          <th class="REP">Repas Midi</th>
          <th class="NUI">Nuitée</th>    
          <th class="ETP">Etape</th> 
          <th class="KM">Km</th>           
      </tr>

    <?php      
    foreach ( $lesFraisDate1 as $unFraisDate ) 
    {
      $montant = $unFraisDate['montant'];
    ?>
      <tr>
          <td><?php echo $montant ?></td>
    <?php 
    }
    ?>

    <?php
    foreach ($lesFraisDate2 as $unFraisDate)
    {
      $montant = $unFraisDate['montant'];
    ?>
          <td><?php echo $montant ?></td>
    <?php
    }
    ?>

    <?php
    foreach ($lesFraisDate3 as $unFraisDate)
    {
      $montant = $unFraisDate['montant'];
    ?>
          <td><?php echo $montant ?></td>
    <?php
    }
    ?>

    <?php
    foreach ($lesFraisDate4 as $unFraisDate)
    {
      $montant = $unFraisDate['montant'];
    ?>
          <td><?php echo $montant ?></td>
      </tr>
    <?php
    }
    ?>

</table>
</div>