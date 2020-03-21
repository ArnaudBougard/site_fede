<?php 
include_once ("../../model/newsDAO.php");
$NewsArray=selectAllnews($bdd);
include ("../../pages/news/newsArchive.php");