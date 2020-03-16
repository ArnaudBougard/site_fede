<?php
session_start(); 
include("../../model/connexionDAO.php");
include("../../controller/getConnexionData.php"); 
?>

<!DOCTYPE html>
<html lang="fr">

	<head>

		<?php include("../head.php"); ?>

		<link href="./action.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

	</head>

	<body id="body">

		<?php 
    include("../../model/eventDAO.php");
		include("../network.php");
		include("../navbar.php");
    include("../sideBar.php"); 
    ?>
		
    <div class="tilesContainer">

      <section class="cms-boxes">

        <div class="container-fluid">

          <h2>Évènements à venir</h2>

          <?php 

            $FutureEvents=selectAllEvents($bdd);
            
            if(!empty($FutureEvents)) {
              
                foreach ($FutureEvents as list($id,$nom,$ouverture,$description,$date,$img,$organisateur,$lieu,$link)) {
                    ?> 
                        <div class="col-md-3 cms-boxes-outer">

                          <div class="cms-boxes-items cms-features" style="background-image: url(<?php echo "'".$img."'" ?>); background-position: center top; background-size: 100% 100%; ">

                              <div class="small-box" >

                                <div class="col-sm-12">
                                  <h2 class="Tileh2"><?php echo$nom; ?></h2>
                                </div>

                                <div class="col-sm-12" >
                                    <p><?php echo$date; ?></p>
                                    <p><?php echo$lieu; ?></p>
                                    <?php 
                                        if(!empty($link)){
                                          ?>
                                          <p><a href="<?php echo $link; ?>" > Event Facebook </a></p>
                                          <br /> <br />
                                          <?php
                                      } ?>
                                </div>

                                <div class="col-sm-12">
                                  <p><?php echo$description; ?></p>
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

		<?php 
    include("../footer.php");
    include("../../scripts/toggle.php"); 
    ?>

	</body>

</html>

