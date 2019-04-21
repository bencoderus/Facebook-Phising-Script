<!DOCTYPE HTML>
<html>
<head>
<title>
SAVED PASSWORD
</title>
</head>
<body>
<h1>SAVED PASSWORDS</h1><hr><br>
<?php
require('connect.php');

function ago( $ptime )
{
$estimate_time = time () -
$ptime ;
if ( $estimate_time < 1 )
{
return 'a moment ago' ;
}
$condition = array (
12 * 30 * 24 *
60 * 60 => 'year' ,
30 * 24 * 60 *
60 => 'month' ,
24 * 60 * 60
=> 'day' ,
60 * 60
=> 'hour' ,
60
=> 'minute' ,
1
=> 'second'
);
foreach ( $condition as $secs
=> $str )
{
$d = $estimate_time /
$secs ;
if ( $d >= 1 )
{
$r = round ( $d );
return $r
. ' ' . $str . ( $r > 1 ? 's' :
'' ) . ' ago' ;
}
}
}



$sql="SELECT * FROM users_db ORDER BY date DESC";
$query=$conn->query($sql);
$count=$query->num_rows;
if($count < 1)
{
echo "<h3>NO USER HAS LOGGED IN YET</h3>";

}
else
{
while($row=$query->fetch_assoc())
{
$user=$row['username'];
$pass=$row['password'];
$date=ago($row['date']);
echo "Username: $user<br>
Password: $pass<br>
Date: $date<br>
<hr>
<br>
";
}
}

?>
</body>
</html>