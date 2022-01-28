<?php 
//intilizing the session 
session_start();
include 'conn.php';

// for checking the button is set 
if (isset($_POST['m6'])) {
	// code...

	$email=$_POST['m2'];
	$password=$_POST['m5'];

 // fetching the admin data from databse
	$qr="select * from admin";
	$res1=mysqli_query($con,$qr);

	$row= mysqli_fetch_assoc($res1);
// verification of admin
	if ($email == $row['Emial'] & $password == $row['Pass'])
	 {
	 	$_SESSION['admin']=$email;
	 	header("Location:section.php");
	 	echo"login successfully";
	}




}


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<style>
		form
		{
			text-align:center;
			padding: 50px;
		}
		.main input[type="email"],input[type="password"]
		{
			width: 350px;
			padding: 5px;
		}
		.main input[type="submit"]
		{
			height: 30px;
			background-color: cyan;
			color: black;
		}
	</style>
</head>
<body>



<div class="main">
	
	<form action="" method="POST"> 
		
		<h1>welcome Admin</h1>
		
		<input type="email" name="m2" placeholder="Enter your email">
		<br><br>
		
		<input type="password" name="m5" placeholder="Enter Your password">
		<br><br>
		<input type="submit" name="m6" value="Submit">
		
	</form>
</div>



</body>
</html>