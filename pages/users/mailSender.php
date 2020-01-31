
<?php include("../../model/contactDAO.php");

$id= $bdd -> query('SELECT max(id_utilisateur) from utilisateur ');

// $req = $bdd -> prepare('SELECT max(id_utilisateur),email_utilisateur,password_utilisateur from utilisateur');
// $req->execute(array());

// $userinfo = $req ->fetch();                                     
//On enregistre les variables de session
	// $id = $userinfo['max(id_utilisateur)'];
	// $h = $userinfo['password_utilisateur'];
	// $mail = $userinfo['email_utilisateur'];


echo "Vous etes ici";
require_once '../../../vendor/autoload.php'; //Input packet for swift_mailer

include("../../controller/mailinit.php");

	



}
?>