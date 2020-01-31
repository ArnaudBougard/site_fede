<?php

echo "mailinit";
$transport=(new Swift_SmtpTransport('localhost',25)) //test 465
	->setUsername('postmaster') // a modifier manuellement
	->setPassword('passAdéterminer')  // a modifier manuellement
;

?>