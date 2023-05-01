<!DOCTYPE html>
<html>

<head>
	<title>Validation Page</title>
</head>

<body>
	<center>
		<?php

		 
		$conn = mysqli_connect("localhost", "root", "", "hospital_db");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		 
		$id = $_REQUEST['id']; 
		$name = $_REQUEST['name'];
		$address = $_REQUEST['address'];
		$phone = $_REQUEST['phone'];
		$gender = $_REQUEST['gender'];
		$age = $_REQUEST['age'];
		$message = $_REQUEST['message'];
		$helptype = $_REQUEST['helptype'];
		$email = $_REQUEST['email'];
		
		 
		 
		$sql = "INSERT INTO hospital_tb VALUES ('$id', '$name',
			'$address','$phone','$gender','$age', '$message', '$helptype', '$email')";
		
		if(mysqli_query($conn, $sql)){
			 echo "<h3>Message Sent in successfully. </h3>";

			 
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
