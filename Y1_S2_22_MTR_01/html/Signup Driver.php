

<!DOCTYPE html>
<html>
<head>
<title>Sign up As a Driver</title>

<!add favicon>
<link rel="icon" type="image/x-icon" href="../images/favicon.png">



<link rel="stylesheet" href="../css/home.css">
<link rel="stylesheet" href="../css/Signup Driver1.css">

<!style sheet of social media icons>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="../css/styleswwr1.css">
	<link rel="stylesheet" href="Signup Driver.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	


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



<!navigation bar>
<div class="nav">
<a class="active" href="../home/homepage.html">Home</a>
<a href="about.php">About Us</a>
<a href="feedback.html">Feedback</a>
<a href="news.html">News</a>
<a href="contactus.html">Contact Us</a>
  <input type="text" placeholder="Search..">
</div>


	<script>


		function TelephoneValidation(frm){
			let tel=frm.TelephoneNumber.value;

			if((isNaN(tel) || tel.length!=10) || (tel.charAt(0)!=0)){
				return true;
			}
			else{
				return false;
			}	
		}

		function MailValidation(frm){   
			let mail=frm.Email.value;
			if(mail.includes("@") && mail.includes(".")){
				let atPos=mail.indexOf("@"); 
				let dotPos=mail.lastIndexOf(".");

				if(atPos<dotPos){
						return false;
				}
				else{
					return true;
				}
			}
			else{
				return true;
			}
		}

		

	
		function getSummary(frm){
			let firstname=frm.FirstName.value;
			let lastname=frm.LastName.value;
			let fmail=frm.Email.value;
			let ftel=frm.TelephoneNumber.value;
			let subject=frm.Subject.value;
			let details=frm.Message.value;


			if(firstname==""){
				alert("First name must be filled out.")
			}
			else if(lastname==""){
				alert("Last name must be filled out.")
			}
			else if(fmail==""){
				alert("Email must be filled out.")
			}
			else if(MailValidation(frm)){
				alert("Email is not valid")
			}
			else if(ftel==""){
				alert("Telephone number must be filled out.")
			}
			else if(TelephoneValidation(frm)){
				alert("Telephone number is not valid")
			}
			else if(subject=="Insert"){
				alert("Subject must be selected.")
			}
			else if(details==""){
				alert("Location must be filled out.")
			}
			else{
				DisappearTheForm();	

				document.getElementById("id1").innerHTML="Name       &emsp; &emsp;   :&nbsp;"+firstname+ " "+lastname;
				document.getElementById("id2").innerHTML="Email         &emsp; &emsp;:&nbsp;"+fmail;
				document.getElementById("id3").innerHTML="Telephone                  :&nbsp;"+ftel;
				document.getElementById("id4").innerHTML="Vehicle Type &emsp; &emsp; :&nbsp;"+subject;
				document.getElementById("id5").innerHTML="Location     &emsp; &emsp; :&nbsp;"+details;
			}
		}

		function AppearTheForm(){
			document.getElementById("summary").style.display="none";
			document.getElementById("element").style.display = "block";
		}

		function DisappearTheForm(){
			document.getElementById("summary").style.display="block";
			document.getElementById("element").style.display = "none";	
		}

	</script>


	<form action="../includes/signup.inc.php" method="POST" enctype="text/plain" name="query" onsubmit="AppearTheForm()">
	
	<div id="element">				
		<div class="topic">
			<h1>SIGN UP AS A DRIVER</h1>
			
		</div>
		<div class="content">
				<div id="name">	
					<h2 class="name">Name</h2>
					<input type="text" name="FirstName" id="FirstName" class="hover" placeholder="First Name" ><br>
					<label class="firstlabel" for="FirstName">FirstName</label>
					
					<input type="text" name="LastName" id="LastName" class="hover" placeholder="Last Name"><br>
					<label class="lastlabel" for="LastName">LastName</label>	
				</div>

				<div id="mail">
					<h2 class="name">Mail</h2>
					<input type="email" name="Email" id="Email" class="hover" placeholder="Email" ><br>		
				</div>
				
				<div id="password">
					<h2 class="name">Password</h2>
					<input type="password" name="Password1" id="Password1" class="hover" placeholder="Password" ><br>
						
				</div>
				
				<div id="conpassword">
					<h2 class="name">Confirm Password</h2>
					<input type="password" name="conPassword1" id="conPassword1" class="hover" placeholder="Confirm Password" ><br>
						
				</div>

				<div id="telephone">
					<h2 class="name">Phone</h2>
					<input type="tel" name="TelephoneNumber" id="TelephoneNumber" class="hover" placeholder="Telephone" ><br>
						
				</div>

				<div id="SubjectSec">
					<h2 class="name">Vehicle Type</h2>
					<select name="Subject" id="Subject" class="hover" >
						<option value="Insert">-----Select-----</option>
						<option value="Car">Car</option>
						<option value="Van">Van</option>
						<option value="Lorry">Lorry</option>
						<option value="SUV">SUV</option>
						<option value="Pickup truck">Pickup truck</option>
					</select>		
				</div>
				
				
				
				
				<div id="details">
					<h2 class="name">Vehicle Details</h2>
					<textarea name="Message" id="Message" class="hover" placeholder="Vehicle Details"></textarea><br>		
				</div>

				<!---CHECK and RESET button-->
				<input type="button" class="button querybtn"  name="querybutton" value="CHECK" onclick="getSummary(this.form)">
				<input type="reset" class="button resetbtn"  name="resetbutton" value="RESET">
			</div>
	</div>

	<!---Summery Of The Form-->
	<div id="summary">
			<div class="topic">
				<h1>Summary</h1>
			</div>
			<div class="content">
				<p id="id1"></p>
				<p id="id2"></p>
				<p id="id3"></p>
				<p id="id4"></p>
				<p id="id5"></p>

				<input type="submit" class="button submitbtn" value="CONFIRM">
				<input type="button"  class="button editbtn" name="editbutton" value="Edit" onclick="AppearTheForm()">	</div>
	</div>
</form>

	



<!footer>
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
