<?php

    include_once'../includes/dbh.inc.php';
	
    $first = $_POST['FirstName'];
	$last = $_POST['LastName'];
	$email = $_POST['Email'];
	$pwd = $_POST['Password1'];
	$tpn = $_POST['TelephoneNumber'];
	$sbt = $_POST['Subject'];
	$msg = $_POST['Message'];
    
    $sql = "INSERT INTO users (user_first,user_last,user_email,user_pwd,user_phone,user_vehicletype,user_vehicledetails)
    VALUES ('$first','$last','$email','$pwd','$tpn','$sbt','$msg');";
    
	mysqli_query($conn, $sql);
 
 
 header("Location: ../html/Signup Driver.php?signup=success");
 
 
 $lwt = "win";
 
 echo $lwt;