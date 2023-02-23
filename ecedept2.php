<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECE 2ND YEAR</title>
    <style>

.flex-box{
    display: flex;
    justify-content: center ;
    text-align: center;
    align-self: center;
    flex-wrap: wrap;

}
nav{
    background-color: yellow;
    height: 8vh;
    width: 100%;
    color: black;
}
.subject{
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    /* justify-content: space-between; */
    column-gap: 30px;
}
.subsubject{
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: space-around;
    
    }
.button{
    height: 180px;
    width: 220px;
    background-color: antiquewhite;
    color: black;
    cursor: pointer;
    font-size: 30px;
    font-family: monospace,sans-serif;
    /* text-align: center center; */
    text-align: center;
    vertical-align: middle;
  transition: 0.1s;
  background-color: aquamarine;
  border:none;
  border-radius:25px;
  
}
.button:hover{
    transform: scale(1.02);
}
.btn1{
 background-color:lightgoldenrodyellow ;
}
.btn3{
 background-color: lightcoral;
}
.btn6{
 background-color: lightseagreen;
}
.btn8{
 background-color:lightblue ;
}
a{
    display: flex;
    justify-content: center ;
    text-align: center;
    align-self: center;
    text-decoration: none;
}
.underline{
    text-decoration: underline;
    text-transform: capitalize;
    /* text-emphasis: bolder; */
    font-weight: bold;
    font-size: 25px;
}
.image img{
    height: 80vh;
    width: 100%;
}
@media only screen and (max-width:659px) and (min-width:205px) {
    .button{
    height: 130px;
    width: 140px;
    font-size: 18px;
     margin-top: 5%;
  margin-bottom: 5%;
}
.subject{
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
     justify-content: space-between; 
    column-gap: 30px;
}
.subsubject{
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: space-around;
    
    }
}

    </style>
</head>
<body>
    <div class="main">
       <nav class="flex-box" >
           <h3>ECE 2ND YEAR</h3>
       </nav>

       <div class="image">
<img src="images/Electronics-and-Communication-Engineering-ECE.jpg" alt="">
       </div>

       <div  class="flex-box subnav">
        <h3 class="underline" >SUBJECTS AND SYLLABUS</h3>
       </div>

<div class="subject ">
           <div class="subsubject  ">
      <a href="images/edsyl.png" class="link  "><button  class=" button btn5" >Electronic Devices</button></a>
      
      <a href="images/dsdsyl.jpeg" class="link"><button class=" button btn6" >Digital System Design</button></a>
      
      <a href="images/dsasyl.jpeg" class="link"><button class=" button btn7" >Data Structures and Algorithm</button></a>
      
      <a href="images/mathsyl.jpeg" class="link"><button class=" button btn8" >Mathematics III</button></a>
      <!-- <a href="" class="link"><button class="flex-box button btn1" ></button></a> -->
           </div>
          <br> 
          <!--<br> -->
           
        <div class="subsubject  ">
            <a href="" class="link"><button class=" button btn1" >Signals and Systems</button></a>
            
            <a href="" class="link"><button class=" button btn2" >ESP & SDP</button></a>
            
            <a href="" class="link"><button class=" button btn3" >Network Theory</button></a>
            
            <a href="" class="link"><button class=" button btn4" >APTI</button></a>
            <!-- <a href="" class="link"><button class="flex-box button btn1" ></button></a> -->
        </div>

       </div>
 


 <div  class="flex-box subnav">
    <h3 class="underline" >ONLINE BOOKS</h3>
   </div>

<div class="subject ">
       <div class="subsubject  ">
  <a onclick="alertuser()" href="" class="link  "><button class=" button btn5" >NEAMAN (ED)</button></a>
  <a onclick="alertuser()" href="" class="link"><button class=" button btn6" >MATHEMATICS PROB(SPN SIR)</button></a>
  <a onclick="alertuser()" href="" class="link"><button class=" button btn7" >DSA RIMA THAREGA</button></a>
  <a onclick="alertuser()" href="" class="link"><button onclick="alertuser()" class=" button btn8" >SIGNALS AND SYSTEMS</button></a>
  <!-- <a href="" class="link"><button class="flex-box button btn1" ></button></a> -->
       </div>
       <br>
       <!--<br>-->
    <div class="subsubject ">
        <a href="" class="link"><button onclick="alertuser()" class=" button btn1" >NETWORK THEORY</button></a>
        <a href="" class="link"><button onclick="alertuser()" class=" button btn2" >OTHERS</button></a>
        <a href="" class="link"><button onclick="alertuser()"class=" button btn3" >OTHERS</button></a>
        <a href="" class="link"><button onclick="alertuser()" class=" button btn4" >OTHERS</button></a>
        <!-- <a href="" class="link"><button class="flex-box button btn1" ></button></a> -->
    </div>

   </div>
<!-- </div> -->


<div  class="flex-box subnav">
    <h3 class="underline" >QUESTION PAPERS</h3>
   </div>

<div class="subject">
       <div class="subsubject ">
  <a  href="https://drive.google.com/file/d/1AdYgVZkWhdfOV2GGq081m0S4_i0UXDal/view?usp=sharing" class="link "><button class=" button btn1" >MIDSEM 1</button></a>
  <a href="https://drive.google.com/file/d/1_c1c4LPT3EY6OFGDiXTm2Ifij00-zByA/view?usp=sharing" class="link"><button  class=" button btn2" >MIDSEM 2</button></a>
  <a href="" class="link"><button onclick="alertuser()" class=" button btn3" >ODDSEM</button></a>
  <a href="" class="link"><button  class="button btn4" >PREV YR ODD SEM</button></a>
  <!-- <a href="" class="link"><button class="flex-box button btn1" ></button></a> -->
       </div>
       <br>
       <!--<br>-->
    <div class="subsubject ">
        <a href="" class="link"><button onclick="alertuser()" class=" button btn5" >MIDSEM 3</button></a>
        <a href="" class="link"><button onclick="alertuser()" class=" button btn6" >MIDSEM 4</button></a>
        <a href="" class="link"><button onclick="alertuser()" class=" button btn7" >EVEN SEM</button></a>
        <a href="" class="link"><button onclick="alertuser()" class=" button btn8" >PREV YR EVEN SEM</button></a>
        <!-- <a href="" class="link"><button class="flex-box button btn1" ></button></a> -->
    </div>

   </div>
<!-- </div> -->


<div  class="flex-box subnav">
    <h3 class="underline" >CLASS NOTES</h3>
   </div>

<div class="subject ">
       <div class="subsubject ">
  <a href="https://drive.google.com/file/d/10LfAJwyeNtkqJ50ARU_yMNCK6GFCs0P3/view?usp=drivesdk" class="link "><button class=" button btn1" >Math notes 1</button></a>
  <a href="https://drive.google.com/file/d/10RO0Z0NG2EOrx1jTmBVd7IlDHLq1Ngdk/view?usp=drivesdk" class="link"><button class=" button btn2" >Math notes 2</button></a>
  <a href="https://drive.google.com/file/d/10idsaU9UVDRZcZI-2NxqTApWm_1jdxHP/view?usp=drivesdk" class="link"><button class=" button btn3" >Mixed notes 1</button></a>
  <a href="https://drive.google.com/file/d/17ryTZ_HeEhKpTmWNoRHLryJkfmV25ryr/view?usp=sharing" class="link"><button  class=" button btn4" >Mixed notes 2</button></a>
  <!-- <a href="" class="link"><button class="flex-box button btn1" ></button></a> -->
       </div>
       <br>
       <!--<br>-->
    <div class="subsubject ">
        <a href="https://drive.google.com/file/d/108vmoV7MQU_v9FD6H3FkG9ZlgtGAuM6n/view?usp=drivesdk" " class="link"><button class=" button btn5" >Mixed notes 3</button></a>
        <a href="https://drive.google.com/file/d/1efzhzPRoL1syvmcG7zUtrh40GmvYEwnw/view?usp=drivesdk" class="link"><button class=" button btn6" >BIVARATE DISTRIBUTION AND COMPLEX FUNCTION</button></a>
        <a href="" class="link"><button onclick="alertuser()" class=" button btn7" >Class notes 7</button></a>
        <a href="" class="link"><button onclick="alertuser()" class=" button btn8" >Class notes 8</button></a>
        <!-- <a href="" class="link"><button class="flex-box button btn1" ></button></a> -->
    </div>

   </div>
<!-- </div> -->

<div  class="flex-box subnav">
    <h3 class="underline" >BEST PLAY LISTS</h3>
   </div>

<div class="subject">
       <div class="subsubject ">
  <a href="https://youtube.com/playlist?list=PLxpFfkbLGqjP_uXQwCZ15xpUzSJQw2Y9y" class="link "><button class=" button btn5" >Electronic Devices</button></a>
  <a href="https://youtube.com/playlist?list=PLBlnK6fEyqRhG6s3jYIU48CqsT5cyiDTO" class="link"><button class=" button btn6" >Signals and Systems</button></a>
  <a href="https://youtube.com/playlist?list=PLxCzCOWd7aiGmXg4NoX6R31AsC5LeCPHe" class="link"><button class=" button btn7" >DSD GG SIR</button></a>
  <a href="https://youtube.com/playlist?list=PLgwJf8NK-2e645xqSqUBHJCgkrtkCa5AN" class="link"><button class=" button btn8" >DSD LOGIC FAMILY</button></a>
   <a href="https://youtube.com/playlist?list=PLBlnK6fEyqRjQZj_QXvH8sp1lOWtjQCtT" class="link"><button class=" button btn1" >TWO PORT NETWORK</button></a> 
       </div>
       <br>
       <!--<br>-->
    <div class="subsubject">
        <a href="https://youtube.com/playlist?list=PLdo5W4Nhv31bbKJzrsKfMpo_grxuLl8LU" class="link"><button class=" button btn1" >DSA USING C</button></a>
        <a href="https://youtube.com/playlist?list=PLBlnK6fEyqRg41HzkHScol5bdRebCDOAZ" class="link"><button class=" button btn2" >THEOREMS IN NETWORK</button></a>
        <a href="https://youtube.com/playlist?list=PLU6SqdYcYsfLeej_640C9vsR5FgmUF5Up" class="link"><button class=" button btn3" >Math Corellation and Regression</button></a>
        <a href="https://youtube.com/playlist?list=PLxpFfkbLGqjP-PLnQEga9MtnkRrhZcbEp" class="link"><button class=" button btn4" >Covariance of Bivariate Random Variables</button></a>
         <a href="https://youtube.com/playlist?list=PLxpFfkbLGqjNwwcjxV6S5mjB9L94zY_0x" class="link"><button class=" button btn1" >MATHS FULL 3RD SEM</button></a> 
    </div>

   </div>
<!-- </div> -->


<div  class="flex-box subnav">
    <h3 class="underline" >DAILY ASSIGNMENT</h3>
   </div>

<div class="subject">
       <div class="subsubject ">
  <a href="https://drive.google.com/file/d/12XhNQwWaLM1HcX07MueTyjEyQdxOrWNU/view?usp=drivesdk" class="link  "><button class=" button btn5" >Electronic Devices</button></a>
  <a href="" class="link"><button class=" button btn6" >DSD</button></a>
  <a href="" class="link"><button class=" button btn7" >DSA</button></a>
  <a href="" class="link"><button class=" button btn8" >NETWORK THEORY</button></a>
  <a href="" class="link"><button class=" button btn8" >SIGNALS AND SYSTEMS</button></a>
  <!-- <a href="" class="link"><button class="flex-box button btn1" ></button></a> -->
       </div>
       <br>
       <!--<br>-->
    <!--<div class="subsubject ">-->
    <!--    <a href="" onclick="alertuser()" class="link"><button class=" button btn1" ></button></a>-->
    <!--    <a href="" onclick="alertuser()" class="link"><button class=" button btn2" ></button></a>-->
    <!--    <a href="" onclick="alertuser()" class="link"><button class=" button btn3" ></button></a>-->
    <!--    <a href="" onclick="alertuser()"class="link"><button class=" button btn4" ></button></a>-->
    <!--    <a href="" onclick="alertuser()"class="link"><button class=" button btn4" ></button></a>-->
        <!-- <a href="" class="link"><button class="flex-box button btn1" ></button></a> -->
    <!--</div>-->

   </div>


<div  class="flex-box subnav">
    <h3 class="underline" >GOOGLE CLASS ROOM LINK</h3>
   </div>
<div>
    <ol>
        <a onclick="alertuser()" href=""><li>Electronic Devices RGH(Code : mpdlx7p)</a>
            <br>
        <a onclick="alertuser()" href=""><li><a href="">Electronic Devices AG</li></a>
        <br>
        <a onclick="alertuser()" href=""><li><a href="">Signals and Systems</li></a>
        <br>
        <a onclick="alertuser()" href=""><li><a href="">Digital System Design(Code : psmqxzw)</li></a>
        <br>
        <a onclick="alertuser()" href=""><li><a href="">SDP III(Code : rrqswvb)</li></a>
        <br>
        <a onclick="alertuser()" href=""><li><a href="">ESP III(Code : tbkra3q and 6w2lrqd)</li></a>
        <br>
        <a onclick="alertuser()" href=""><li><a href="">Mathematics III</li></a>
        <br>
          <a onclick="alertuser()" href=""><li><a href="">Network Theory</li></a>
        <br>
          <a onclick="alertuser()" href=""><li><a href="">Indian Constitution</li></a>
        <br>
        
         <!-- <li></a>Signals and Systems</li>
         <li><a href=""></a>Network Theory</li>
         <li><a href=""></a>ESP Constitution</li>
         <li><a href=""></a>ESP Economics</li>
         <li><a href=""></a>SDP</li>
         <li><a href=""></a>Mathematics III</li> -->
         <!-- <li><a href=""></a></li> -->

    </ol>
</div>
</div>

<script>
   function alertuser() {
    alert("Uploading soon");
     event.preventDefault();
   }
</script>
</body>
</html>