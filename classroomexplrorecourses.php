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


<!-- WRITE MAIN CONTENT HERE -->
<!-- section scroll -->


<br>
<br>
<br>
<br>

    <div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 col-12">
      <div id="section1"  style="height: 700px;">   
 
  <div class="container">
  <div class="row">   
    <div class="col-md-12">

<h2>Front-end Courses </h2>
<br>
<div class="container">

  <!-- Trigger the modal with a button -->
  

  <!-- Modal -->
<!-- Button trigger modal -->

<!-- Modal 1 -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLongTitle">Bootstrap</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="background-color:#424D58;">
         <div class="row">
        <div class="col-md-12">
            <font color="white">
            <h3>Bootstrap is tool for Web Development </h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </font>
        </div>
    </div>
       <div class="row" style="background-color:#D9D9D9;">
        <div class="col-md-6">
            <font color="Black"><h2>What Will I Learn?</h2></font>
            <ul style="padding-left: 15px; line-height: 24px;">
                <font color="Black">
<li> Make REAL web applications using cutting-edge technologies</li>
<li> Continue to learn and grow as a developer, long after the course ends</li>
<li> Create a blog application from scratch using Express, MongoDB, and Semantic UI</li>
<li> Create a complicated yelp-like application from scratch</li>
</font>
</ul>
</div>
<div class="col-md-6">
    <br>
    <br>
    
    <ul style="padding-left: 15px; line-height: 24px;"> 
    <font color="Black">       
<li> Think like a developer. Become an expert at Googling code questions!</li>
<li> Create complex HTML forms with validations</li>
<li> Write web apps with full authentication</li>
<li> Use Bootstrap to create good-looking responsive layouts</li>
<li> Implement responsive navbars on websites</li>
</font>
</ul>
<br>
</div> 
</div>
<div class="row">
    <div class="col-md-12">
      <font color="white">
<h3>Requirements</h3>
<ul style="line-height: 35px; padding-left: 15px;">
<li>Have a computer with Internet</li>
<li>Be ready to learn an insane amount of awesome stuff</li>
<li>Prepare to build real web apps!</li>
<li>Brace yourself for stupid jokes about my dog Rusty</li>
</ul>
</font>
</div>
</div>

        
      </div>
      <div class="modal-footer">
        <h4 style="padding-right: 400px;"><b>Take an Admission</b></h4>


        <button type="button" class="btn btn-success" data-dismiss="modal">Agree</button>
        <button type="button" class="btn btn-danger">Back</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal 2 -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLongTitle">HTML</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="background-color:#424D58;">
         <div class="row" style="background-color:#424D58;">
        <div class="col-md-12">
            <font color="white">
            <h3>HTML is tool for Web Development </h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </font>
        </div>
    </div>
       <div class="row" style="background-color:#D9D9D9;">
        <div class="col-md-6">
            <font color="Black"><h2>What Will I Learn?</h2></font>
            <ul style="padding-left: 15px; line-height: 24px;">
                <font color="Black">
<li> Make REAL web applications using cutting-edge technologies</li>
<li> Continue to learn and grow as a developer, long after the course ends</li>
<li> Create a blog application from scratch using Express, MongoDB, and Semantic UI</li>
<li> Create a complicated yelp-like application from scratch</li>
</font>
</ul>
</div>
<div class="col-md-6">
    <br>
    <br>
    
    <ul style="padding-left: 15px; line-height: 24px;"> 
    <font color="Black">       
<li> Think like a developer. Become an expert at Googling code questions!</li>
<li> Create complex HTML forms with validations</li>
<li> Write web apps with full authentication</li>
<li> Use Bootstrap to create good-looking responsive layouts</li>
<li> Implement responsive navbars on websites</li>
</font>
</ul>
<br>
</div> 
</div>
<div class="row">
    <div class="col-md-12">
      <font color="white">
<h3>Requirements</h3>
<ul style="line-height: 35px; padding-left: 15px;">
<li>Have a computer with Internet</li>
<li>Be ready to learn an insane amount of awesome stuff</li>
<li>Prepare to build real web apps!</li>
<li>Brace yourself for stupid jokes about my dog Rusty</li>
</ul>
</font>
</div>
</div>

        
      </div>
        <div class="modal-footer">
        <h4 style="padding-right: 400px;"><b>Take an Admission</b></h4>


        <button type="button" class="btn btn-success" data-dismiss="modal">Agree</button>
        <button type="button" class="btn btn-danger">Back</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal 3 -->
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
        <div class="modal-footer">
        <h4 style="padding-right: 400px;"><b>Take an Admission</b></h4>


        <button type="button" class="btn btn-success" data-dismiss="modal">Agree</button>
        <button type="button" class="btn btn-danger">Back</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal 4 -->
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
       <div class="modal-footer">
        <h4 style="padding-right: 400px;"><b>Take an Admission</b></h4>


        <button type="button" class="btn btn-success" data-dismiss="modal">Agree</button>
        <button type="button" class="btn btn-danger">Back</button>
      </div>
    </div>
  </div>
</div>

  
</div>



<div class="container">
    <div class="row">
        <div class="col-md-3">
<div class="card classroomcard">
  <div class="thumbnail">
  <img src="../../DCentMass/images/maktum/pexels-photo-196644.jpeg" alt="Avatar">
  </div>
  <div class="container cards">
    <h4><b>HTML</b></h4> 
    
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">Enroll Now</button>
  </div>
</div>
</div>
     <div class="col-md-3">
<div class="card classroomcard">
  <div class="thumbnail">
  <img src="../../DCentMass/images/maktum/pexels-photo-196644.jpeg" alt="Avatar">
  </div>
  <div class="container cards">
    <h4><b>CSS</b></h4> 
    
     <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Enroll Now</button>
  </div>
</div>
</div>
 <div class="col-md-3">
<div class="card classroomcard">
  <div class="thumbnail">
  <img src="../../DCentMass/images/maktum/pexels-photo-196644.jpeg" alt="Avatar">
  </div>
  <div class="container cards">
    <h4><b>JavaScript</b></h4> 
    
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">Enroll Now</button>
  </div>
</div>
</div>
     <div class="col-md-3">
<div class="card classroomcard">
  <div class="thumbnail">
  <img src="../../DCentMass/images/maktum/pexels-photo-196644.jpeg" alt="Avatar">
  </div>
  <div class="container cards">
    <h4><b>Bootstrap</b></h4> 
    
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal4">Enroll Now</button>
  </div>
</div>
</div>
</div>
<!-- part 2-->
<br>
<br>
     <div class="row">
        <div class="col-md-3">
<div class="card classroomcard">
  <div class="thumbnail">
  <img src="../../DCentMass/images/maktum/pexels-photo-196644.jpeg" alt="Avatar">
  </div>
  <div class="container cards">
    <h4><b>Angular JS</b></h4> 
    
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Enroll Now</button>
  </div>
</div>
</div>
     <div class="col-md-3">
<div class="card classroomcard">
  <div class="thumbnail">
  <img src="../../DCentMass/images/maktum/pexels-photo-196644.jpeg" alt="Avatar">
  </div>
  <div class="container cards">
    <h4><b>React JS</b></h4> 
    
     <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Enroll Now</button>
  </div>
</div>
</div>
 <div class="col-md-3">
<div class="card classroomcard">
  <div class="thumbnail">
  <img src="../../DCentMass/images/maktum/pexels-photo-196644.jpeg" alt="Avatar">
  </div>
  <div class="container cards">
    <h4><b>JQuery</b></h4> 
    
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Enroll Now</button>
  </div>
</div>
</div>
     <div class="col-md-3">
<div class="card classroomcard">
  <div class="thumbnail">
  <img src="../../DCentMass/images/maktum/pexels-photo-196644.jpeg" alt="Avatar">
  </div>
  <div class="container cards">
    <h4><b>Foundation</b></h4> 
    
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Enroll Now</button>
  </div>
</div>
</div>
</div>

<!-- NOTE: Please keep your code clean + readable and add comments -->

</div>
</div>
</div>
</div></div>
<hr>
     <div id="section2"> 
      <h2> Back-end Cources</h2>
      <div class="container">
    <div class="row">
        <div class="col-md-3">
<div class="card classroomcard">
  <div class="thumbnail">
  <img src="../../DCentMass/images/maktum/pexels-photo-196644.jpeg" alt="Avatar">
  </div>
  <div class="container cards">
    <h4><b>My-SQL</b></h4> 
    
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">Enroll Now</button>
  </div>
</div>
</div>
     <div class="col-md-3">
<div class="card classroomcard">
  <div class="thumbnail">
  <img src="../../DCentMass/images/maktum/pexels-photo-196644.jpeg" alt="Avatar">
  </div>
  <div class="container cards">
    <h4><b>PHP</b></h4> 
    
     <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Enroll Now</button>
  </div>
</div>
</div>
 <div class="col-md-3">
<div class="card classroomcard">
  <div class="thumbnail">
  <img src="../../DCentMass/images/maktum/pexels-photo-196644.jpeg" alt="Avatar">
  </div>
  <div class="container cards">
    <h4><b>Phython</b></h4> 
    
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">Enroll Now</button>
  </div>
</div>
</div>
     <div class="col-md-3">
<div class="card classroomcard">
  <div class="thumbnail">
  <img src="../../DCentMass/images/maktum/pexels-photo-196644.jpeg" alt="Avatar">
  </div>
  <div class="container cards">
    <h4><b>J2EE</b></h4> 
    
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal4">Enroll Now</button>
  </div>
</div>
</div>
</div>
<!-- part 2-->
<br>
<br>
     <div class="row">
        <div class="col-md-3">
<div class="card classroomcard">
  <div class="thumbnail">
  <img src="../../DCentMass/images/maktum/pexels-photo-196644.jpeg" alt="Avatar">
  </div>
  <div class="container cards">
    <h4><b>Oracle</b></h4> 
    
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Enroll Now</button>
  </div>
</div>
</div>
     <div class="col-md-3">
<div class="card classroomcard">
  <div class="thumbnail">
  <img src="../../DCentMass/images/maktum/pexels-photo-196644.jpeg" alt="Avatar">
  </div>
  <div class="container cards">
    <h4><b>ASP.NET</b></h4> 
    
     <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Enroll Now</button>
  </div>
</div>
</div>
 <div class="col-md-3">
<div class="card classroomcard">
  <div class="thumbnail">
  <img src="../../DCentMass/images/maktum/pexels-photo-196644.jpeg" alt="Avatar">
  </div>
  <div class="container cards">
    <h4><b>Perl</b></h4> 
    
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Enroll Now</button>
  </div>
</div>
</div>
     <div class="col-md-3">
<div class="card classroomcard">
  <div class="thumbnail">
  <img src="../../DCentMass/images/maktum/pexels-photo-196644.jpeg" alt="Avatar">
  </div>
  <div class="container cards">
    <h4><b>Java</b></h4> 
    
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Enroll Now</button>
  </div>
</div>
</div>
</div>

<!-- NOTE: Please keep your code clean + readable and add comments -->

</div>
  </div>
  <br>
  <br>
      <hr>      
      <div id="section3" >    
      <h2> Server side Cources</h2>     
        <div class="container">
    <div class="row">
        <div class="col-md-3">
<div class="card classroomcard">
  <div class="thumbnail">
  <img src="../../DCentMass/images/maktum/pexels-photo-196644.jpeg" alt="Avatar">
  </div>
  <div class="container cards">
    <h4><b>Bootstrap</b></h4> 
    
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">Enroll Now</button>
  </div>
</div>
</div>
     <div class="col-md-3">
<div class="card classroomcard">
  <div class="thumbnail">
  <img src="../../DCentMass/images/maktum/pexels-photo-196644.jpeg" alt="Avatar">
  </div>
  <div class="container cards">
    <h4><b>HTML</b></h4> 
    
     <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Enroll Now</button>
  </div>
</div>
</div>
 <div class="col-md-3">
<div class="card classroomcard">
  <div class="thumbnail">
  <img src="../../DCentMass/images/maktum/pexels-photo-196644.jpeg" alt="Avatar">
  </div>
  <div class="container cards">
    <h4><b>CSS</b></h4> 
    
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">Enroll Now</button>
  </div>
</div>
</div>
     <div class="col-md-3">
<div class="card classroomcard">
  <div class="thumbnail">
  <img src="../../DCentMass/images/maktum/pexels-photo-196644.jpeg" alt="Avatar">
  </div>
  <div class="container cards">
    <h4><b>Javascript</b></h4> 
    
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal4">Enroll Now</button>
  </div>
</div>
</div>
</div>
<!-- part 2-->
<br>
<br>
     <div class="row">
        <div class="col-md-3">
<div class="card classroomcard">
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
<div class="card classroomcard">
  <div class="thumbnail">
  <img src="../../DCentMass/images/maktum/pexels-photo-196644.jpeg" alt="Avatar">
  </div>
  <div class="container cards">
    <h4><b>HTML</b></h4> 
    
     <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Enroll Now</button>
  </div>
</div>
</div>
 <div class="col-md-3">
<div class="card classroomcard">
  <div class="thumbnail">
  <img src="../../DCentMass/images/maktum/pexels-photo-196644.jpeg" alt="Avatar">
  </div>
  <div class="container cards">
    <h4><b>CSS</b></h4> 
    
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Enroll Now</button>
  </div>
</div>
</div>
     <div class="col-md-3">
<div class="card classroomcard">
  <div class="thumbnail">
  <img src="../../DCentMass/images/maktum/pexels-photo-196644.jpeg" alt="Avatar">
  </div>
  <div class="container cards">
    <h4><b>Javascript</b></h4> 
    
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Enroll Now</button>
  </div>
</div>
</div>
</div>

<br>
<br>

<!-- NOTE: Please keep your code clean + readable and add comments -->

</div>
      </div>
      <hr>  
     

<!-- end  -->




<!-- MAIN CONTENT ENDS -->
	</div>
</div>


<?php include_once("script.php"); ?>
</body>
</html>
