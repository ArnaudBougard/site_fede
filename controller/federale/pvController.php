<?php 
include_once ("../../model/federaleDAO.php");
$result=getPv($bdd);
include ("../../pages/federale/pv.php");