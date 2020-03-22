<?php
session_start(); 
include("../../controller/getConnexionData.php");
?>

<!DOCTYPE html>
<html lang="fr">

	<head>
		<?php include("../head.php"); ?>
    <link href="./action.css" rel="stylesheet">
	</head>

	<body id="body">

		<?php 
		include("../network.php");
		include("../navbar.php");
    include("../sideBar.php"); 
    ?>
		
    <div class="tilesContainer">

      <section class="cms-boxes">

        <div class="container-fluid">

          <h2>Évènements à venir</h2>

          <?php 
          if(!empty($FutureEvents)){
            
            foreach ($FutureEvents as list($id,$nom,$ouverture,$description,$date,$img,$organisateur,$lieu,$link)){  
            ?>

              <div class="col-md-3 cms-boxes-outer">

                <div class="cms-boxes-items cms-features action-image" style="background-image: url(<?= "'".$img."'" ?>);">

                  <div class="small-box">

                    <div class="col-sm-12">
                      <h2 class="tile-h2"><?= $nom; ?></h2>
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
                    </div>

                    <div class="col-sm-12">
                      <p><?= $description; ?></p>
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