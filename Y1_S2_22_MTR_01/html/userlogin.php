<?php 

//add session
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location:loginbook.php");
						die;
					}
				}
			}
			
			// Display the alert box 
			echo '<script>alert("wrong username or password!")</script>';
			
		}else
		{
			// Display the alert box 
			echo '<script>alert("wrong username or password!")</script>';
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
<title>Taxio</title>

<!--add favicon-->
<link rel="icon" type="image/x-icon" href="../images/favicon.png">

<link rel="stylesheet" href="../css/head&foot.css">

<!--style sheet of social media icons-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--user loging internal style sheet-->
<style>
.log-as-user{
	color:white;
	font-family: Arial, Helvetica, sans-serif;
	text-align:center;
	font-size: 31px;
	margin-top: 0px;
	padding-top: 40px;
	margin-bottom: 30px;
}

.log{
	border-style:solid;
	border-color: rgba(192, 192, 192, 0.514);
	font-size: 16px;
	font-style:normal;
	font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
	border-radius: 10px;
	text-align: center;
	padding: 7px;
	margin-top: 10px;
	width: 250px;
}

.log-btn{
	width: 90px;
	height: 38px;
	background-color:#ffcc66;
	color:#664400;
	font-size: 18px;
	font-weight: bold;
	border-radius: 10px;
	margin-left: 0%;
	border-style: none;
	transition-duration: 0.3s;
}

.log-btn:hover{
	
	background-color:#804000;
	font-size: 19.5px;
	color:white;
}

p.SignUp{
	font-size: 17px;
	font-family: 'Times New Roman', Times, serif;
    color:white;
}

.click{
	transition-duration: 0.3s;
}


.click:hover{
	color: crimson;
	
}

.input{
	position: absolute;
	background-color: rgba(230, 115, 0,0.5);
	text-align: center;
	font-weight:normal;
	font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
	font-size: 18px;
	margin-left: 35%;
	margin-right: 35%;
	border-radius: 20px;
	margin-top: 2%;
	margin-bottom: 20px;
	padding-bottom: 35px;
	padding-left: 3%;
	padding-right:3%;
	top: 60%;
}

</style>

</head>
<body>

<!--header-->
<div class="header">
<a href="../home/homepage.html">
<img class="logo" src="../images/logo.png" width="200" height="200"></a>
   <button class="btn" onclick="location.href='login.html';"><span>Login</span></button>
   <button class="btn" onclick="location.href='regselection.html';"><span>Sign Up</span></button>
   <button class="btn" onclick="location.href='book.php';"><span>Guest</span></button>
</div>

<!--navigation bar-->
<div class="nav">
  <a class="active" href="../home/homepage.html">Home</a>
  <a href="about.php">About Us</a>
  <a href="feedback.html">Feedback</a>
  <a href="news.html">News</a>
    <a href="contactus.html">Contact Us</a>
  <input type="text" placeholder="Search..">
</div>

<!--user login view-->
<div>
<img class="back" src="../images/userlogin.jpg" alt="background" width="100%">

	<div class="input">
		
		<h4 class="log-as-user">Login as a User</h4>

		<form method="POST" >
			Username<br>
			<input type="text" class="log" name="user_name"  placeholder="Enter Username" required> <br> <br>

			Password<br>
			<input type="password" class="log" name="password" placeholder="Enter Password" required><br> <br> <br> 
		

		<input type="submit" class="log-btn"  value="login" name="sub"><br> <br>

		<p class="SignUp">Don't Have an Account ? <a class="click" href="../userreg/sign.php">Click Here</a> to Sign Up</p><br>
	    </form>
	</div>

<!--footer-->
<div class="footer">
<h2>Follow Us On</h2>
<a href="https://www.facebook.com" class="fa fa-facebook"></a>
<a href="https://twitter.com" class="fa fa-twitter"></a>
<a href="https://www.youtube.com" class="fa fa-youtube"></a>
<a href="https://lk.linkedin.com" class="fa fa-linkedin"></a>
<a href="https://www.google.com" class="fa fa-google"></a>

<p class="bottom">+94 714 312 589</p>
<p class="bottom">taxioonlinetaxi@gmail.com</p>
<p class="bottom">No.23/A, Camelia building, Dharmapala Road, Matara</p><br>
<img class="logo" src="../images/logo foot.png" alt="" width="70" height="70">
<p class="copy">© Copyright Taxio 2022 . All Rights Reserved</p>
</div>

</body>
</html>


