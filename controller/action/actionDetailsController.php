<?php 
include_once ("../../model/actionDAO.php");
$actionArray=selectActionById($bdd,$_GET['id']);
include ("../../pages/action/actionDetails.php");