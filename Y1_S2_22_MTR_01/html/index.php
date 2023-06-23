<?php  include('server.php'); 

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  
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
  
  
  <!--add favicon-->
<link rel="icon" type="image/x-icon" href="../images/favicon.png">

<link rel="stylesheet" href="../css/home.css">
<script src="../js/script.js"></script>
<!--style sheet of social media icons-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/style21.css">
	<link rel="stylesheet" type="text/css" href="../css/viewtable.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta location="viewport" content="width=device-width, initial-scale=1.0">
   
   

  <div class="sidebar">
   
      <ul class="nav-links">
	  
	   <li>
          <a href="book.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Book Vehicle</span>
          </a>
        </li>
	  
        <li>
          <a href="index.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
      
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Book</div>
            <div class="number">86</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bx-cart-alt cart'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Cancle</div>
            <div class="number">10</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bxs-cart-add cart two' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Profit</div>
            <div class="number">Rs.120000</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bx-cart cart three' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Return</div>
            <div class="number">32</div>
            <div class="indicator">
              <i class='bx bx-down-arrow-alt down'></i>
              <span class="text">Down From Today</span>
            </div>
          </div>
          <i class='bx bxs-cart-download cart four' ></i>
        </div>
      </div>
	  
<?php $results = mysqli_query($db, "SELECT * FROM book"); ?>

<center><h1>Vehicle Book Details</h1></center>
<center><table id="mytable" class="content-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Location</th>
            <th>Discription</th>
			<th>Vehicle Type</th>
            <th>Date</th>
            <th>Phone Number</th>

        </tr>
    </thead>
    <tbody>
	
	<!--Display vehicle book details in dashboard-->
	
    <?php while ($row = mysqli_fetch_array($results)) { ?>
        <tr>
			<td><?php echo $row['id']; ?></td>
            <td><?php echo $row['location']; ?></td>
            <td><?php echo $row['descriptions']; ?></td>
            <td><?php echo $row['vehitype']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td><?php echo $row['phoneNo']; ?></td>

        </tr>
    <?php } ?>

</tbody>
</table></center>


    </div>
  </section>



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
