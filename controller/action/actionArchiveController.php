<?php 
include_once ("../../model/actionDAO.php");
$FutureEvents=selectAllEvents($bdd);
include ("../../pages/action/actionArchive.php");