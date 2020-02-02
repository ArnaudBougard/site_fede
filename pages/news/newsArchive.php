<?php
session_start();
?>

<?php include("../../model/connexionDAO.php"); ?>
<?php include("../../controller/getConnexionData.php"); ?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<?php include("../head.php"); ?>

		<link href="./index2.css" rel="stylesheet">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

	</head>

	<body id="body">
		<?php include("../../model/newsDAO.php"); ?>
		
		<?php include("../network.php"); ?>

		<?php include("../navbar.php");
    include("../sideBar.php"); ?>

		<?php //include("./caroussel.php"); ?>

		<!--
		<div class="col-sm-4">
	        <iframe src="https://calendar.google.com/calendar/b/1/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=Europe%2FBrussels&amp;src=ZmV0ZXMucG9seXRlY2hAZ21haWwuY29t&amp;src=ZW4uYmUjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&amp;color=%23039BE5&amp;color=%230B8043&amp;showTitle=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;showDate=1" style="border-width:0" width="400" height="300" frameborder="0" scrolling="no"></iframe>
	    </div>
		-->
		
	   <div class="tilesContainer" >
  <section class="cms-boxes">
    <div class="container-fluid">
      <h2>Evénements à venir</h2>
      <?php 

        $NewsArray=selectAllnews($bdd);
        
        if(!empty($NewsArray)) {
          
            foreach ($NewsArray as list($id,$nom,$article,$auteur,$img,$action,$dateCreation,$statut)) {
            ?> 

              <div data-role="tile" data-size="large"  data-effect="hover-slide-up" class="col-sm-4 tile" >
               
                <div class="slide-front" data-cover="<?php echo "'".$img."'" ?>" >
                  <div class="tileTitle">
                    <h2 style="text-align: center; font-size: 3.4vh;"> <?php echo $nom; ?><h2>
                  </div>
                </div>

                <div class="slide-back" data-cover="<?php echo "'".$img."'" ?>">  
                <!-- <div class="slide-back" style="background-color: #1BB4B4;">   -->
                  <div class="tileContent">
                    <p class="tile-text"><?php echo $nom; ?></p>
                    <p class="tile-text"> Publié par: <?php echo $auteur; ?></p>
                   
                    <p class="tile-text">Publié le: <?php echo $dateCreation; ?></p>
                    <p class="tile-text">
                      <btn class="btn-form2"> <a href="../news/newsDetails.php?id= <?php echo $id; ?> " class="gras btn btn-xl"> Lire la suite</a> </btn>
                    </p>
                  </div>

                </div>
              
              </div>  
                          
            <?php  
            }

        }
        else{echo "pas de newsà afficher";}

      ?>
    </div>
  </section>
</div>

		<?php include("../footer.php"); ?>
    <?php include("../../controller/toggle.php"); ?>
	</body>


	

</html>

