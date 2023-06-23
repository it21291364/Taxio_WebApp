
<!DOCTYPE html>  
<html>
<head>
<title>Contact Us</title>

<!add favicon>
<link rel="icon" type="image/x-icon" href="../images/favicon.png">

<link rel="stylesheet" href="../css/home.css">
<link rel="stylesheet" href="../css/contactus.css">

<!style sheet of social media icons>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<!--header-->
<div class="header">
<a href="../home/homepage.html">
<img class="logo" src="../images/logo.png" width="200" height="200"></a>
   <button class="btn" onclick="location.href='login.html';"><span>Login</span></button>
   <button class="btn" onclick="location.href='signup.html';"><span>Sign Up</span></button>
   <button class="btn" onclick="location.href='booking.php';"><span>Guest</span></button>
</div>

<!navigation bar>
<div class="nav">
 <a href="../home/homepage.html">Home</a>
<a href="about.php">About Us</a>
<a href="feedback.html">Feedback</a>
<a href="news.html">News</a>
    <a class="active"  href="#contact">Contact Us</a>
  <input type="text" placeholder="Search..">
</div>

<div class="container">
	<h1>Contact Us<br></h1>
	<br>
	<p>We would appreciate receiving your message in order to improve our service...</p>
	
	<div class="contact-box">
		<div class="contact-left">
			<h3>Send your request</h3>
			<br>
			<form method="post" action="contactuscheck.php">
				   
				<div class="input1-row">
					<div class="Name">
						<label>Name</label>
						<input type="text" name="name" placeholder="Kamal Perera">
						</div>
						
					<div class="input1-group">
						<label>Email</label>
						<input type="email" name="email" placeholder="abcdefghi@gmail.com">
						</div>	
							
				</div> 
			

				<label>Message</label>
				<textarea  placeholder="Your Message"></textarea>
				<br><br>
				<button type="submit" class="btn">SEND</button><br>
				<br><a style="color: #f5a30a;">Thanks,</a>
				<?php  


if (isset($_POST['email']) && isset($_POST['message'])) {
	include 'config.php';

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$email = validate($_POST['email']);
	$message = validate($_POST['message']);

	if (empty($message) || empty($email)) {
		header("Location: contactus.html");
	}else {

		$sql = "INSERT INTO contactus(email, message) VALUES('$email', '$message')";
		$res = mysqli_query($conn, $sql);

		if ($res) {
			echo "We will contact you as soon as possible!";
		}else {
			echo "Your message could not be sent!";
		}
	}

}else {
	header("Location: contactus.html");
}
?>
				
				
			</form>
		</div>
		<div class="contact-right"> 
			<h3>Hotlines</h3>
			<table>
				<tr>
					<td>General Inquiries<br>+94717485125</td>
					<td>Business Inquiries<br>+94717731048</td>
				
				</tr>
				
				<tr>
					<td>Media &Marketing<br>media@taxio.lk</td>
					<td>Other<br>support@taxio.lk</td>
				</tr>
			</table>
			
	 	</div>
</div>












<!footer>
<div class="footer">
<h2>Follow Us On</h2>
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-youtube"></a>
<a href="#" class="fa fa-linkedin"></a>
<a href="#" class="fa fa-google"></a>

<p class="bottom">+94 714 312 589</p>
<p class="bottom">taxioonlinetaxi@gmail.com</p>
<p class="bottom">No.23/A, Camelia building, Dharmapala Road, Matara</p><br>
<img class="logo" src="../images/logo foot.png" alt="" width="70" height="70">
<p class="copy">© Copyright Taxio 2022 . All Rights Reserved</p>
</div>

</body>
</html>
