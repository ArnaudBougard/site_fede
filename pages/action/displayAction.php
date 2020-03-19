<?php 

$lastAction=selectLastAction($bdd);

if(!empty($lastAction)) {
  
    foreach ($lastAction as list($id,$nom,$prix,$quantite,$date,$img,$description)) {
        ?> 

          <div data-role="tile" data-size="large" data-effect="hover-slide-up" class="col-sm-4 tile">
            
            <div class="slide-front" data-cover="<?= "'".$img."'" ?>">

              <div class="tile-title">
                <h2 >Action de la semaine<h2>
              </div>

            </div>

            <div class="slide-back" data-cover="<?= "'".$img."'" ?>">

              <div class="tile-content">

              	<p class="tile-text"><?= $nom; ?></p>
              	<p class="tile-text">Prix: <?= $prix; ?> €</p>
              	<p class="tile-text">Pour <?= $quantite; ?> cl</p>
                <p class="tile-text">A partir du <?= $date; ?></p>
                <p class="tile-text"><btn class="btn-form2"><a href="../action/actionDetails.php?id= <?= $id; ?>" class="gras btn btn-xl">Plus d'info</a></btn></p>

              </div>

            </div>
          
          </div>  
                    
      <?php  
  }

}
else{
?>

  <div data-role="tile" data-size="large" data-effect="hover-slide-up" class="col-sm-4 tile">
      
    <div class="slide-front" data-cover="../../assets/img/paixdieu.jfif">

      <div class="tile-title">
        <h2>Pas d'action<h2>
      </div>
      
    </div>

    <div class="slide-back" data-cover="../../assets/img/paixdieu.jfif">

      <div class="tile-title">
        <h2>Pas d'action<h2>d
      </div>
      
    </div>
  
  </div>  

<?php  
}
?>