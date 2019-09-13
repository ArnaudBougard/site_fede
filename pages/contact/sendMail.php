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

	// Create the email and send the message
	$to = "mathdel@outlook.com"; // Add your email address inbetween the "" replacing yourname@yourdomain.com - This is where the form will send a message to.
	$subject = "Formulaire de contact :  $name";
	$body = "Vous avez reçu une nouvelle demande depuis votre le site Fede.  \n\n"."Voici plus de détails :\n\nName: $name \n \n  Email :  $email\n\nMessage:\n$message";
	$header = "De : noreply@sitefede.com \n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
	$header .= "Reply-To: $email";	

	if(!mail($to, $subject, $body, $header))
	  http_response_code(500);
}
?>
