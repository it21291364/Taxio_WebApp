
<!--access to the database-->
<!--set data using get method-->


<?php  include('server.php'); 


    if (isset($_GET['edit'])) {
        $id = $_GET['edit'];    
        $edit_state = true;
        $rec = mysqli_query($db, "SELECT * FROM book WHERE id=$id");
        $record = mysqli_fetch_array($rec);
        
        $location = $record['location'];
        $descriptions = $record['descriptions'];
        $vehitype = $record['vehitype'];
        $date = $record['date'];
        $phoneNo = $record['phoneNo'];
        $id = $record['id'];

        
    }
?>


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


<!--navigation bar--->
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

<!style sheet of social media icons>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

    <title>Vehicle Book</title>
    <link rel="stylesheet" type="text/css" href="../css/style2.css">
	 <link rel="stylesheet" href="../css/style21.css">
	 <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="footer.css">
    <link rel="stylesheet" type="text/css" href="viewtable.css">
	

  <div class="sidebar sidebar-book">
   
      <ul class="nav-links">
       
        <li>
          <a href="book.php" class="active">
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


  <!--Display both details uptade and details save-->
  
    <?php if (isset($_SESSION['msg'])): ?>
    <div class="msg">
        <?php 
            echo $_SESSION['msg']; 
            unset($_SESSION['msg']);
        ?>
    </div>
<?php endif ?>


<center><h1>Vehicle Book</h1></center>

    <form method="post" action="server.php" >
	
    <input type="hidden" name="id" value="<?php echo $id; ?>">    
        <div class="input-group">
            <label>Location</label>
            <input type="text" name="location" value="<?php echo $location; ?>">
        </div>
        <div class="input-group">
            <label>Description</label>
            <input type="text" name="descriptions" value="<?php echo $descriptions; ?>">
        </div>
        <div class="input-group">
            <label>Vehicle Type</label>
            <input type="text" name="vehitype" value="<?php echo $vehitype; ?>">
        </div>
        <div class="input-group">
            <label>Date</label>
            <input type="date" name="date" value="<?php echo $date; ?>">
        </div>
        <div class="input-group">
            <label>Phone Number</label>
            <input type="text" name="phoneNo" value="<?php echo $phoneNo; ?>">
        </div>
        
         <!--Book and updte icons---> 
        
        <div class="input-group">
        <?php if ($edit_state == false): ?>
            <button class="btn" type="submit" name="save" >Book</button>
        <?php else: ?>
            <button class="btn" type="submit" name="update" style="background: #556B2F;" >Update</button>
        <?php endif ?>
           </div>
    </form>

 <!--Display vehicle book details-->
 
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
            <th colspan="2">Action</th>
        </tr>
    </thead>
    <tbody>
	
	<!--Vehicle book details table-->
    <?php while ($row = mysqli_fetch_array($results)) { ?>
        <tr>
			<td><?php echo $row['id']; ?></td>
            <td><?php echo $row['location']; ?></td>
            <td><?php echo $row['descriptions']; ?></td>
            <td><?php echo $row['vehitype']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td><?php echo $row['phoneNo']; ?></td>
            <td>
                <a  href="book.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
            </td>
            <td>
                <a  href="server.php?del=<?php echo $row['id']; ?>" class="del_btn">Cancel Booking</a>
            </td>
        </tr>
    <?php } ?>

</tbody>
</table></center>


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
