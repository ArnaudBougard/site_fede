<?php 
include_once ("../../model/newsDAO.php");
$pendingEventsArray=selectMyPendingNews($bdd,$_SESSION['pseudo_utilisateur']);
$eventsArray=selectMyNews($bdd,$_SESSION['pseudo_utilisateur']);
include ("../../pages/news/newsManager.php");