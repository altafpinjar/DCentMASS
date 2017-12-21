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
    <style type="text/css">
        ul.nav-pills {
      top: 20px;
      position: fixed;
  }
  div.col-8 div {
      height: 500px;
  }
    </style>
</head>
<body data-spy="scroll" data-target="#myScrollspy" data-offset="1">
  	<!-- Left bar starts -->
     <div class="left-bar">
      <div class="image1">
        <img src="images/dcentmass_png.png" class="img-fluid">
      </div>
      <ul>
        <!-- User class="activeLink" to make links active -->
        <li class="activeLink"><a href="#"><i class="material-icons">home</i><span class="menuText">Home</span></a></li>
        <li><a href="#"><i class="material-icons">language</i><span class="menuText">DCent MASS</span></a></li>
        <li><a href="#"><i class="material-icons">settings_applications</i><span class="menuText">Our Services</span></a></li>
        <li><a href="#"><i class="material-icons">group_work</i><span class="menuText">Student Hub</span></a></li>
        <li><a href="#"><i class="material-icons">library_books</i><span class="menuText">Courses</span></a></li>
        <li><a href="#"><i class="material-icons">event</i><span class="menuText">Events</span></a></li>
        <li><a href="#"><i class="material-icons">perm_media</i><span class="menuText">Media</span></a></li>
        <!-- <li><a href="#">Forum</a></li> -->
        <li><a href="#"><i class="material-icons">contacts</i><span class="menuText">Contact Us</span></a></li>
        <!-- <li style="border-bottom:  2px solid #06f;"><a href="#"></a></li> -->
        <!-- <li style="border-bottom: 2px solid #06f;"><a href="#">FAQs</a></li> -->
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
        <!-- <li><a href="#">Forum</a></li> -->
        <li style="border-bottom:  2px solid #06f;"><a href="#">Contact Us</a></li>
        <!-- <li style="border-bottom:  2px solid #06f;"><a href="#">FAQs</a></li> -->
  </ul>
</div>

<span id="openNavID" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
<!-- Mobile bar ends here -->
     <!-- Right bar starts -->
   <nav class="col-sm-2 col-4" id="myScrollspy">
     <div class="right-bars">
     	<div class="righ-col-1" id="MyScrollSpy"> 

        <!-- User class="activeLink" to make links active -->
         <ul class="nav nav-pills flex-column">
              <li class="nav-item" style="width: 105px; height: 105px;">
          <a class="nav-link active" href="#section1"><div class="rightMenuBlocks"><span class="linkText">Text 1</span></div></a>
        </li>

       <li class="nav-item" style="width: 105px; height: 105px;">
          <a class="nav-link" href="#section2"><div class="rightMenuBlocks"><span class="linkText">Text 2</span></div></a></li>
        <li class="nav-item" style="width: 105px; height: 105px;">
          <a class="nav-link btn btn-info" role="button" href="#section3"><div class="rightMenuBlocks"><span class="linkText">Text 3</span></div></a></li>
        <li class="nav-item" style="width: 105px; height: 105px;">
          <a class="nav-link" href="#section41"><div class="rightMenuBlocks"><span class="linkText">Text 4</span></div></a></li>
        <li class="nav-item" style="width: 105px; height: 105px;"> 
          <a class="nav-link" href="#section42"><div class="rightMenuBlocks"><span class="linkText">Text 5</span></div></a></li>
        <li  class="nav-item" style="width: 105px; height: 105px;"> <a class="nav-link" href="#"><div class="rightMenuBlocks"><span class="linkText">Text 6</span></div></a></li>
        <li  class="nav-item" style="width: 105px; height: 105px;"> <a class="nav-link" href="#"><div class="rightMenuBlocks"><span class="linkText">Text 7</span></div></a></li>
         <li  class="nav-item" style="width: 105px; height: 105px;"> <a class="nav-link" href="#"><div class="rightMenuBlocks"><span class="linkText">Text 8</span></div></a></li>
      </ul>
         
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

     </nav>
<div class="mainContainer" id="mainContainer">  <!-- DO NOT REMOVE THIS -->
	<div class="container-fluid">
<!-- MAIN CONTENT STARTS -->

    <div class="container-fluid">
  <div class="row">
    
    <div class="col-sm-12 col-12">
      <div id="section1" class="bg-success" style="height: 800px;">    
        <h1>Section 1</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>
      <div id="section2" class="bg-warning" style="height: 800px;"> 
        <h1>Section 2</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>        
      <div id="section3" class="bg-secondary" style="height: 800px;">         
        <h1>Section 3</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>
      <div id="section41" class="bg-danger" style="height: 800px;">         
        <h1>Section 4-1</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>      
      <div id="section42" class="bg-info" style="height: 800px;">         
        <h1>Section 4-2</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>
    </div>

  </div>
</div>

<?php include_once("script.php"); ?>
</body>
</html>
