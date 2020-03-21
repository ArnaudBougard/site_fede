<?php 
include_once ("../../model/chantDAO.php");
$chants = selectChants($bdd);
include ("../../pages/folklore/chants.php");