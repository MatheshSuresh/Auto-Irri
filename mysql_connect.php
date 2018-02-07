<?php

$con=new mysqli('localhost','root','auto irrigate');

if($con->connect_errno)
{
	echo $con->connect_errno;
	die();
	
}
else{
	echo "Database connected";
}
?>