<?php 
include_once ("../../model/eventDAO.php");
$pendingEventsArray=selectMyPendingEvents($bdd,$_SESSION['pseudo_utilisateur']);
$eventsArray=selectMyEvents($bdd,$_SESSION['pseudo_utilisateur']);
include ("../../pages/events/eventManager.php");