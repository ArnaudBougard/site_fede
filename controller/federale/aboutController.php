<?php 
include_once ("../../model/cercleDAO.php");
$cercle=selectByName($bdd,'Fédérale');
include ("../../pages/federale/about.php");