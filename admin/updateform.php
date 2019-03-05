<?php
session_start();
if(isset($_SESSION['uid']))
	{
	echo "";
	}
else
	{
		header('location: ../login.php');
	}
?>

<?php

include('../dbcon.php');
$sid=$_GET['sid'];
$sql="SELECT * FROM `student` WHERE `id`='$sid'";
$run=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($run);



?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit form </title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body style="margin: 20px;
	padding: 0px;
	font-family: sans-serif;
background: url(../bg.jpg) no-repeat;
background-size: cover;>

<div class="admintitle">
	<h3><a href="logout.php" style="float:right; color: white; margin-right:10px;">Logout </h3></a>
	<h3><a href="update.php" style="float:left; color: white; margin-left :10px;">Back </h3></a>
	<h3 align="center">Welcome to Admin Dashboard</h3>
</div>

<form method="post" action="updateddata.php" enctype="multipart/form-data">
	<table align="center"  width="50%" style="font-size: 15px; color:white; ">
		
		<tr>
			<td>
				<h3 style=" margin-left:0px;  color:white; border-bottom:6px solid; float:left; top:50%; left:50%; padding:20px 0; border-bottom-color:green;">Edit Data</h3>
			</td>
		</tr>


			<tr>
			
			<th align="right" >
			Roll no.
			</th>
			<td>
				<input type="text" name="rollno" value="<?php echo $data['rollno']; ?>" required="required"  style="border:none; outline:none; background:none; color: white; border-bottom: 2px solid; border-bottom-color:green;padding:5px; margin-right:80px; margin-left:10px;">
			</td>

		</tr>

<tr>
			
			<th align="right">
			Full Name:
			</th>
			<td><input type="text" name="uname" value="<?php echo $data['name']; ?>" required="required" style="border:none; outline:none; background:none; color: white; border-bottom: 2px solid; border-bottom-color:green;padding:5px; margin-right:80px; margin-left:10px; ">
			</td>
		</tr>

<tr>
			
			<th align="right">
				Address
			</th>
			<td><input type="text" name="city" value="<?php echo $data['city']; ?>" required="required" style="border:none; outline:none; background:none; color: white; border-bottom: 2px solid; border-bottom-color:green;padding:5px; margin-right:80px; margin-left:10px;">
			</td>
		</tr>

<tr>
			
			<th align="right">
				parent contact no:
			</th>
			<td><input type="text" name="pcon" value="<?php echo $data['parentscontact']; ?>" required="required" style="border:none; outline:none; background:none; color: white; border-bottom: 2px solid; border-bottom-color:green;padding:5px; margin-right:80px; margin-left:10px;">
			</td>
		</tr>

<tr> 
			
			<th align="right">
			standard:
			</th>
			<td><input type="number" name="std" value="<?php echo $data['standard']; ?>"  required="required" style="border:none; outline:none; background:none; color: white; border-bottom: 2px solid; border-bottom-color:green;padding:5px; margin-right:80px; margin-left:10px;">
			</td>
		</tr>


<tr>
			
			<th align="right">
				image
			</th>
			<td><input type="file" name="img" style="border:none; outline:none; background:none; color: white; border-bottom: 2px solid; border-bottom-color:green;padding:5px; margin-right:80px; margin-left:10px;">
			</td>
		</tr>

<tr>

	<input type="hidden" name="sid" value="<?php echo $data['id']; ?>"/>

		<td colspan="4" align="center" style="padding-top:15px; "><input style="width: 150px;height: 30px; background:linear-gradient(to bottom, #66ccff 0%, #ffffff 100%); color: black; font-style:italic; " type="submit" name="submit" value="submit"></td>
	</tr>

	</table>


</form>


</body>
</html>