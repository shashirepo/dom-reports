<?php

$dbhost = "localhost";
$dbname = "arvind";
$dbuser = "root";
$dbpass = "";

if(!$dbc = mysql_connect($dbhost,$dbuser,$dbpass)){
	echo "Could not connect to the database...";
	exit;
}
if(!mysql_select_db($dbname)){
	echo "Could not select the database...";
	exit;
}
?>