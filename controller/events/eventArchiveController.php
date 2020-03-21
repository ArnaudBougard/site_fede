<?php 
include_once ("../../model/eventDAO.php");
$futureEvents=selectFutureEvents($bdd);
$pastEvents=selectPastEvents($bdd);
include ("../../pages/events/eventArchive.php");