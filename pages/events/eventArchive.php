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
		<?php include("../../model/eventDAO.php"); ?>
		
		<?php include("../network.php"); ?>

		<?php include("../navbar.php"); ?>

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

        $FutureEvents=selectFutureEvents($bdd);
        
        if(!empty($FutureEvents)) {
          
            foreach ($FutureEvents as list($id,$nom,$ouverture,$description,$date,$img,$organisateur,$lieu,$link)) {
                ?> 
                    <div class="col-md-3 cms-boxes-outer">
                      <div class="cms-boxes-items cms-features" style=" background-image: url(<?php echo "'".$img."'" ?>); background-position: center top; background-size: 100% 100%; ">

                        <!-- <div class="boxes-align"> -->
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
                        <!-- </div> -->
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

