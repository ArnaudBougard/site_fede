<?php 
include_once ("../../model/actionDAO.php");
$actionArray=selectMyPendingActions($bdd,$_SESSION['pseudo_utilisateur']);
include ("../../pages/action/actionManager.php");