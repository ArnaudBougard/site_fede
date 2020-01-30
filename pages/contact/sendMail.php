<?php include("../../model/connexionDAO.php")?>
<?php include("../../model/contactDAO.php")?>


<?php
	// require_once '../../../vendor/autoload.php'; //Input packet for swift_mailer
	if(isset($_POST["sendmail"])){
	// Check for empty fields
	if( empty($_POST['contact']) || empty($_POST['message'])) {
	  http_response_code(500);
	  echo "ben faut remplir les champs fieuh!";
	  exit();
	}
	//$name = strip_tags(htmlspecialchars($_POST['name']));
	$pseudo = filter_var($_SESSION['pseudo_utilisateur'],FILTER_SANITIZE_EMAIL);
	$nom = filter_var($_SESSION['nom_utilisateur'],FILTER_SANITIZE_EMAIL);
	$prenom = filter_var($_SESSION['prenom_utilisateur'],FILTER_SANITIZE_EMAIL);
	//$email = strip_tags(htmlspecialchars($_POST['email']));
	$email = filter_var($_SESSION['email_utilisateur'],FILTER_SANITIZE_EMAIL);
	if($_POST['contact']=="Commission Web") {
		$contact="Web";
	}
	else {
		$contact = $_POST['contact'];
	}
	$contact = filter_var($contact,FILTER_SANITIZE_EMAIL);
	
	//$message = strip_tags(htmlspecialchars($_POST['message']));
	$message = filter_var($_POST['message'],FILTER_SANITIZE_EMAIL);

	echo " nom expediteur ".$pseudo."  <br> "."  email expediteur".$email."  <br>  "."cercle contacté: ".$contact."  <br>  "."message: ".$message. "<br>";
	

	// $transport=(new Swift_SmtpTransport('localhost',25)) //test 465
	// 	->setUsername('postmaster') // a modifier manuellement
	// 	->setPassword('passAdéterminer')  // a modifier manuellement
	// ;

	$promo=lastPromo($bdd);
	echo $promo;
	$destinataires= get_Contacts($bdd,$contact,$promo);
	$count= count($destinataires);
	// $mailsDeTous=array();
	// foreach ($destinataires as list($mail)){
	// 	array_push($mailsDeTous, $mail);
	// }
	// $mailsDeTous=array($mailsDeTous);

	$mailer= new Swift_Mailer($transport);
		$message_swift=(new Swift_Message('Test formulaire contact'))
			->setFrom(['commission.web@magellan.fpms.ac.be'=>'PostMaster: Fédé Polytech Mons'])
			// ->setTo($mailsDeTous)
			->setTo($mailsDeTous)
			->setBody($message)
		// 	->addPart('Email envoyé par: ',$email)
		;

		foreach ($destinataires as list($mail)){
		 	echo "mail envoyé à ". $mail; 
	 		$message_swift->addTo($mail);
		}


		$result=$mailer->send($message_swift);

	
		// redirect("../index/index.php");
	


}
?>