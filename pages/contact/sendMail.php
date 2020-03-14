
<?php include("../../model/connexionDAO.php")?>
<?php include("../../model/contactDAO.php")?>

<?php

	if(isset($_POST["sendmail"])){
	// Check for empty fields

	if(isset($_SESSION['id_utilisateur'])){
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

	//////////////////////////////////////////////////////////// CONNEXION SERVEUR SMTP /////////////////////////////////////////////////////////////////////////
	include("../../controller/mailinit.php");

	$promo=lastPromo($bdd);
	$destinataires= get_Contacts($bdd,$contact,$promo);
	$count= count($destinataires);
	// $mailsDeTous=array();
	// foreach ($destinataires as list($mail)){
	// 	array_push($mailsDeTous, $mail);
	// }
	// $mailsDeTous=array($mailsDeTous);


	//////////////////////////////////////////////////////////// ENREGISTREMENT MAIL DANS LA DB /////////////////////////////////////////////////////////////////

	$req = $bdd -> prepare("INSERT INTO mails(expediteur, message, destinataire) VALUES(?,?,?)"); 
    $req->execute(array($email, $_POST['message'], $contact));

    $req->closeCursor(); // Termine le traitement de la requête



	//////////////////////////////////////////////////////////// ENVOI DU MAIL /////////////////////////////////////////////////////////////////////////
	$mailer= new Swift_Mailer($transport);
		$message_swift=(new Swift_Message('Site Fédé: un utilisateur vous contacte'))
			->setFrom(['commission.web@magellan.fpms.ac.be'=>'PostMaster: Fédé Polytech Mons'])
			// ->setTo($mail)
		;

		$message_swift->setBody(
		'<html>' .
		' <body>' .
		 $pseudo. "( ".$prenom." ".$nom." : ". $email. ') souhaite contacter: '." ".$contact. " ". "Voici son message: <br>". "<br>" .
		$_POST['message'].
		'</body>' .
		'</html>',
		  'text/html' // Mark the content-type as HTML
		);

		foreach ($destinataires as list($mail)){
	 		$message_swift->addTo($mail);
		}


		$result=$mailer->send($message_swift);
		echo ' <div class="container"><div class="row"> <h3>Un mail a été envoyé aux responsables concernés.</h3></div> </div>';
	
		// redirect("../index/index.php");
	

	}

	else{
		echo "Veuillez vous connecter!!";
	}
	
}


?>