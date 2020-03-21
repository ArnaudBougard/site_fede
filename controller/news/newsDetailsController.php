<?php 
include_once ("../../model/newsDAO.php");
$newsData=selectNewsById($bdd,$_GET['id']);	
include ("../../pages/news/newsDetails.php");