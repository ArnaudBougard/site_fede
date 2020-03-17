<?php 
include_once ("../../model/cercleDAO.php");

$cercle=selectByName($bdd,$name);
$annee=lastPromo($bdd);
$comitardsArray=selectLastComite($bdd,$name,$annee);

include ("../../pages/cercles/contenuCercle.php");