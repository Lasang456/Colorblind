<?php
echo "Registration";
if (isset($_REQUEST['username'])) {
 include ("init.php");
     $id = $_REQUEST['id'];
     $fname = $_REQUEST['firstname'];
     $lname = $_REQUEST['lastname'];
     $email = $_REQUEST['email'];
     $username = $_REQUEST['username'];
     $password = $_REQUEST['password'];
     $cpassword = $_REQUEST['confirm_password'];
 if (($password == $cpassword)){
     $hash = password_hash($password, PASSWORD_DEFAULT);
     $ins="INSERT INTO useraccount SET   fname='$fname', lname='$lname', email='$email', username='$username', password='$hash'";
      $result = mysqli_query($conn, $ins);
     if($result){
         echo "<div class='form'>
               <h3>You are registered successfully!</h3><br/>
               <p class='link'>Click here to <a href='index.html'>Login</a></p>
               </div>";
     }
     else {
         echo "Username already registered try different one";
     }
 }
 else{
     echo "password do not match";
 }

}
 ?>
