<?php
/*
Author name: <Your name>;
E-mail ID:   <Your E-mail ID>
Date:        <dd-mm-yyyy>
*/
/////////////////////////////////////////////////////////
//include_once("variables.php");
//include_once("checkLoginStatus.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Title</title>
    <?php include_once("stylesAndFont.php"); ?>
</head>
<body>
  <img src="images/maktum/background.png" style="position: fixed;"/>
  	<!-- Left bar starts -->
     <div class="left-bar">
      <div class="image1">
        <img src="images/dcentmass_png.png" class="img-responsive">
      </div>
      <ul>
        <!-- User class="activeLink" to make links active -->
        <li><a href="#">Home</a></li>
        <li><a href="#">DCent MASS</a></li>
        <li><a href="#">Our Services</a></li>
        <li><a href="#">Student Hub</a></li>
        <li><a href="#">Courses</a></li>
        <li><a href="#">Events</a></li>
        <li><a href="#">Media</a></li>
        <li><a href="#">Forum</a></li>
        <li><a href="#">Contact Us</a></li>
        <li style="border-bottom: 2px solid #06f;"><a href="#">FAQs</a></li>
      </ul>
     </div>
     <!-- Left bar ends -->
<!-- Mobile bar starts here -->

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <ul> <!-- User class="activeLink" to make links active -->
        <li><a href="#">Home</a></li>
        <li><a href="#">DCent MASS</a></li>
        <li><a href="#">Our Services</a></li>
        <li><a href="#">Student Hub</a></li>
        <li><a href="#">Courses</a></li>
        <li><a href="#">Events</a></li>
        <li><a href="#">Media</a></li>
        <li><a href="#">Forum</a></li>
        <li><a href="#">Contact Us</a></li>
        <li style="border-bottom:  2px solid #06f;"><a href="#">FAQs</a></li>
</div>

<span id="openNavID" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
<!-- Mobile bar ends here -->
     <!-- Right bar starts -->
     <div class="right-bars">
     	<div class="righ-col-1"> <!-- User class="activeLink" to make links active -->
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 1</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 2</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 3</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 4</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 5</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 6</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 7</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 8</span></div></a>
         
      </div>
     	<div class="righ-col-2"> <!-- User class="activeLink" to make links active -->
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 9</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 10</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 11</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 12</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 13</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 14</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 15</span></div></a>
        <a href="#"><div class="rightMenuBlocks"><span class="linkText">Text 16</span></div></a>
     	</div>
     </div>
     
<div class="mainContainer" id="mainContainer" >  <!-- DO NOT REMOVE THIS -->
	<div class="container-fluid">
<!-- MAIN CONTENT STARTS -->








<!-- WRITE MAIN CONTENT HERE -->
<br>
<br>
<br><br>
<br>
<br><br>
<br><br>
<br>

<div class="container">
  <div class="row">   
    <div class="col-md-12">


<!-- curousal-->
<div class="container">
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="../../DCentMass/images/maktum/carousal1.jpg" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>LA is always so much fun!</p>
        </div>
      </div>

      <div class="item">
        <img src="../../DCentMass/images/maktum/carousal2.jpg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div>
      </div>
    
      <div class="item">
        <img src="../../DCentMass/images/maktum/carousal3.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>We love the Big Apple!</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- end of curousal-->
<div class="container">
  <div class="row">
    <div class="col-md-1">
    </div>
    <div class="col-md-10"> 
<h2><font color="#0d5497">Classroom Training</font></h2>
<h4 class="maktum-classroom-h4">Training Delivered By Professional Instructors in a Dynamic Learning Environment</h4>

       
  <input type="checkbox" class="read-more-state" id="post-1" />
<p class="read-more-wrap">Classroom training has been the foundation of employee and client education for years. Many participants learn best and have the greatest opportunity for retention when they learn from a live instructor in a classroom setting.<span class="read-more-target"> Classroom training affords the opportunity to incorporate various learning principles, including lectures, demonstrations, hands-on workshops, and retention quizzes.

Thomson Reuters Elite Education Services classroom training provides instructor-led classes in a dynamic learning environment. Courses give you a hands-on approach and are delivered where it’s convenient for you—regionally or on-site.</span></p>

 <label for="post-1" class="read-more-trigger"></label>
</div>
<div class="col-md-1">
    </div>
</div>


<div class="row"> 
  <div class="col-md-1">
  </div>
  <div class="col-md-10">
<h4 class="maktum-classroom-h4">Regional Training</h4>
<input type="checkbox" class="read-more-state" id="post-2" />
<p class="read-more-wrap">One option for classroom training is to attend regional training courses. Depending on the training subject, learners may thrive best in an environment where collaboration is easy and peer insight is bountiful. Getting away from the office can often be beneficial for employees:<span class="read-more-target">  they can focus on learning without work distractions and also build camaraderie with other users that can result in valuable knowledge-sharing relationships in the future. In addition, participants can work with industry colleagues to solve problems, glean knowledge and outside perspective, and even learn tips and tricks.

Our regional classes are held at state-of-the-art learning facilities in convenient worldwide locations, each with fully-equipped computer workstations for each learner. This is a popular learning format that ensures your team of employees receives the same hands-on training approach for message consistency. Courses include lecture, demonstration, software interaction (workshop), topic quiz, and optional retention testing.</span></p>

<label for="post-2" class="read-more-trigger"></label>
</div>
<div class="col-md-1">  
</div>
</div>



<div class="row">
  <div class="col-md-1">
  </div>
  <div class="col-md-10">
<h4 class="maktum-classroom-h4">Onsite Training</h4>
<input type="checkbox" class="read-more-state" id="post-3" />
<p class="read-more-wrap">When you want the ultimate convenience, yet still want the benefits of classroom training, our Education Services trainers can deliver prescriptive or customized training right at your firm. When we train onsite, there is no outside influence, therefore the training is focused solely on your needs.<span class="read-more-target">  Because there are no employee travel expenses involved, you save money, and learners have less time away from work.

Our qualified instructors bring their insight, knowledge, and various teaching styles to meet the specific needs of your firm. Whether it’s training on enhancement sets, new modules, or for new staff, we can deliver prescriptive or custom curricula to match your configured software. The Thomson Reuters Elite Global Services Application and Technical Consultant Teams are also available when additional services are needed.</span></p>
 <label for="post-3" class="read-more-trigger"></label>
</div>
<div class="col-md-1">
  </div>
</div>
</div>
</div>
</div>
<br>


<div class="container">
    <div class="row">
        <div class="col-md-4">
<div class="card">
  <div class="thumbnail">
  <img src="../../DCentMass/images/maktum/pexels-photo-196644.jpeg" alt="Avatar">
  </div>
  <div class="container cards">
    <h4><b>Front-end courses</b></h4> 
    
    <a href="../DCentMASS/classroomexplrorecourses.php"><button type="button" class="btn btn-primary">Explore</button></a>
  </div>
</div>
</div>
<div class="col-md-4">
<div class="card">
  <div class="thumbnail">
  <img src="../../DCentMass/images/maktum/pexels-photo (1).jpg" alt="Avatar">
</div>
  <div class="container cards">
    <h4><b>Back-end courses</b></h4> 
     
   <a href="../DCentMASS/trainingbootstrap.php"><button type="button" class="btn btn-primary"><font color="white" >Explore</font></button></a>
</div>
</div>
</div>

       <div class="col-md-4">
<div class="card" >
  <div class="thumbnail">
  <img src="../../DCentMass/images/maktum/pexels-photo-325229.jpeg" alt="Avatar">
</div>
  <div class="container cards">
    <h4><b>Server-side courses</b></h4> 
     
   <a href="../DCentMASS/trainingbootstrap.php"><button type="button" class="btn btn-primary"><font color="white" >Explore</font></button></a>
</div>
</div>



</div>
</div>
<br>
<br>




<!-- NOTE: Please keep your code clean + readable and add comments -->










<!-- MAIN CONTENT ENDS -->
	</div>
</div>
<?php include_once("script.php"); ?>
</body>
</html>
