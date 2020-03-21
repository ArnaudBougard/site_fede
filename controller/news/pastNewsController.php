<?php 
include_once ("../../model/newsDAO.php");
$NewsArray=selectSomeNews2($bdd);
$n=0;
include ("../../pages/news/pastNews.php");