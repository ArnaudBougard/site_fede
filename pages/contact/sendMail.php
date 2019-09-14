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

require_once '/home/magellan/vendor/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('in-v3.mailjet.com', 25))
  ->setUsername('13f037cdb8146b88ab8c8e84673bef65')
  ->setPassword('69f8900c115413b465058b1db2a6b3aa')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Demande'))
  ->setFrom(['161841@student.umons.ac.be' =>'postmaster'])
  ->setTo(['simon.nicolas.laurent@live.be' => 'A name'])
  ->setBody($message)
  ->addPart('Email envoyé par: ',$email )
  ;

// Send the message
$result = $mailer->send($message);




?>


<!--SELECT tmp_mail FROM historique where tmp_annee = '?'  and tmp_nom = ?-->