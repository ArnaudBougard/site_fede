<?php 
include_once ("../../model/newsDAO.php");
$pendingEventsArray=selectAllPendingNews($bdd);
$eventsArray=selectAllNews($bdd);
include ("../../pages/news/newsValidation.php");