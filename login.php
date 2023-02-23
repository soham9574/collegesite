<?php
session_start();
// echo $_COOKIE['email'];

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
  <title>Login Page</title>
  <link rel="stylesheet" href="index.css">
</head>
<style>
    #check{
        /*hieght: 10px;*/
        width: 20px;
        position:relative;
        left: 45%;
        /*right: 50%;*/
    }
    .flex{
  display: flex;
  justify-content: center;
  align-items: center;
}
</style>

<body>

  <div class="main-container" class="flex">
    <form name="myForm2" action="" method="post">
      <div class="parts" id="dp" class="flex">
        <img src="https://source.unsplash.com/random/" alt="dp">
      </div>
      <br>
      <br>
      <br>
      <br>
      <div class="parts" id="gmail" class="flex">
        <input name="user" id="user" class="flex" type="email" value=" " required placeholder="Enter your email">
      </div>
      <br>
      <div class="parts" id="cpass" class="flex">
        <input name="password" class="flex" type="password" id="otp" value="" required placeholder="Enter your password">
      </div>
      <br>
      <br>
            <div class="parts" id="check" class="flex">
  <input type="checkbox" name="check" id="check">&nbsp; <label for="check">&nbsp;&nbsp;&nbsp;Remember_me</label>
          </div> 
      <br>
      <div class="parts" id="submit" class="flex">
        <button name="submit" type="submit" class="btn" id="btn2">LOGIN</button>
      </div>
      <br>
            <div class="parts" id="submit" class="flex">
        <a href="forgot.php" name="forget" type="button" class="btn" id="btn2">Forget Password</a>
      </div>
    </form>
  </div>

















  
  <?php
  //  include 'filename.php';


  if (isset($_POST['submit'])) {

    $email = $_POST['user'];
    $password = $_POST['password'];


    $email_search="select * from registration where email = '$email'";
    $query = mysqli_query($connection, $email_search);
    $email_count = mysqli_num_rows($query);

    if ($email_count) {

      $email_pass = mysqli_fetch_assoc($query);
      $db_pass = $email_pass['pass'];

      
       $_SESSION['user'] = $email_pass['username'];
      $pass_dec = password_verify($password, $db_pass);
      if ($pass_dec) {
      
                      if (isset($_POST['check'])) {
            $email = $_POST['user'];
            $password = $_POST['password'];
            setcookie('emailcook', $email,time()+756864000);
            setcookie('passwordcook', $password,time()+756864000);
                         ?>
             <script>

                 location.replace('main.php');
             </script>
             <?php
           

          }
           else {
              ?>
             <script>
                 location.replace('main.php');
             </script>
             <?php
          }
        
        
        
      } else {
        ?>
        <script>
         alert('Incorrect password');
        </script>
        <?php
      } 
    } else {
      ?>
      <script>
       alert('Incorrect email');
      </script>
      <?php
    }
  }


  ?>
</body>




</html>