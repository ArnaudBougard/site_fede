<?php 
include_once ("../../model/actionDAO.php");
$lastAction=selectLastAction($bdd);
include ("../../pages/action/displayAction.php");