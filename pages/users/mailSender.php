
<?php


$req = $bdd -> prepare('SELECT max(id_utilisateur) as id from utilisateur');
$req->execute(array());

$userinfo = $req ->fetch();     
$id = $userinfo['id'];
	



include("../../controller/mailinit.php");

echo "Vous etes ici";
$mailer= new Swift_Mailer($transport);
	$message_swift=(new Swift_Message('Inscription Site Fédé'))
		->setFrom(['commission.web@magellan.fpms.ac.be'=>'PostMaster: Fédé Polytech Mons'])
		// ->setTo($mail)
	;

	$message_swift->setBody(
	'<html>' .
	' <body>' .
	'Bonjour '. ' '. $pseudo. ' <br> <br>'. ',cliquez <a href="http://atlantoge.be/site_fede/pages/users/mailValidation.php?id= <?php echo $id; ?>">ici </a> pour confirmer votre inscription au site de la fédération des étudiants de la faculté polytechnique de Mons.
	</body>' .
	'</html>',
	  'text/html' // Mark the content-type as HTML
	);

 	$message_swift->addTo($mail);
	
	$result=$mailer->send($message_swift);
	echo "Veuillez confirmer votre inscription en validant votre adress mail.";

	// redirect("../index/index.php");



	


	



}
?>