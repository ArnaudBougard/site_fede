<?php 
include_once ("../../model/newsDAO.php");
$NewsArray=selectSomeNews3($bdd);
$n=0;
include ("../../pages/news/pastNews.php"); 