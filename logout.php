<?php

require_once 'php_action/core.php';

// remove all session variables
session_unset();

// destroy the session
session_destroy();

header('location: https://stoc-lewiswisely.c9users.io/stock/index.php');

?>