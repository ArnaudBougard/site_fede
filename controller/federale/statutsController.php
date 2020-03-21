<?php 
include_once ("../../model/federaleDAO.php");
$result=getStatuts($bdd);
$result2=getStatuts2($bdd);
include ("../../pages/federale/statuts.php");