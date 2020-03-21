<?php 
include_once ("../../model/actionDAO.php");
$pendingActionArray=selectAllPendingActions($bdd);
$actionArray=selectAllActions($bdd);
include ("../../pages/action/actionValidation.php");