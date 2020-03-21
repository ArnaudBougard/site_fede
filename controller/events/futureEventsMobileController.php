<?php 
include_once ("../../model/eventDAO.php");
$futureEvents=selectSomeFutureEvents2($bdd);
$n=0;
include ("../../pages/events/futureEventsMobile.php");