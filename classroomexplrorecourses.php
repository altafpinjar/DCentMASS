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
     
<div class="mainContainer" id="mainContainer">  <!-- DO NOT REMOVE THIS -->
	<div class="container-fluid">
<!-- MAIN CONTENT STARTS -->








<!-- WRITE MAIN CONTENT HERE -->
<br>
<br>
<br><br>
<br>

<div class="container">
  <div class="row">   
    <div class="col-md-12">
               
<video autoplay loop id="video-background" muted plays-inline >
  <source src="#" type="video/mp4">
</video>

</div>
</div>
</div>
<div class="container">
  <div class="row">   
    <div class="col-md-12">

<h2>Front-end Courses </h2>
<div class="container">

  <!-- Trigger the modal with a button -->
  

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
           <div class="row" style="background-color:#424D58;">
        <div class="col-md-12">
            <font color="white">
            <h2>Bootstrap level 1 is for Begginners</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </font>
        </div>

    </div>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>



<div class="container">
    <div class="row">
        <div class="col-md-3">
<div class="card">
  <div class="thumbnail">
  <img src="../../DCentMass/images/maktum/pexels-photo-196644.jpeg" alt="Avatar">
  </div>
  <div class="container cards">
    <h4><b>Bootstrap</b></h4> 
    
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Enroll Now</button>
  </div>
</div>
</div>
     <div class="col-md-3">
<div class="card">
  <div class="thumbnail">
  <img src="../../DCentMass/images/maktum/pexels-photo-196644.jpeg" alt="Avatar">
  </div>
  <div class="container cards">
    <h4><b>HTML</b></h4> 
    
    <a href="../DCentMASS/trainingbootstrap.php"><button type="button" class="btn btn-primary">Enroll now</button></a>
  </div>
</div>
</div>
 <div class="col-md-3">
<div class="card">
  <div class="thumbnail">
  <img src="../../DCentMass/images/maktum/pexels-photo-196644.jpeg" alt="Avatar">
  </div>
  <div class="container cards">
    <h4><b>CSS</b></h4> 
    
    <a href="../DCentMASS/trainingbootstrap.php"><button type="button" class="btn btn-primary">Enroll now</button></a>
  </div>
</div>
</div>
     <div class="col-md-3">
<div class="card">
  <div class="thumbnail">
  <img src="../../DCentMass/images/maktum/pexels-photo-196644.jpeg" alt="Avatar">
  </div>
  <div class="container cards">
    <h4><b>Javascript</b></h4> 
    
    <a href="../DCentMASS/trainingbootstrap.php"><button type="button" class="btn btn-primary">Enroll now</button></a>
  </div>
</div>
</div>
</div>
<!-- part 2-->
<br>
<br>
    <div class="row">
        <div class="col-md-3">
<div class="card">
  <div class="thumbnail">
  <img src="../../DCentMass/images/maktum/pexels-photo-196644.jpeg" alt="Avatar">
  </div>
  <div class="container cards">
    <h4><b>J Query</b></h4> 
    
    <a href="../DCentMASS/trainingbootstrap.php"><button type="button" class="btn btn-primary">Enroll now</button></a>
  </div>
</div>
</div>
     <div class="col-md-3">
<div class="card">
  <div class="thumbnail">
  <img src="../../DCentMass/images/maktum/pexels-photo-196644.jpeg" alt="Avatar">
  </div>
  <div class="container cards">
    <h4><b>HTML 5</b></h4> 
    
    <a href="../DCentMASS/trainingbootstrap.php"><button type="button" class="btn btn-primary">Enroll now</button></a>
  </div>
</div>
</div>
 <div class="col-md-3">
<div class="card">
  <div class="thumbnail">
  <img src="../../DCentMass/images/maktum/pexels-photo-196644.jpeg" alt="Avatar">
  </div>
  <div class="container cards">
    <h4><b>Front-end courses</b></h4> 
    
    <a href="../DCentMASS/trainingbootstrap.php"><button type="button" class="btn btn-primary">Enroll now</button></a>
  </div>
</div>
</div>
     <div class="col-md-3">
<div class="card">
  <div class="thumbnail">
  <img src="../../DCentMass/images/maktum/pexels-photo-196644.jpeg" alt="Avatar">
  </div>
  <div class="container cards">
    <h4><b>Front-end courses</b></h4> 
    
    <a href="../DCentMASS/trainingbootstrap.php"><button type="button" class="btn btn-primary">Enroll now</button></a>
  </div>
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
