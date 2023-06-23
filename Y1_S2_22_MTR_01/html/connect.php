<?php
require  'config1.php'; //Linking the configuration file



if(isset($_POST["submit"])){

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $contactnumber = $_POST['contactnumber'];
        $password1 = $_POST['password1'];
        $password2 = $_POST['password2'];

  if($password1 == $password2)/*check passwords*/{

        $sql="insert into customerform(firstname,lastname,email,contactnumber,password1,password2) values('$firstname','$lastname','$email',' $contactnumber',' $password1','$password2')"

       
        if($con->query($sql)){

          echo"<script>alert('successfully submitted');window.location.href='userreg.php';</script>";

        }

       else{
        
         echo "form not submitted".$con->error;;
       }

  }
  $conn->close();

}

?>