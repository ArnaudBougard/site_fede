<?php include("../../model/connexionDAO.php")?>
<?php include("../../model/contactDAO.php")?>


<?php
	require_once '../../../vendor/autoload.php'; //Input packet for swift_mailer
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

	echo " nom envoyeur ".$name."  <br> "."  expediteur".$email."  <br>  "."destinataires".$contact."  <br>  "."message: ".$message. "<br>";
	

	$transport=(new Swift_SmtpTransport('localhost',25)) //test 465
		->setUsername('postmaster') // a modifier manuellement
		->setPassword('passAdéterminer')  // a modifier manuellement
	;

	$promo=lastPromo($bdd);
	echo $promo;
	$destinataires= get_Contacts($bdd,$contact,$promo);
	$count= count($destinataires);
	$mailsDeTous=[];
	foreach ($destinataires as list($mail)){
		array_push($mailsDeTous, $destinataires);
	}

	$mailer= new Swift_Mailer($transport);
		$message_swift=(new Swift_Message('Test formulaire contact'))
			->setFrom(['commission.web@magellan.fpms.ac.be'=>'PostMaster: Fédé Polytech Mons'])
			// ->setTo($mailsDeTous)
			->setTo($mailsDeTous)
			->setBody($message)
		// 	->addPart('Email envoyé par: ',$email)
		;
		$result=$mailer->send($message_swift);
		echo "mail envoyé à "; 
		print_r($mailsDeTous);
	

		
		
		// redirect("../index/index.php");
	



/*

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465))
  ->setUsername('commission.web.polytechmons@gmail.com')
  ->setPassword('pass')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Demande'))
  ->setFrom(['161841@student.umons.ac.be' =>'postmaster'])
  ->setTo()
  ->setBody($message)
  ->addPart('Email envoyé par: ',$email )
  ;

// Send the message
$result = $mailer->send($message);

*/

}
?>