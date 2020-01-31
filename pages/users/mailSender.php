
<?php


$req = $bdd -> prepare('SELECT max(id_utilisateur) from utilisateur');
$req->execute(array());

$userinfo = $req ->fetch();     
$id = $userinfo['max(id_utilisateur)'];
	


echo "Vous etes ici";
require_once '../../../vendor/autoload.php'; //Input packet for swift_mailer

include("../../controller/mailinit.php");

	



}
?>