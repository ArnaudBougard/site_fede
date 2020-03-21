<?php 
include_once ("../../model/newsDAO.php");
$NewsArray=selectLastNews3($bdd);
$n=0;
include ("../../pages/news/recentNews.php");