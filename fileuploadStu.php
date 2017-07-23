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
	$date=$_POST['date'];	
	$fname=$_FILES["file1"]["name"];
	$ftemp=$_FILES["file1"]["tmp_name"];
	$ftype=$_FILES["file1"]["type"];
	$flag=move_uploaded_file($ftemp,"SUB/$fname");
	
	/*echo $modulename;
	echo $date;
	echo $fname;
	echo $ftemp;
	echo $ftype;

	if ($flag==1) {
		echo "successfull";
	}
}*/

//pass the data to database............
		$quary="INSERT INTO submition(ModuleName,Date,Location,FileType)VALUES ('$modulename','$date','SUB/{$fname}','$ftype')";

		mysqli_query($connection,$quary);
		header("Location: SubView.php?modulename={$modulename}");
		//redirect to home page......
		
	}

?>