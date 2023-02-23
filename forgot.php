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
    <title>Forget password</title>
    <link rel="stylesheet" href="index.css">
<style>
   #btns{
      background-color: blue;
      color: white;
      height: 48px;
      width: 90px;
      border-radius: 12px;
   }
   #btns:hover{
      cursor: pointer;
   }
</style>
  
</head>
<body>

       <div class="main-container" class="flex">
             <form name="myForm" action="" method="post" >
                        
                      <div class="parts" id="dp" class="flex" >
                          <h3>FORGET PASSWORD</h3>
                       </div>
                       <br>
                     <br>
                     <br>

                      <div class="parts" id="dp" class="flex" >
                          <img src="https://source.unsplash.com/random/" alt="dp">
                       </div>
                       <br>
                       <br>
                       <br>
    
                       <div class="parts" id="gmail" class="flex" >
                          <input value="" id="email" name="email" class="flex" type="email" required placeholder="Enter your email">
                         
                       </div>
                       <br>
                 
 
                       <div class="parts" id="submit" class="flex" >
                         <button name="submit" type="submit" class="btn" id="btn1" >Send Otp</button>
                       </div>
                       <br>

             </form>
       </div>




<?php

if (isset($_POST['submit'])) {
   
   $email = mysqli_real_escape_string($connection, $_POST['email']);
   $_SESSION['email'] = $email;
   $randomNum = rand(1000, 9999);
   $_SESSION['randomNum'] = $randomNum;
   $subject = "OTP verification";
   $msg = "Hi,your 4 digits otp for verification is $randomNum  for password Change";
   $sender = "From: patisoham02@gmail.com";

   if (mail($email, $subject, $msg, $sender)) {
            ?>
                     <script>
                        alert('OTP sent successfully !');
                        location.replace('forgetmain.php');
                     </script>
           <?php
   }else{
      ?>
      <script>
         alert('OTP not sent !');
      </script>
<?php
   }
}




?>



















      
</body>
</html>
