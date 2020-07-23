<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "coffee";
$link = mysqli_connect($serverName, $userName, $password);
mysqli_select_db($link, $databaseName);

?>