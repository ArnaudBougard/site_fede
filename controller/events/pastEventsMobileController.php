<?php 
include_once ("../../model/eventDAO.php");
$pastEvents=selectSomePastEvents2($bdd);
$n=0;
include ("../../pages/events/pastEventsMobile.php");