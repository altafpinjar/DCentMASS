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
<body data-spy="scroll" data-target="#myscroll" data-offset="50">
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

   <nav class="mynavbar col-sm-2 col-4">
     <div class="right-bars" id="myscroll">
      <div class="righ-col-1"> 

        <!-- User class="activeLink" to make links active -->
         <ul class="nav nav-pills flex-column" >
              <li class="nav-item">
          <a class="nav-link active" href="#section1"><div class="rightMenuBlocks1"><span class="linkText">Classroom Training</span></div></a>
        </li>
       <li class="nav-item">
          <a class="nav-link" href="#section2">
            <div class="rightMenuBlocks1">
              <span class="linkText">Text 2</span>
            </div>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#section3"><div class="rightMenuBlocks1"><span class="linkText">Text 3</span></div></a></li>
        <li class="nav-item">
          <a class="nav-link" href="#section4"><div class="rightMenuBlocks1"><span class="linkText">Text 4</span></div></a></li>
        <li class="nav-item"> 
          <a class="nav-link" href="#section5"><div class="rightMenuBlocks1"><span class="linkText">Text 5</span></div></a></li>
        <li  class="nav-item"> 
          <a class="nav-link" href="#section6"><div class="rightMenuBlocks1"><span class="linkText">Text 6</span></div></a></li>
        <li  class="nav-item"> 
          <a class="nav-link" href="#section7"><div class="rightMenuBlocks1"><span class="linkText">Text 7</span></div></a></li>
         <li  class="nav-item"> 
          <a class="nav-link" href="#section8"><div class="rightMenuBlocks1"><span class="linkText">Text 8</span></div></a></li>
      </ul>
         
      </div>
      <div class="righ-col-2"> <!-- User class="activeLink" to make links active -->
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link" href="#section9"><div class="rightMenuBlocks1"><span class="linkText">Text 9</span></div></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#section10">
            <div class="rightMenuBlocks1">
              <span class="linkText">Text 10</span>
            </div>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#section11"><div class="rightMenuBlocks1"><span class="linkText">Text 11</span></div></a></li>
        <li class="nav-item">
          <a class="nav-link" href="#section12"><div class="rightMenuBlocks1"><span class="linkText">Text 12</span></div></a></li>
        <li class="nav-item"> 
          <a class="nav-link" href="#section13"><div class="rightMenuBlocks1"><span class="linkText">Text 13</span></div></a></li>
        <li  class="nav-item"> 
          <a class="nav-link" href="#section14"><div class="rightMenuBlocks1"><span class="linkText">Text 14</span></div></a></li>
        <li  class="nav-item"> 
          <a class="nav-link" href="#section15"><div class="rightMenuBlocks1"><span class="linkText">Text 15</span></div></a></li>
         <li  class="nav-item"> 
          <a class="nav-link" href="#section16"><div class="rightMenuBlocks1"><span class="linkText">Text 16</span></div></a></li>
      </ul>
      </div>
     </div>
   </nav>

<div class="mainContainer" id="mainContainer">  <!-- DO NOT REMOVE THIS -->
  <div class="container-fluid">
<!-- MAIN CONTENT STARTS -->
<span class="bgtext"> Background Text </span>

<br>
<br>
<br>
<br>

    <div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 col-12">
      <div id="section1" >     
        <!-- curousal-->

<!-- end of curousal-->
<div class="container-fluid">
  <div class="row">
   
    <div class="col-md-12">
      <br>
    <div class="container" style="background-image: url(../../DCentMass/images/maktum/back2.jpg);"> 
<center><h1><font color="#0d5497">Classroom Training</font></h1></center>
</div>
<div class="row">
  <div class="col-md-9">
<h3 class="classroom-h4" style="color: black;">Training Delivered By Professional Instructors.</h3>

       
  <input type="checkbox" class="read-more-state" id="post-1" />
<p class="read-more-wrap">Classroom training has been the foundation of employee and client education for years. Many participants learn best and have the greatest opportunity for retention when they learn from a live instructor in a classroom setting. Classroom training affords the opportunity to incorporate various learning principles, including lectures, demonstrations, hands-on workshops, and retention quizzes.<span class="read-more-target">

Thomson Reuters Elite Education Services classroom training provides instructor-led classes in a dynamic learning environment. Courses give you a hands-on approach and are delivered where it’s convenient for you—regionally or on-site.</span></p>

 <label for="post-1" class="read-more-trigger"></label>
</div>
<div class="col-md-3">
  <img class="d-block w-100" src="../../DCentMass/images/maktum/class.jpeg" alt="First slide" width="200px;" height="150px;">
  </div>
</div>

<div class="row">
  <div class="col-md-3">
<img class="d-block w-100" src="../../DCentMass/images/maktum/class1.jpeg" alt="First slide" width="200px;" height="150px;">

       
  
</div>
<div class="col-md-9">
  <input type="checkbox" class="read-more-state" id="post-1" />
<p class="read-more-wrap">Classroom training has been the foundation of employee and client education for years. Many participants learn best and have the greatest opportunity for retention when they learn from a live instructor in a classroom setting. Classroom training affords the opportunity to incorporate various learning principles, including lectures, demonstrations, hands-on workshops, and retention quizzes.

Thomson Reuters Elite Education Services classroom training provides instructor-led classes in a dynamic learning environment. Courses give you a hands-on approach and are delivered where it’s convenient for you—regionally or on-site.</span></p>


  </div>
</div>

</div>

</div>


<center><hr width="700px;" color="red"></center> 
<center><h2>Classroom Courses</h2></center>
<div class="container">
    <div class="row">

        <div class="col-md-4">

<div class="card maktum-classroomcard">
  <div class="thumbnail">
  <img src="../../DCentMass/images/maktum/pexels-photo-196644.jpeg" alt="Avatar">
  </div>
  <div class="container cards">
    <h4><b>Front-end courses</b></h4> 
    
    <a href="../DCentMASS/classroomexplrorecourses.php"><button type="button" class="btn btn-primary">View Cources</button></a>
  </div>
</div>
</div>
<div class="col-md-4">
<div class="card maktum-classroomcard">
  <div class="thumbnail">
  <img src="../../DCentMass/images/maktum/pexels-photo (1).jpg" alt="Avatar">
</div>
  <div class="container cards">
    <h4><b>Back-end courses</b></h4> 
     
   <a href="../DCentMASS/trainingbootstrap.php"><button type="button" class="btn btn-primary"><font color="white">View Cources</font></button></a>
</div>
</div>
</div>

       <div class="col-md-4">
<div class="card maktum-classroomcard">
  <div class="thumbnail">
  <img src="../../DCentMass/images/maktum/pexels-photo-325229.jpeg" alt="Avatar">
</div>
  <div class="container cards">
    <h4><b>Server-side courses</b></h4> 
     
   <a href="../DCentMASS/trainingbootstrap.php"><button type="button" class="btn btn-primary"><font color="white">View Cources</font></button></a>
</div>
</div>



</div>
</div>
</div>

      </div>
      <br>
      <hr>  
      <div id="section2" style="height: 100%; transition:all 0.3s ease;"> 



<!-- end of curousal-->
<div class="container-fluid">
  <div class="row">
   
    <div class="col-md-12">
      <br>
     <div class="container" style="background-image: url(../../DCentMass/images/maktum/back.jpg);">  
<center><h1><font color="#0d5497">Online Training</font></h1></center>
</div>
<h4 class="classroom-h4" style="color: black">Web-based training anytime, anywhere.</h4>

       
  <input type="checkbox" class="read-more-state" id="post-1" />
<p class="read-more-wrap">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. .<span class="read-more-target">

It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>

 <label for="post-1" class="read-more-trigger"></label>
</div>

</div>

</div>
<center><hr width="700px;" color="red"></center> 
<br>


<div class="container">
    <div class="row">
        <div class="col-md-4">
<div class="card maktum-classroomcard">
  <div class="thumbnail">
  <img src="../../DCentMass/images/maktum/pexels-photo-196644.jpeg" alt="Avatar">
  </div>
  <div class="container cards">
    <h4><b>Front-end courses</b></h4> 
    
    <a href="../DCentMASS/classroomexplrorecourses.php"><button type="button" class="btn btn-primary">View Cources</button></a>
  </div>
</div>
</div>
<div class="col-md-4">
<div class="card maktum-classroomcard">
  <div class="thumbnail">
  <img src="../../DCentMass/images/maktum/pexels-photo (1).jpg" alt="Avatar">
</div>
  <div class="container cards">
    <h4><b>Back-end courses</b></h4> 
     
   <a href="../DCentMASS/trainingbootstrap.php"><button type="button" class="btn btn-primary"><font color="white">View Cources</font></button></a>
</div>
</div>
</div>

       <div class="col-md-4">
<div class="card maktum-classroomcard">
  <div class="thumbnail">
  <img src="../../DCentMass/images/maktum/pexels-photo-325229.jpeg" alt="Avatar">
</div>
  <div class="container cards">
    <h4><b>Server-side courses</b></h4> 
     
   <a href="../DCentMASS/trainingbootstrap.php"><button type="button" class="btn btn-primary"><font color="white">View Cources</font></button></a>
</div>
</div>



</div>
</div>
</div>
      </div>  
      <br>
      <hr>      
      <div id="section3"  style="height: 800px; ">         
        <h1>Section 3</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>
      <hr>  
      <div id="section4"  style="height: 800px; ">         
        <h1>Section 4</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>  
      <hr>      
      <div id="section5" style="height: 800px;">         
        <h1>Section 5</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>
      <hr>  
      <div id="section6" style="height: 800px;">         
        <h1>Section 6</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>
      <hr>  
      <div id="section7" style="height: 800px;">         
        <h1>Section 7</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>
      <hr>  
      <div id="section8" style="height: 800px;">         
        <h1>Section 8</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>
      <hr>  
      <div id="section9" style="height: 800px;">         
        <h1>Section 9</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>
    </div>
    <hr> 
  </div>
</div>
<!--
   <script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
-->
</script>
<?php include_once("script.php"); ?>
</body>
</html>
