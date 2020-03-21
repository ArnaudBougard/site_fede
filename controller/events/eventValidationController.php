<?php 
include_once ("../../model/eventDAO.php");
$eventsArray=selectAllPendingEvents($bdd);
$validatedEventsArray=selectAllValidatedEvents($bdd);
include ("../../pages/events/eventValidation.php");