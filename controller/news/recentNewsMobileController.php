<?php 
include_once ("../../model/newsDAO.php");
$NewsArray=selectLastNews2($bdd);
$n=0;
include ("../../pages/news/recentNewsMobile.php");