<?php

//$id= $bdd -> query('SELECT max(id_utilisateur) from utilisateur ');

$req = $bdd -> prepare('SELECT max(id_utilisateur),email_utilisateur,password_utilisateur from utilisateur');
$req->execute(array());

$userinfo = $req ->fetch();                                     
//On enregistre les variables de session
	$id = $userinfo['max(id_utilisateur)'];
	$h = $userinfo['password_utilisateur'];
	$mail = $userinfo['email_utilisateur'];


// multiple recipients
$to  = $mail; // ajouter une virgule  .','

// subject
$subject = 'Inscription Site fédé: validez votre adresse email';

// message
$message = '
<html>
<head>
  <title>Inscription Site fédé: validation</title>
</head>
<body>
  <p>Cliquez le lien suivant pour valider votre inscription au site fédé:  http://yoursite.com/4-confirm.php?id='.$id.'</p>
</body>
</html>
';

echo $message;

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
//$headers .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
$headers .= 'From: Site Fédé <noreply@sitefede.com>' . "\r\n";
//$headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
//$headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";

// Mail it
mail($to, $subject, $message, $headers);

$req->closeCursor();

?>