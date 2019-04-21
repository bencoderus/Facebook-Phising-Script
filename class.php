<?php
require('connect.php');

class Main{
public $user, $pass, $date;

function __construct($u, $p)
{
$this->user=$u;
$this->pass=$p;
$this->date=time();
}

function save(){
global $conn;
$sql="INSERT INTO users_db(username, password, date) VALUES(?, ?, ?)";
$stmt=$conn->prepare($sql);
$stmt->bind_param("ssi", $this->user, $this->pass, $this->date);
$result=$stmt->execute();
$stmt->close();
return $result;
}

function show()
{
echo "Your details<br>" .$this->user ."<br>".$this->pass;

}
function count()
{
$sql="SELECT * FROM users_db";
$query=$conn->query($sql);
$count=$query->num_rows;
return $count;
}
}


?>