<?php 
include_once ("../../model/eventDAO.php");
$eventData=selectEventById($bdd,$_GET['id']);
include ("../../pages/events/eventDetails.php");