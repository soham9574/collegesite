<?php
session_start();
$email=$_SESSION['email'];
$newotpplus=$_SESSION['randomNum'];
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
    <title>Change Password</title>
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
                          <h3>RESET PASSWORD</h3>
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
                          <input value="" id="email" name="newotp" class="flex" type="number" required placeholder="Enter your OTP"> 
                       </div>
                       <br>
                       <div class="parts" id="gmail" class="flex" >
                          <input value="" id="newpass" name="newpass" class="flex" type="password" required placeholder="Create new Password"> 
                       </div>
                       <br>
                       <div class="parts" id="gmail" class="flex" >
                          <input value="" id="cnewpass" name="cnewpass" class="flex" type="password" required placeholder="Confirm your Password"> 
                       </div>
                       <br>
 
                       <div class="parts" id="submit" class="flex" >
                         <button name="submits" type="submit" class="btn" id="btn1" >UPDATE</button>
                       </div>
                       <br>

             </form>
       </div>





<?php

if (isset($_POST['submits'])) {
    $email_search = "select * from registration where email = '$email'";
    $query = mysqli_query($connection, $email_search);
    $email_count = mysqli_num_rows($query);

    if ($email_count) {
        $newpass = $_POST['newpass'];
        $cnewpass = $_POST['cnewpass'];
        $str_new_pass = password_hash($cnewpass, PASSWORD_BCRYPT);
        $newotp = $_POST['newotp'];

      

        if ($newotp == $newotpplus) {

            if ($newpass == $cnewpass) {

                $updatequery = "UPDATE `registration` SET `pass`='$str_new_pass' WHERE email='$email'";
                $updatequery = mysqli_query($connection, $updatequery);

                if ($updatequery) {
                    ?>
                <script>
                     alert('Password updated sucessfully!');
                     location.replace('login.php');
                </script>
                  <?php
                } 
                 else {
                    ?>
                <script>
                     alert('Password not changed ! Please try again later');
                </script>
                <?php
                    // 
                }
            } else {
                ?>
                <script>
                     alert('Password not matching !');
                </script>
                <?php
            }

        }
         else {
            ?>
                <script>
                     alert('Invalid OTP !');
                </script>
                <?php
        }

    } else {
        ?>
    <script>
         alert('You are not registered! Please register now');
         location.replace("index.php")
    </script>
    <?php
    }

}

?>


    
</body>
</html>
