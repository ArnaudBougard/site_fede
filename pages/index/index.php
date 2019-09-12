<?php
session_start();
?>

<?php include("../../model/connexionDAO.php"); ?>
<?php include("../../controller/getConnexionData.php"); ?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
		 
    	

    	<?php include("../head.php"); ?>
    	<link href="./index.css" rel="stylesheet">	

	</head>

	<body id="body">
		<?php include("../events/eventDAO.php"); ?>
		
		<?php include("../network.php"); ?>

		<?php include("./header.php"); ?>

		<?php include("../navbar.php"); ?>

		<!--
		<div class="col-sm-4">
	        <iframe src="https://calendar.google.com/calendar/b/1/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=Europe%2FBrussels&amp;src=ZmV0ZXMucG9seXRlY2hAZ21haWwuY29t&amp;src=ZW4uYmUjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&amp;color=%23039BE5&amp;color=%230B8043&amp;showTitle=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;showDate=1" style="border-width:0" width="400" height="300" frameborder="0" scrolling="no"></iframe>
	    </div>
		-->


	    <?php include("../events/futureEvents.php"); ?>

	    <?php include("../events/pastEvents.php"); ?>

		<?php include("../footer.php"); ?>


		<!-- jQuery first, then Metro UI JS -->
	    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	    <script src="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script>
	</body>





	

</html>

