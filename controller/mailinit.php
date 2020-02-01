<?php


require_once '../../../vendor/autoload.php'; //Input packet for swift_mailer
$transport=(new Swift_SmtpTransport('localhost',25)) //test 465
	->setUsername('postmaster') // a modifier manuellement
	->setPassword('passAdéterminer')  // a modifier manuellement
;

?>
