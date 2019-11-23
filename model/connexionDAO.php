<?php
	

	try 
	{
	   	$bdd = new PDO('mysql:host=localhost;dbname=bdd_site_fede;charset=utf8', 'root', '');
	} 

	catch (Exception $e)
	{
	    die('Erreur : ' . $e->getMessage());
	}		
?>