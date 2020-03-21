<?php
session_start();
include("../../controller/getConnexionData.php"); 
?>

<!DOCTYPE html>
<html lang="fr">

	<head>
		<?php include("../head.php"); ?>
	</head>

	<body id="body">

		<?php 
    include("../network.php");
    include("../navbar.php");
    include("../sideBar.php"); 
    ?>
		
    <div class="tiles-container">

      <section class="cms-boxes">

        <div class="container-fluid">

          <h2>Evénements à venir</h2>
          
          <?php 
          if(!empty($FutureEvents)){
            
            foreach ($FutureEvents as list($id,$nom,$ouverture,$description,$date,$img,$organisateur,$lieu,$link)){
            ?>

              <div class="col-md-3 cms-boxes-outer">

                <div class="cms-boxes-items cms-features" style=" background-image: url(<?= "'".$img."'" ?>); background-position: center top; background-size: 100% 100%; ">

                  <div class="small-box">

                    <div class="col-sm-12">
                      <h2 class="Tileh2"><?=$nom; ?></h2>
                    </div>

                    <div class="col-sm-12">

                        <p><?= $date; ?></p>
                        <p><?= $lieu; ?></p>

                        <?php 
                        if(!empty($link)){
                        ?>
                          <p><a href="<?= $link; ?>">Event Facebook</a></p>
                          <br/>
                          <br/>
                        <?php
                        } 
                        ?>

                        <p class="tile-text">
                          <btn class="btn-form2"><a href="../../controller/events/eventDetailsController.php?id= <?= $id; ?>" class="gras btn btn-xl">Plus d'info</a></btn>
                        </p>
                                      
                    </div>

                  </div>

                </div>

              </div>

            <?php  
            }

          }
          else{echo "pas d'events à afficher";}
          ?>

        </div>

        <div class="container-fluid">
          
          <h2>Evénements Passés</h2>

          <?php     
          if(!empty($PastEvents)){
            
            foreach ($PastEvents as list($id,$nom,$ouverture,$description,$date,$img,$organisateur,$lieu,$link)){
            ?> 
              <div class="col-md-3 cms-boxes-outer">

                <div class="cms-boxes-items cms-features" style=" background-image: url(<?= "'".$img."'" ?>); background-position: center top; background-size: 100% 100%;">

                  <div class="small-box">

                    <div class="col-sm-12">
                      <h2 class="Tileh2"><?=$nom; ?></h2>
                    </div>

                    <div class="col-sm-12">

                        <p><?= $date; ?></p>
                        <p><?= $lieu; ?></p>

                        <?php 
                        if(!empty($link)){
                        ?>
                          <p><a href="<?= $link; ?>">Event Facebook</a></p>
                          <br/>
                          <br/>
                        <?php
                        } 
                        ?>

                        <p class="tile-text">
                          <btn class="btn-form2"><a href="../../controller/events/eventDetailsController.php?id= <?= $id; ?>" class="gras btn btn-xl">Plus d'info</a></btn>
                        </p>
                                      
                    </div>

                  </div>

                </div>

              </div>

              <?php  
            }

          }
          else{echo "pas d'events à afficher";}
          ?>

        </div>

      </section>

    </div>

		<?php include("../footer.php"); ?>

	</body>

</html>