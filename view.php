<?php 
// php code for dispaying the data
session_start();
include 'conn.php';

if (isset($_SESSION['admin'])) {
	// code...
	header("Location:admin.php");
}
//fetching all users data from databse
	$qr="select * from data";
	$res1=mysqli_query($con,$qr);

	if (isset($_POST['m1'])) {
		
		$id = $_POST['eid'];

		$qr = "select * from data where id = '".$id."'";
		$res = mysqli_query($con,$qr);

	}

	if (isset($_POST['m2'])) {
		
		$id = $_POST['eid'];

		$qr = "delete from data where id = '".$id."'";
		$res = mysqli_query($con,$qr);

	}


?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<style>
	.mains
	{	

		margin-left: 300px;
		padding: 100px;
	}
	#edit
	{
		background-color: #388E3C;
		color: white;
		width: 100px;
	}
	#dlt
	{
		background-color: #CB4335;
		color: white;
		width: 100px;
	}
	
</style>
<body>

<!-- This is table for displaing the data -->
<div class="mains">
	<!-- table for displaying users data -->

	<table border="1">
		
		<tr>
			
			<th>Id</th>
			<th>Name</th>
			<th>Email</th>
			<th>Mobile</th>
			<th>City</th>
			<th>Edit</th>
			<th>Delete</th>


		</tr>
		<!-- while loop for displaying all rows from databse -->
		<?php while($row=mysqli_fetch_assoc($res1))
		 {
			
		?>
		<tr>
			<td> <h4> <?php echo  $row['Id']; ?> </h4></td>
			<td> <h4> <?php echo $row['Name']; ?> </h4></td>
			<td> <h4> <?php echo $row['Email']; ?> </h4></td>
			<td> <h4> <?php echo $row['Mobile']; ?> </h4></td>
			<td> <h4> <?php echo $row['City']; ?> </h4></td>
			<td>



			<form action="update.php" method="POST" >
			
			<input type="submit" id="edit" name="m1" value="Edit">

			<input type="hidden" name="eid" value= "<?php echo  $row['Id']; ?> ">
			
			</form>

			</td>
			

			<td>

			<form action="" method="POST" >

			<input type="submit" id="dlt" name="m2" value="Delete">
			
			<input type="hidden" name="eid" value= "<?php echo  $row['Id']; ?> ">

			</form>

			</td>

		</tr>
	<?php } ?>
	</table>


</div>





</body>
</html>