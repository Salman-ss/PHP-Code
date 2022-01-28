<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Simbi labs</title>
	<style>
		
	/*	For styling the index page*/
		#first
		{
			text-align: center;
			color: rebeccapurple;
		}
		.main:after
		{
			display: table;
			content: "";
			clear:both;
		}
		.m1
		{
			float: left;
			margin-left: 150px;
			padding: 10px;

		}
		.m1 input[type="submit"] ,.m2 input[type="submit"]
		{
			height: 30px;
			background-color: cyan;
			color: black;
			margin-left: 250px;
		}
		.m2
		{
			float: left;
			padding: 10px;
			text-align: center;
		}

	</style>
</head>
<body>

	<!--  This is a index page  -->

<h1 id="first">Welcome Simbi labs</h1>

<div class="main">		
	

	<div class="m1">
		<a href="admin.php">
		<input type="submit" name="Admin" value="Admin Login">
		</a>

	</div>
	<div class="m2">
		<a href="form.php">
		<input type="submit" name="form" value="Fill The Form">
		</a>
	</div>
</div>

</body>
</html>