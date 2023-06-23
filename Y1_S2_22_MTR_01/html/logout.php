<?php

session_start();

if(isset($_SESSION['user_id']))
{
	unset($_SESSION['user_id']);
	
}




//after logout redirect to homepage
header("Location:../home/homepage.html");

die;



