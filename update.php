
<?php 
// php code for updating data
include 'conn.php';



if (isset($_POST['m1'])) 
{

	$id=$_POST['eid'];

	$qr = "select * from data where id = '".$id."'";
	$res = mysqli_query($con,$qr);

	$row = mysqli_fetch_assoc($res);
}

if (isset($_POST['m6'])) {
	// code...

	//echo $row['I']

	$name=$_POST['m1'];
	$email=$_POST['m2'];
	$mobile=$_POST['m3'];
	$city=$_POST['m4'];
	$password=$_POST['m5'];
	$uid=$_POST['m7'];
	

	

	$qr12="update data set Name='".$name."', Email='".$email."', Mobile='".$mobile."',City='".$city."',Pass='".$password."' where Id='".$uid."' ";

	$res2=mysqli_query($con,$qr12);

	if ($res2) {
		// code...
		echo "Updated successfully";
		header("Location:view.php");
	}


}

?>




<!-- This is updation form -->
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
			background-color: cyan;
			color: black;
		}
	</style>
</head>
<body>

<!-- This is a form section  -->
<div class="main">
	
	<form action="" method="POST"> 
		
		<h1>welcome</h1>
		<input type="text" name="m1"     value="<?php echo $row['Name']; ?>"  placeholder="Enter your name">
		<br><br>
		<input type="email" name="m2"    value="<?php echo $row['Email']; ?>"  placeholder="Enter your email">
		<br><br>
		<input type="number" name="m3"   value="<?php echo $row['Mobile']; ?>"  placeholder="Enter your mobile number">
		<br><br>
		<input type="text" name="m4"     value="<?php echo $row['City']; ?>"  placeholder="Enter your city name">
		<br><br>
		<input type="password" name="m5" value="<?php echo $row['Pass']; ?>"  placeholder="Enter Your password">
		<br><br>
		<input type="hidden" name="m7" value="<?php echo $row['Id']; ?>">
		<input type="submit" name="m6" value="Update">
		
	</form>
</div>



</body>
</html>