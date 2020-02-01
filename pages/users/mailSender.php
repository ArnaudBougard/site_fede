
<?php


$req = $bdd -> prepare('SELECT max(id_utilisateur) as id from utilisateur');
$req->execute(array());

$userinfo = $req ->fetch();     
$id = $userinfo['id'];
	
echo $id. "waaaaaaaaaaaaaaaaaw";


include("../../controller/mailinit.php");

echo "Vous etes ici";


	// redirect("../index/index.php");



	


	



}
?>