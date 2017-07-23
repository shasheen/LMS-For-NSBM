<?php
session_start();

//connect to the Database.........
$connection = mysqli_connect('localhost', 'root', '', 'nsbm');


//we can check our connection.........

/*if (mysqli_connect_errno()) {
	die('faild' . mysqli_connect_error());
}
else  {
	echo "successfull";
	}*/



if (isset($_POST['submit'])) {
	
	$modulename=$_POST['mname'];
	$lesson=$_POST['les'];
	$type=$_POST['ty'];
	$fname=$_FILES["file1"]["name"];
	$ftemp=$_FILES["file1"]["tmp_name"];
	$ftype=$_FILES["file1"]["type"];
	$flag=move_uploaded_file($ftemp,"DOC/$fname");
	
	

	
//pass the data to database............
		$quary="INSERT INTO files(ModuleName,Lesson,Type,Location,FileType)VALUES ('$modulename','$lesson','$type','DOC/{$fname}','$ftype')";

		mysqli_query($connection,$quary);
		header("Location: dash_lec.php");
		//redirect to home page......
		
	}

?>












	
