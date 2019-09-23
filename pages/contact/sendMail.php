<?php include("../../model/connexionDAO")?>
<?php include("../../model/userDAO")?>


<?php
	if(isset($_POST["sendmail"])){
	// Check for empty fields
	if(empty($_POST['name']) || empty($_POST['contact']) || empty($_POST['email']) || empty($_POST['message'])) {
	  http_response_code(500);
	  exit();
	}
	$name = strip_tags(htmlspecialchars($_POST['name']));
	
	$email = strip_tags(htmlspecialchars($_POST['email']));
	$contact = strip_tags(htmlspecialchars($_POST['contact']));
	$message = strip_tags(htmlspecialchars($_POST['message']));



	require_once '../../../vendor/autoload.php'; //Input packet for swift_mailer



	

	//$req=$bdd->prepare('SELECT * FROM `historique` ') //on selectionne le cercle pour last promo search secrétaire
	//$req1=$bdd->query('SELECT tmp_email FROM `historique` ORDER BY `tmp_annee` DESC WHERE tmp_cercle=$contact AND tmp_poste='Président' LIMIT 1');
	$req_destination=$bdd->query('SELECT tmp_email FROM `historique` ORDER BY `tmp_annee` DESC WHERE tmp_cercle=$contact LIMIT 1');
	$destinataires= array($req_destination);
	echo ($req_destination);
	$destinataires_lenth= count($destinataires);
	

	$transport=(new Swift_Mailer('server.smtp.com',25)) //test 465
		->setUsername('postmaster')
		->setPassword('passAdéterminer')
	;

	for ($i=0; $i <$destinataires_lenth ; $i++)
	 { 
		$destinataire=$destinataire[i];
		$mailer= new Swift_Mailer($transport);
		$message_swift=(new Swift_Message)
			->setFrom(['postmaster@fede.fpms.ac.be'=>'PostMaster: Fédération des étudiants polytech Mons'])
			->setTo($destinataire)
			->setBody($message)
			->addPart('Email envoyé par: ',$email)
		;
		$result=$mailer->send($message_swift);

	};



/*

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465))
  ->setUsername('commission.web.polytechmons@gmail.com')
  ->setPassword('Magellanthenavigateur')
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


?>