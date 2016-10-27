<?php
//To adjust sql configuration

$servername = "sql311.byethost13.com";
$username = "b13_18981129";
$password = "ngochieu123";
$dbname = "b13_18981129_root299";

// Create connection
$dblink = mysql_connect($servername, $username, $password);
$dbselect = mysql_select_db($dbname, $dblink);

// Check connection
if (!$dblink) {
    die("Connection failed: " . mysqli_connect_error());
}
?>