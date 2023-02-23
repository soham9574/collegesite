<?php
session_start();


// $name=$_SESSION['username'];
// $username = $_SESSION['username'];

// if($name==""){
//     header("location:index.php");
// }



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iemresources</title>
    <link rel="stylesheet" href="main.css">
    <style>
        @media only screen and (max-width:659px) and (min-width:205px) {
       .photo img{
    display: block;
    height: 75vh;
    width: 100%;
  }
    .photo{
    display: block;
    height: 75vh;
    width: 100%;
  }
}
    </style>
    
</head>

<body>
    <div class="main">
        <nav id="nav">
            <div class="flex-box">

                <h1 class="welcome" >Welcome to iemresources.com</h1>
                <p id="user"></p>
                

            </div>
        </nav>

        <div class="photo">
            <img src="images/background.jpg" alt="">
        </div>
        <br/>
        <div class="documentation">
            <div class="flex-box" >
         <h3 class="about">ABOUT ENGINEERING</h3>
        <br>
        </div>
        <br>
            <p>
                As someone who has always been interested in how things work and taking them apart to see how they work, I can say that engineering is a field that has always been of interest to me. After doing some research, I have come to learn that engineering is the application of science and math to solve problems. Engineers use their knowledge to design and build structures, machines, and devices. They also work on improving existing designs.

There are many different types of engineering, and each type requires a different skill set. For example, civil engineers design and oversee the construction of roads, bridges, and other public works. They also work on environmental projects, such as finding ways to reduce pollution. Mechanical engineers design and build machines, such as cars and refrigerators. They also work on improving the efficiency of existing machines.

If you are interested in a career in engineering, you will need to get a good education. Most engineering jobs require at least a bachelor's degree. Some jobs, such as those in civil engineering, may require a master's degree or higher. To get a job in engineering, you will also need to pass a licensure exam.

 Engineering is a field that offers a lot of opportunities for those who are interested in it. It is
                
            </p>
        </div>
<br>
<br>

       
            <!-- <nav id="choose"> -->
                <div>
                    <p class="sub about flex-box">DEPARTMENTS</p>
                </div>
                
            <!-- </nav> -->
            
            


<br>

<div id="sub">
            <a href="error.php"> <button class="btns1 btn">CSE DEPARTMENT</button> </a>
            <br>
            <a href="ecedept2.php"> <button class="btns2 btn">ECE DEPARTMENT</button> </a>
            <br>
            <a href="error.php"> <button class="btns3 btn">IT DEPARTMENT </button> </a>
            <br>
            <a href="error.php"> <button class="btns4 btn ">EE DEPARTMENT </button> </a>
            <br>
            <a href="error.php"> <button class="btns5 btn">ME DEPARTMENT </button> </a>
            <br>
        </div>

        <div class="footer">
            <h3>Made by @ Soham Pati</h3>
            <br>
            <h5>IEM ECE 2025</h5>
            <br>
             <a id="insta" href="https://www.instagram.com/sohampati_/">Follow on Instagram</a>

        </div>
    </div>


<script src="main.js"></script>
</body>

</html>