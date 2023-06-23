<!DOCTYPE html>
<html>
<head>


<!--header-->
<div class="header">
<a href="../home/homepage.html">
<img class="logo" src="../images/logo.png" width="200" height="200"></a>
   <button class="btn" onclick="location.href='login.html';"><span>Login</span></button>
 <button class="btn" onclick="location.href='regselection.html';"><span>Sign Up</span></button>
   <button class="btn" onclick="location.href='book.php';"><span>Guest</span></button>
</div>


<!------navigation bar---------->
<div class="nav">
  <a href="../home/homepage.html">Home</a>
  <a class="active" href="#aboutus">About Us</a>
  <a href="../html/feedback.html">Feedback</a>
  <a href="../html/news.html">News</a>
  <a href="../html/contactus.html">Contact Us</a>
  <input type="text" placeholder="Search..">
</div>


<!---add favicon--->
<link rel="icon" type="image/x-icon" href="../images/favicon.png">

<link rel="stylesheet" href="../css/home.css">

<!style sheet of social media icons>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>


<link rel="stylesheet" href="../css/style21.css">
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

<!---Background white area---->
.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}


.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>
  <div class="sidebar sidebar-about">
    
      <ul class="nav-links">
	  
	  
	  
	   <li>
          <a href="book.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Book Vehicle</span>
          </a>
        </li>
        <li>
          <a href="index.php">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
       
      
       
      
      </ul>
  </div>
  <section class="home-section">


  
<div class="about-section">
  <h1>About Us Page</h1>
  <p>Taxio provides terminal operators identification data of vehicles and cargo in advance,</p>
  <p>therefore saving time at the terminal's</p>
  <p>gate area and making incoming and outgoing traffic flow easy to manage and analyze</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="../images/uu.jpeg" alt="Dehani" style="width:100%">
      <div class="container">
        <h2>Dehani Kavindya</h2>
        <p class="title">Student 1</p>
        <p>it21216800@my.sliit.lk</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

 <div class="column">
    <div class="card">
      <img src="../images/ii.jpeg" alt="Wanuja" style="width:100%">
      <div class="container">
        <h2>Wanuja Ranaweera</h2>
        <p class="title">Student 2</p>
        <p>it21260506@my.sliit.lk</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="../images/qq.jpeg" alt="Kulunu" style="width:100%">
      <div class="container">
        <h2>Kulunu Liyanage</h2>
        <p class="title">Student 3</p>
        <p>it21205088@my.sliit.lk</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  
  <div class="column">
    <div class="card">
      <img src="../images/tt.jpeg" alt="Jayath" style="width:100%">
      <div class="container">
        <h2>Jayath Kasiwaththa</h2>
        <p class="title">Student 4</p>
        <p>it21204234@my.sliit.lk</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
   <div class="column">
    <div class="card">
      <img src="../images/aa.jpeg" alt="Manuka" style="width:100%">
      <div class="container">
        <h2>Manuka Rashen</h2>
        <p class="title">Student 5</p>
        <p>it21291364@my.sliit.lk</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
 
  
 
</div>

<br><br><br><br><br><br>


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
