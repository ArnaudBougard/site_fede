<?php 
include_once ("../../model/eventDAO.php");
$FutureEvents=selectFutureEvents($bdd);
$PastEvents=selectPastEvents($bdd);
include ("../../pages/events/eventArchive.php");