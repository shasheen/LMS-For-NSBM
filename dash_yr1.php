<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>(LMS)LearningManagementSystem [NSBM]</title>
		<link rel="stylesheet" type="text/css" href="css/dashstyle.css">
		<link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css">
  </head>
  <body>

    <!-- Header -->
      <header id="header">
        <div class="main">
          <div class="logo"><a href="http://nsbm.lk/"><img class="imglg" src="css/images/logo2.gif"></a></div>
          <nav id="nav">
            <a href="index.html">Home</a>
            <a href="clubleo.php">Clubs</a>
            <a href="aboutus.php">About US</a>
            <a href="contactus.php">Contact US</a>
            <a href="signout.php"><i class="fa fa-circle" aria-hidden="true"></i>  Log Out</a>
            
            
            </nav>          
        </div>
      </header>

  
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  
  <center><img src="css/images/sticon.png" style="width:1.5cm;height:1.5cm"></center>
  <div class="dropdown">
  <button class="dropbtn"><center><a id="prfl" href="profile.html"><span> <?php
$host="localhost";
$username="root";
$password="";
$db_name="nsbm";
$conn = new mysqli($host, $username, $password, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>

<?php

  $sql = "SELECT * FROM `users`";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  $row["name"];
    }
} else {
    echo "No Name";
}  

?>
  
 </span><hr></a></center></button>
 
</div>  
  <a href="#">Modules</a>
  <a href="#">Forums</a>
  <a href="#">Quizzes</a>
  <a href="#">Examinations</a>
  <a href="#">Grade</a>
  <a href="#">Resources</a>

</div>

<div id="main">


  
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
  <a class="backnext" href="#" class="previous round" href="javascript:void(0)" class="closebtn" onclick="closeNav()"> <i class="fa fa-arrow-circle-left" style="font-size:24px; color:#93979e"></i> </a>

  

  <div id="mainbody">

  	<div id="topic"><h2>Courses</h2></div> 
    <br>
     <div name="comcert" class="modules" >
       <ul>
                   <li><a id="sub1" href="FileViewStu.php?modulename=CSP">CS107.3 Programming with C# -Plymouth Group A(CSP)</a></li><br>
                   <li><a href="FileViewStu.php?modulename=INTRO">CS101.3 Introduction to Computer Science</a></li><br>
                   <li><a href="FileViewStu.php?modulename=CA">CS104.3 Computer Architecture</a></li><br>
                   <li><a href="FileViewStu.php?modulename=WEB">SE102.3 Web Based Application Development</a></li><br>
                   <li><a href="FileViewStu.php?modulename=ALGO">CS106.3 Algorithms and Data structures - DM</a></li><br>
                   <li><a href="FileViewStu.php?modulename=SAD">SE103.3 System Analysis and Design
                   </a></li><br>
              
                   </ul>
     </div>




  </div>


</div>

<!-- The Modal (computing)-->
<div id="myModal" class="modal">
   <span class="close">&times;</span>
  
</div>


<!-- Footer -->
      <footer id="footer">
        <div class="main">
          <div class="mode03">
            <div class="copyright">
              &copy; Untitled. Design: SLDS
            </div>
            <ul class="icons">
              <a href="#" class="fa fa-facebook"><span class="label">Facebook</span></a>
              <a href="#" class="fa fa-twitter"><span class="label">Twitter</span></a>
              <a href="#" class="fa fa-linkedin"><span class="label">linkedIn</span></a>
              <a href="#" class="fa fa-pinterest-p"><span class="label">Pinterest</span></a>
              <a href="#" class="fa fa-vimeo"><span class="label">Vimeo</span></a>
            </ul>
          </div>
        </div>
      </footer> 


<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    
}

// Get the modal
     var modal = document.getElementById('myModal');

// Get the button that opens the modal
     var link1 = document.getElementById("sub1");

// Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

// When the user clicks on the faculty, open the modal 
    link1.onclick = function() 
    {
    modal.style.display = "block";
    }  

// When the user clicks on <span> (x), close the modal
    span.onclick = function() 
    {
    modal.style.display = "none";
    }              


</script>




     
</body>
</html> 
