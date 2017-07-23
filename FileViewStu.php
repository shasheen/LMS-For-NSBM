<!DOCTYPE HTML>

<html>
	<head>
		<title>Learning Mangment System</title>
		<meta charset="utf-8" />
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


			
				
			<section class="sec01 mode01 mode02">
				<div class="main">
					<header>
						<h2>Modules</h2>
						
					</header>
					<div class="mode03 mode03-4">
<table style= "margin-left: 35%" border="1">
					<tr><th>Lesson Name</th><th>Document Type</th><th>Document</th></tr>
					<?php 

							$host="localhost";
							$username="root";
							$password="";
							$db_name="nsbm";

					$connection= mysqli_connect('localhost','root','');
					mysqli_select_db($connection,$db_name);

					$mymodulename=$_GET['modulename'];

						$sql = "SELECT Lesson,Type,Location FROM files where ModuleName='$mymodulename'";

							$result = $connection->query($sql);
							if ($result->num_rows > 0) {
							// output data of each row

								
									

					while($row=$result->fetch_assoc()){ 
						$location=$row['Location'];
						

							
								
								
							echo "<tr><td>{$row['Lesson']}</td><td>{$row['Type']}</td><td><a href='$location'><img style='width:50px;height:50px;' src='css/images/doc1.png'></a></td></tr>";
							}

								
						}
				
						?>
						</table>
						
						
							
						</div>
						<br>
						<h3>Click Here</h3>						
						<a href="fileuploadStu.html">Assigment Submition</a>
					</div>
				</div>
			</section>	

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
	
</body>
</html>		