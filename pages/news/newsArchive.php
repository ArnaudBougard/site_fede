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
		
    <div class="tilesContainer">

      <section class="cms-boxes">

        <div class="container-fluid">

          <h2>Evénements à venir</h2>

          <?php 
          if(!empty($NewsArray)){
            
            foreach ($NewsArray as list($id,$nom,$article,$auteur,$img,$action,$dateCreation,$statut)){
            ?> 

              <div data-role="tile" data-size="large" data-effect="hover-slide-up" class="col-sm-4 tile">
               
                <div class="slide-front" data-cover="<?= "'".$img."'" ?>">

                  <div class="tile-title">
                    <h2 style="text-align: center; font-size: 3.4vh;"><?= $nom; ?><h2>
                  </div>

                </div>

                <div class="slide-back" data-cover="<?= "'".$img."'" ?>">  

                  <div class="tile-content">
                    <p class="tile-text"><?= $nom; ?></p>
                    <p class="tile-text"> Publié par: <?= $auteur; ?></p>
                    <p class="tile-text">Publié le: <?= $dateCreation; ?></p>
                    <p class="tile-text"><btn class="btn-form2"><a href="../news/newsDetails.php?id= <?= $id; ?>" class="gras btn btn-xl">Lire la suite</a></btn></p>
                  </div>

                </div>
              
              </div>  
                          
            <?php  
            }

          }
          else{echo "Pas de news à afficher";}
        ?>

        </div>

      </section>

    </div>

		<?php include("../footer.php"); ?>

	</body>

</html>