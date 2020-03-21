<?php 
include_once ("../../model/eventDAO.php");
$FutureEvents=selectSomeFutureEvents3($bdd);
$n=0;
include ("../../pages/events/futureEvents.php");