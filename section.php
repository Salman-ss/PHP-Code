<?php
// checking admin if loged or not
session_start();

if (!(isset($_SESSION['admin']))) {
	
	header("Location:admin.php");

}



?>

<!-- this is a section data -->

<!DOCTYPE html>


<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		.mains
		{
			text-align: center;
			margin: 100px;
			padding: 10px;

		}
		.mains input[type="submit"]
		{
			margin-right: 200px;
		}
		.mains input[type="submit"]
		{
			height: 30px;
			width: 150px;
			background-color: cyan;
			color: black;
		}
	</style>
</head>
<body>


<div class="mains">

	<a href="logout.php">
		<input type="submit" name="m11" value="logout">
	</a>




	<a href="view.php">
		<input type="submit" name="m12" value="views">
	</a>
</div>
</body>	
</html>