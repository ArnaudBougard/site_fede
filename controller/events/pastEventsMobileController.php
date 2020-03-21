<?php 
include_once ("../../model/eventDAO.php");
$pastEvents=selectSomePastEvents3($bdd);
$n=0;
include ("../../pages/events/pastEventsMobile.php");