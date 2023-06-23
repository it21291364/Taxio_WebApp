<!DOCTYPE html>
<html>
<head>
<title>Taxio</title>

<!--add favicon-->
<link rel="icon" type="image/x-icon" href="../images/favicon.png">

<link rel="stylesheet" href="../css/userreg.css">

<!--style sheet of social media icons-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--user registration internal style sheet-->
<style>
.register-as-user{
	color:white;
	font-family: Arial, Helvetica, sans-serif;
	text-align:center;
	font-size: 31px;
	margin-top: 0px;
	padding-top: 40px;
	margin-bottom: 30px;
}

.reg{
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

.reg-btn{
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

.reg-btn:hover{
	
	background-color:#804000;
	font-size: 19.5px;
	color:white;
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
<a href="homepage.html">
<img class="logo" src="../images/logo.png" width="200" height="200"></a>
   <button class="btn" onclick="location.href='login.html';"><span>Login</span></button>
   <button class="btn" onclick="location.href='regselection.html';"><span>Sign Up</span></button>
   <button class="btn" onclick="location.href='book.php';"><span>Guest</span></button>
</div>


<!--navigation bar-->

<div class="nav">
<a class="homepage.html">Home</a>
<a href="about.php">About Us</a>
<a href="feedback.html">Feedback</a>
<a href="news.html">News</a>
<a href="contactus.html">Contact Us</a>
<input type="text" placeholder="Search..">
</div>


<!--user login view-->
<div>
<img class="back" src="../images/register.jfif" alt="background" width="100%">

	<div class="input">
		
		<h4 class="register-as-user">User Registration</h4>

		<form onsubmit="return checkPassword ()" action="connect.php" method="POST" >
			Firstname<br>
			<input type="text" class="reg" name="firstname"  placeholder="Enter firstname" required> <br> <br>


                        Lastname<br>
  			<input type="text" class="reg" name="lastname"  placeholder="Enter lastname" required> <br> <br>
                       
                         Email<br>
			<input type="text" class="reg" name="email"  placeholder="Enter email" required title="abc@gmail.com"> <br> <br>


                        Contact Number<br>
			<input type="text" class="reg" name="contactnumber"  placeholder="Enter contactnumber " required title="10 digits"> <br> <br>

                 <div class="container">
			Password<br>
			<input type="password" class="reg" name="password1" id="pass1" placeholder="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must Contain At Least One Number And One Uppercase And Lowercase Letter,And At Least 10 Or More Charactters"><br><br>

                        Confirm Password<br>
			<input type="password" class="reg" name="password2" id="pass2" placeholder="confirm"  required> <br> <br> <br> 
                        
                        

                  </div>


		<input type="submit" class="reg-btn"  name ="submit" value="submit" ><br> <br>

		
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