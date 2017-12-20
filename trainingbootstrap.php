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
<div class="container">
    <div class="row" style="background-color:#424D58;">
        <div class="col-md-12">
            <font color="white">
            <h2>Bootstrap level 1 is for Begginners</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </font>
        </div>

    </div>
                   
<div class="col-md-6">
    <br>
    <br>
    <br>
    <ul style="padding-left: 15px; line-height: 24px;"> 
    <font color="Black">       
<li> Think like a developer. Become an expert at Googling code questions!</li>
<li> Create complex HTML forms with validations</li>
<li> Write web apps with full authentication</li>
<li> Use Bootstrap to create good-looking responsive layouts</li>
<li> Implement responsive navbars on websites</li>
<li> Use JavaScript variables, conditionals, loops, functions, arrays, and objects</li>
<li> Write Javascript functions, and understand scope and higher order functions</li>
</font>
</ul>
<br>
</div> 
<div style="padding-left:20px; padding-bottom: 10px;">
<button align="left">View More</button>
</div>
</div>
<div class="row" style="padding-top: 25px;">
    <div class="col-md-7">
<h3>Requirements</h3>
<ul style="line-height: 35px;">
<li>Have a computer with Internet</li>
<li>Be ready to learn an insane amount of awesome stuff</li>
<li>Prepare to build real web apps!</li>
<li>Brace yourself for stupid jokes about my dog Rusty</li>

    <p>
    What is Lorem Ipsum?
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

Why do we use it?
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
<table border="1px">
  <tr>
    <td>DATE
    </td>
    <td>COURSE
    </td>
    <td>Le 
    </td>
  </tr>
</table>


</p>
    </div>
        <div class="col-md-5">
            <div class="jumbotron" style="background-image: url('../../DCentMass/images/maktum/sky.jpg');  margin-right: 40px;  margin-bottom: 200px; position: static;">
        <font color="white"> <h2>TAKE A ADMISSION</h2>
               <h3>Includes:</h3>
               <ol style="padding-left:35px;">
<li>42.5 hours on-demand video</li>
<li>50 Articles</li>
<li>30 Supplemental Resources</li>
<li>Full lifetime access</li>
<li>Access on mobile and TV</li>
<li>Certificate of Completion</li>
</ol>
<div style="overflow:hidden;">
    <div class="form-group">
        <div class="row">
            <div class="col-md-8">
                <div id="datetimepicker12"></div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(function () {
            $('#datetimepicker12').datetimepicker({
                inline: true,
                sideBySide: true
            });
        });
    </script>
</div>
</font>
               <button class="btn-primary" style="height:50px; width: 125px; border-radius: 10px; background-color: green;"">Agree</button>
               <button class="btn-primary" style="height:50px; width: 125px; border-radius: 10px; background-color: red;">Cancel</button>

            </div>
        </div>
    </div>   
</div>




<!-- NOTE: Please keep your code clean + readable and add comments -->










<!-- MAIN CONTENT ENDS -->
	</div>
</div>
<?php include_once("script.php"); ?>
</body>
</html>
