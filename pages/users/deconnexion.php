<?php
session_start();
//On détruit toutes les variables de session
$_SESSION = array();
session_destroy();
setcookie('login', '');
setcookie('pass_hache', '');
header('Location: ../index/index.php');