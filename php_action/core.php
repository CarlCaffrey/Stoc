<?php

session_start();

require_once 'db_connect.php';

// echo $_SESSION['userId'];

if(!$_SESSION['userId']) {
	header('location: https://stoc-lewiswisely.c9users.io/stock/index.php');
}



?>