<?php

$con=new mysqli("localhost","root","","customerreg");

if ($con->connect_error)
{
	die("Connection failed: " . $con->connect_error);
}

?>