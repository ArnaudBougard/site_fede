<?php 
include_once ("../../model/cercleDAO.php");
$cercle=selectByName($bdd,'Cercle des Fêtes');
$comitardsArray=selectLastComite($bdd,'Cercle des Fêtes',$annee);
include ("../../pages/folklore/fetes.php");