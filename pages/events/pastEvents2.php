<?php 

$pastEvents=selectSomePastEvents2($bdd);
$n=0;
if(!empty($pastEvents)) {
  
    foreach ($pastEvents as list($id,$nom,$ouverture,$description,$date,$img,$organisateur,$lieu,$link,$dateCreation)) {
      $n=$n + 1;
        ?> 

          <div data-role="tile" data-size="large" data-effect="hover-slide-up" class="col-sm-6 tile">
            
            <div class="slide-front" data-cover="<?= "'".$img."'" ?>">

              <div class="tile-title">
                <h2><?= $nom; ?><h2>
              </div>

            </div>

              <div class="slide-back" data-cover="<?= "'".$img."'" ?>">  

                <div class="tile-content">

                  <p class="tile-text"><?= $date; ?></p>
                  <p class="tile-text"><?= $lieu; ?></p>

                  <?php 
                  if(!empty($link)){
                  ?>
                    <p class="tile-text"><a href="<?= $link; ?>">Event Facebook</a></p>
                        <br/>
                        <br/>
                  <?php
                  }
                  ?>
                
                  <p class="tile-text"><?=$description; ?></p>
                  <p class="tile-text">Publié le: <?= $dateCreation; ?></p>
                  <p class="tile-text"><btn class="btn-form2"><a href="../events/eventDetails.php?id= <?= $id; ?>" class="gras btn btn-xl">Plus d'info</a></btn>
                  </p>

                </div>

              </div>
          
          </div>  
                    
      <?php  
  }

}

for ($x = 0; $x < 2-$n; $x++){
?>

  <div data-role="tile" data-size="large" data-effect="hover-slide-up" class="col-sm-6 tile">
    
    <div class="slide-front" data-cover="../../assets/img/paixdieu.jfif">

      <div class="tile-title">
        <h2 >Seems like there's nothing up!<h2>
      </div>
      
    </div>

    <div class="slide-back" data-cover="../../assets/img/paixdieu.jfif">

      <div class="tile-title">
        <h2>BOUH!<h2>
      </div>
      
    </div>

  </div>

<?php 
}
?>