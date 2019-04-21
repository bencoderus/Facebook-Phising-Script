<?php
$dbhost="localhost";
$dbuser="id8204582_fbclone";
$dbpass="123456";
$dbname="id8204582_project";

//connecting
$conn=new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if(!$conn)
{
die("Wrong DB connection, Check connect.php to fix");
}



?>