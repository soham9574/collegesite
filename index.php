<?php
session_start();

// include 'filename.php';
$username = 'root';
$password = '';
$server = 'localhost';
$db = 'resources';

$connection = mysqli_connect($server, $username, $password, $db,);
echo "</br>";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="index.css">

  
</head>
<body>

       <div class="main-container" class="flex">
             <form name="myForm" action="" method="post" >

                      <div class="parts" id="dp" class="flex" >
                          <img src="https://source.unsplash.com/random/" alt="dp">
                       </div>
                       <br>
            
                       <br>
                       <div class="parts" id="user" class="flex" >
                          <input  value=""  id="name"  name="username" class="flex" type="text"  placeholder="Enter your name" required>
                       </div>
                       <br>
                       <div class="parts" id="gmail" class="flex" >
                          <input value="" id="email" name="email" class="flex" type="email" required placeholder="Enter your email">
                       </div>
                       <br>
                       <div class="parts" id="mobile" class="flex" >
                          <input value="" id="mobile" name="mobile" class="flex" type="number" required placeholder="Enter your mobile number">
                       </div>
                       <br>
                       <div class="parts" id="course" class="flex" >
                          <input value="" id="course" name="course"class="flex" type="text" required placeholder="Enter your course and year">
                       </div>
                       <br>
                       <div class="parts" id="pass" class="flex" >
                          <input value=""  value=""name="pass" class="flex" type="password" id="pass"  required placeholder="Enter your password">
                       </div>
                       <br>
                       <div class="parts" id="cpass" class="flex" >
                          <input value=""  name="cpass" class="flex" type="password" id="cpass" required placeholder="Confirm your password">
                       </div>
                       <br>
                       <div class="parts" id="submit" class="flex" >
                         <button name="submit" type="submit" class="btn" id="btn1" >SUBMIT</button>
                       </div>
                       <br>
                       <div class="parts" id="login" class="flex" >
                         <button name="login" type="button" class="btn" id="btn3"  onclick="location.href ='login.php' "; >LOGIN</button>
                       </div>


             </form>
       </div>




<?php

if (isset($_POST['submit'])){


   
  


   $name = mysqli_real_escape_string($connection, $_POST['username']);
   $email = mysqli_real_escape_string($connection, $_POST['email']);
   $mobile = mysqli_real_escape_string($connection, $_POST['mobile']);
   $course = mysqli_real_escape_string($connection, $_POST['course']);
   $pass = mysqli_real_escape_string($connection, $_POST['pass']);
   $cpass = mysqli_real_escape_string($connection, $_POST['cpass']);
   $str_pass = password_hash($pass, PASSWORD_BCRYPT);



   $_SESSION['username'] = $name;
   $_SESSION['email'] = $email;
   $_SESSION['mobile'] = $mobile;
   $_SESSION['course'] = $course;
   $_SESSION['pass'] = $str_pass;
 


    if($pass === $cpass){
    

            $random = rand(1000, 9999);
            $_SESSION['random'] = $random;

  

$subject = "OTP verification";
$msg = "Hi $name ,your 4 digits otp for verification is $random ";
$sender = "From: patisoham02@gmail.com";

if(mail($email,$subject,$msg,$sender)){
   ?>
   <script>
    alert("OTP sent successfully");
    </script>
    <?php
   header("location:otp.php");


}else{
     ?>
   <script>
    alert("OTP sending Failed,Try registering again !");
    </script>
    <?php
   header("location:index.php");
}


   }

   else {

      ?>
       <script>
         alert("password not matching !");
       </script>
      
      <?php
   }



}





?>



















      
</body>
</html>