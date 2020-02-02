<?php
session_start();
?>

<?php include("../../model/connexionDAO.php"); ?>
<?php include("../../controller/getConnexionData.php"); ?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<?php include("../head.php"); ?>

		<link href="activites.css" rel="stylesheet">

	</head>

	<body id="body">
		
		<?php include("../network.php"); ?>

		<!-- SCROLL TOP BUTTON ? (Rex) -->

		<?php include("../navbar.php"); 
		include("../sideBar.php");?>


		<div class="bg1">
			<div class="container" id="content"> 

				<div class="title-area">
					<h3 class="title2">Peyresq</h3> 
			  		<span class="title-line2"></span> 
				</div>

				<p>
				Ma mission cher lecteur, chère lectrice est de te faire découvrir Peyresq. C’est à travers ces quelques lignes que je vais t’initier à la vie peyrescane.
				Mais tout d’abord tu dois te demander ce qu’est Peyresq ?!
				<br>
				Peyresq est un charmant petit (très petit) village perché à 1528m d’altitude en région Provence-Alpes-Côte-D’azur. En 1950, ce village ne fut plus qu’un tas de pierres laissés à l’abandon par ses villageois mais un bruxellois tomba sous son charme et décida de redonner vie au village.<br>
				Au fil des années, des associations d’étudiants situées à Mons, Bruxelles, Liège et Gembloux achetèrent des maisons sur place et ont commencé la reconstruction complète du village. Les maisons sont maintenant totalement habitables et le confort n’est pas un problème (eau courante, électricité, chambres bien fournies, …).
				<br>
				De nos jours, de nombreux étudiants s’y retrouvent chaque été pour y passer leur début de vacances (tu pourras faire de nombreuses rencontres) mais ne pense pas qu’il n’y a que des étudiants car Peyresq est ouvert à tous ! En effet, grâce à l’asbl Pro peyresq tu peux y aller avec qui tu veux. 
				Nous possédons deux maisons : Galilée et Archimède qui peuvent être louées à tout moment de la saison.
				<br>
				A ce moment-là, tu te dis ok qu’est-ce que je vais aller me perdre là-bas au fin fond de la France… attends un peu la suite 
				<br>
				Sous le soleil de Peyresq, viens admirer avec nous tous ces recoins magnifiques à travers de belles randonnées, boire de délicieux soleils ou PASTIS, jouer à la pétanque sur la petite place, viens te détendre au lac aux eaux claires, manger des saucissons et du camembert. 
				Tu verras tu passeras des moments inoubliables.
				<br>
				Si tu as des envies sportives, ne t’inquiète pas, il y notamment des joggings organisés tous les jours afin de te préparer pour le déci marathon (ou le déci picole pour d’autres). Le village possède son propre terrain de volley qui se situe entre deux amas rocheux un peu plus haut. Il y a également la possibilité de faire du canyoning dans les sublimes gorges du Verdon. Les plus courageux, on peut également faire du vélo sur les petites routes de montagnes (sensations garanties).
				<br>
				Et puis le traditionnel méchoui du 14 juillet où tout le monde se réunit sur la place pour passer un moment convivial.<br>
				Quand Peyresq sera illuminé sous le ciel étoilé, viens donc passer la soirée au Jara (c’est le bar local), on s’y piche bien ! C’est là-bas où des casimirs et les délicieuses liqueurs t’attendent. Tu te demandes ce qu’est un casimir ? Viens a Peyresq pour le découvrir.
				<br>
				Je pourrais te parler encore longtemps de cet endroit mais le mieux pour toi est de venir par toi-même, te rendre compte de tes propres yeux à quel point le style de vie peyrescan est formidable.<br>
				Tu es retissant ? N’hésite pas à venir poser tes questions au comité qui se fera un plaisir d’y répondre. 

				<br>
				Chères lectrices, chers lecteurs, 51 bises.<br>
				<br>
				Nous vous disons à bientôt. <br>
				<br>
				</p>


			</div>
		</div>


		<?php include("../footer.php"); ?>
		<?php include("../../controller/toggle.php"); ?>

	</body>
</html>
