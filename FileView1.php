



<!DOCTYPE HTML>

<html>
	<head>
		<title>Learning Mangment System</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/style.css"/>
		<link rel="stylesheet" href="css/font-awesome.min.css">
	</head>
	<body>



			
				
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
						$type=$row['FileType'];

							
								
								
							echo "<tr><td>{$row['Lesson']}</td><td>{$row['Type']}</td><td><a href='$location'><img style='width:50px;height:50px;' src='css/images/doc1.png'></a></td></tr>";
							}

								
						}
				
						?>
						</table>
							
						</div>
					</div>
				</div>
			</section>	






		



	
</body>
</html>		