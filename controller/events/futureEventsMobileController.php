<?php 
include_once ("../../model/eventDAO.php");
$FutureEvents=selectSomeFutureEvents2($bdd);
$n=0;
include ("../../pages/events/futureEventsMobile.php");