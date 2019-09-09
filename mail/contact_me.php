<?php
// Check for empty fields
if(empty($_POST['name']) || empty($_POST['sname']) || empty($_POST['tsosy']) || empty($_POST['location']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  http_response_code(500);
  exit();
}

$name = strip_tags(htmlspecialchars($_POST['name']));
$sname = strip_tags(htmlspecialchars($_POST['sname']));
$tsosy = strip_tags(htmlspecialchars($_POST['tsosy']));
$location = strip_tags(htmlspecialchars($_POST['location']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));

// Create the email and send the message
$to = "mathdel@outlook.com"; // Add your email address inbetween the "" replacing yourname@yourdomain.com - This is where the form will send a message to.
$subject = "Formulaire de contact :  $name";
$body = "Vous avez reçu une nouvelle demande depuis votre le site Fede.  \n\n"."Voici plus de détails :\n\nName: $name \n \n  Email :  $email\n\nMessage:\n$message";
$header = "De : noreply@outlook.com \n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$header .= "Reply-To: $email";	

if(!mail($to, $subject, $body, $header))
  http_response_code(500);
?>