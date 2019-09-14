<?php
require_once '/home/magellan/vendor/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('sin-v3.mailjet.com', 25))
  ->setUsername('13f037cdb8146b88ab8c8e84673bef65')
  ->setPassword('69f8900c115413b465058b1db2a6b3aa')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Wonderful Subject'))
  ->setFrom(['161841@student.umons.ac.be' => 'Master of the Universe'])
  ->setTo(['simon.nicolas.laurent@live.be', 'simon.nicolas.laurent@gmail.com' => 'A name'])
  ->setBody('Here is the message itself')
  ;

// Send the message
$result = $mailer->send($message);
?>