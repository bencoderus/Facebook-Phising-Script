<?php
Class dbClass
{
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="kelly";

//connecting
fuction connect()
{
$conn=new mysqli($dbhost, $dbuser, $dbpass, $dbname);
return $conn;
    
}

}

?>