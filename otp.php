<?php
session_start();

$email=$_SESSION['email'];
$random = $_SESSION['random'];

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
    <title>OTP ver</title>
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
                       <div class="parts" id="gmail" class="flex" >
                          <input disabled name="emailver" class="flex" type="email" value=" <?php echo "$email"; ?> " required placeholder="Enter your email">
                       </div>
                       <br>
                       <div class="parts" id="cpass" class="flex" >
                          <input name="otp" class="flex" type="number" id="otp" value="<?php echo "$random"; ?>" required placeholder="Enter your OTP">
                       </div>
                       <br>
                       <div class="parts" id="submit" class="flex" >
                         <button name="submit" type="submit" class="btn" id="btn2" >SUBMIT</button>
                       </div>
             </form>
       </div>


      
</body>
</html>

<?php

if (isset($_POST['submit'])){
    $userotp = $_POST['otp'];
    // $emailver = $_POST['emailver'];

    // $email_search = "SELECT * FROM `registration` WHERE email = $emailver ";
    // $query = mysqli_query($connection, $email_search);
    // $emailcount = mysqli_num_rows($query);
    // if($emailcount>0){
    //     ?>
    //     <script>
    //        alert('email already exists');
    //     </script> 
    //  <?php
    //   header("location:index.php");
    // }

    // else 
    if($userotp == $random){

        $name=$_SESSION['username'];
        $email=$_SESSION['email'];
        $mobile=$_SESSION['mobile'];
        $course=$_SESSION['course'];
        $str_pass=$_SESSION['pass'];
        
        // $cpass=$_SESSION['cpass'];
       $email_query="select * from registration where email = '$email'";
       $query = mysqli_query($connection, $email_query);
       $emailcount = mysqli_num_rows($query);
       echo "$emailcount";
       if($emailcount>0){
         ?>
            <script>
               alert('Email already exists !');
               location.replace("index.php");
            </script> 
       <?php

       }

else{
        $insertion = " INSERT INTO `registration` (`username`,`email`,`mobile`,`course`,`pass`) VALUES ('$name','$email','$mobile','$course','$str_pass')";
        $iquery = mysqli_query($connection, $insertion);
        if ($iquery) {
            ?>
       <script>
          alert('registration success !');
          location.replace("login.php");
       </script> 
    <?php
                   
   //   header("location:login.php");
        }
        else{
            ?>
            <script>
               alert('registration unsuccessful !');
            </script> 
       <?php
        }
      }
    }
    else{
        ?>
        <script>
           alert('Invalid OTP !')
        </script>
 
          
   <?php
    }
   }
 


?>



