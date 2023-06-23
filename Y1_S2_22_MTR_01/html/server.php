<?php 
	
	

	// initialize variables
	$location = "";
	$descriptions = "";
	$vehitype = "";
	$date = "";
	$phoneNo = "";
	$id = 0;
	$edit_state = false;

	//DB connection

	$db = mysqli_connect('localhost', 'root', '', 'vehicle');

	//Insert

if (isset($_POST['save'])) {
		$location = $_POST['location'];
		$descriptions = $_POST['descriptions'];
		$vehitype = $_POST['vehitype'];
		$date = $_POST['date'];
		$phoneNo = $_POST['phoneNo'];

		mysqli_query($db, "INSERT INTO book (location, descriptions, vehitype, date, phoneNo) VALUES ('$location', '$descriptions', '$vehitype', '$date', '$phoneNo')"); 
		$_SESSION['msg'] = "Details saved"; 
		header('location: index.php');
	}


    //Update
	
if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$location = $_POST['location'];
	$descriptions = $_POST['descriptions'];
	$vehitype = $_POST['vehitype'];
	$date = $_POST['date'];
	$phoneNo = $_POST['phoneNo'];	

	mysqli_query($db, "UPDATE book SET location='$location', descriptions='$descriptions', vehitype='$vehitype', date='$date', phoneNo='$phoneNo' WHERE id=$id");
	$_SESSION['msg'] = "Details updated!"; 
	header('location: book.php');
}

	//Delete

if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM book WHERE id=$id");
	$_SESSION['msg'] = "Details deleted!"; 
	header('location: book.php');
}

$result = mysqli_query($db, "SELECT * FROM book");

?>