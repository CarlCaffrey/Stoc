<?php

    $servername = getenv('IP');
    $username = getenv('C9_USER');
    $password = "";
    $database = "stock";
    $dbport = 3306;

    // Create connection
    $connect = new mysqli($servername, $username, $password, $database, $dbport);
// check connection
if($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
} else {
  // echo "Successfully connected";
}



?>