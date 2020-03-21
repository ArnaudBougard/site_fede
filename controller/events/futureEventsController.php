<?php 
include_once ("../../model/eventDAO.php");
$futureEvents=selectSomeFutureEvents3($bdd);
$n=0;
include ("../../pages/events/futureEvents.php");