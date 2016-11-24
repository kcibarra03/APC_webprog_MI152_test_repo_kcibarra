<?php
$host = "localhost";
$user = "root";
$password = "";
$datbase = "dbtuts";
$link = mysqli_connect($host,$user,$password);
mysqli_select_db($link, $datbase);
?>