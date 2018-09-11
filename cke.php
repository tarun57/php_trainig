<?php
 session_start();
 if(isset($_POST["submit"])) {
   $con = mysqli_connect("localhost", "root", "", "pizone");
   $sql = "Select * from login2 where email = '" . $_POST["email"] . "' and password = '" . ($_POST["password"]) . "'";
   $result = mysqli_query($con,$sql);
   $user = mysqli_fetch_array($result);
   if($user) {
       $_SESSION["email"]= $user["email"];

       if(isset($_POST["remember"])) {
         setcookie ("email",$_POST["email"],time()+ (10 * 365 * 24 * 60 * 60));
         setcookie ("password",$_POST["password"],time()+ (10 * 365 * 24 * 60 * 60));
         ob_start();
               header("Location: dashboard.php");
          // echo'<script>window.location="index1.php"</script>';
       } else {
         echo "clear cookie.<br> click here to <a style= 'text-decoration: none; color: hotpink;' href ='index.php'>try agin</a>";
         if(isset($_COOKIE["email"])) {
           setcookie ("email",$_POST["email"],time()- (10 * 365 * 24 * 60 * 60));
         }
         if(isset($_COOKIE["password"])) {
          setcookie ("password",$_POST["password"],time()- (10 * 365 * 24 * 60 * 60));
         }
       }

   }
   // else {
 //          $message = "Invalid Login";
 // }
 }
 ?>
