
<?php 

include 'conn.php';



if (isset($_POST['m6'])) {

	$name=$_POST['m1'];
	$email=$_POST['m2'];
	$mobile=$_POST['m3'];
	$city=$_POST['m4'];
	$password=$_POST['m5'];
	

	$qr="insert into data(Name,Email,Mobile,City,Pass)values('".$name."','".$email."' ,'".$mobile."' ,'".$city."' ,'".$password."')";
	$res = mysqli_query($con,$qr);
	if (!($res)) {
		
		echo "data Inserted Successfully";
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
		.main input[type="text"],input[type="email"],input[type="password"],input[type="number"]
		{
			width: 350px;
			padding: 5px;
		}
		.main input[type="submit"]
		{
			height: 30px;
			background-color: #388E3C;
			color: black;
		}
	</style>
</head>
<body>

<!-- This is a form section  -->
<div class="main">
	
	<form action="" method="POST"> 
		
		<h1>welcome</h1>
		<input type="text" name="m1" placeholder="Enter your name">
		<br><br>
		<input type="email" name="m2" placeholder="Enter your email">
		<br><br>
		<input type="number" name="m3" placeholder="Enter your mobile number">
		<br><br>
		<input type="text" name="m4" placeholder="Enter your city name">
		<br><br>
		<input type="password" name="m5" placeholder="Enter Your password">
		<br><br>
		<input type="submit" name="m6" value="Submit">

		<h5 style="color: red;">Only Admin can edit or deete data</h5>
		
	</form>
</div>



</body>
</html>