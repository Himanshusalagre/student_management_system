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
<!DOCTYPE html>
<html>
<head>
	<title>Insert student </title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body body style="margin: 20px;
	padding: 0px;
	font-family: sans-serif;
background: url(../bg.jpg) no-repeat;
background-size: cover;>

<div class="admintitle">
	<h3><a href="logout.php" style="float:right; color: white; margin-right:10px;">Logout </h3></a>
	<h3><a href="admindash.php" style="float:left; color: white; margin-left :10px;">Back </h3></a>
	<h3 style="color: white" align="center">Welcome to Admin Dashboard</h3>
	
	
	</div>
<form method="post" action="addstudent.php" enctype="multipart/form-data">
	<table align="center"  width="50%" style="font-size:15px; color: white;margin-top:5%; line-height:30px; ">
		
		<tr>
			<td>
				<h3 style=" margin-left:30px;  color:white; border-bottom:6px solid; float:left; top:50%; left:50%; padding:9px 0; border-bottom-color:green; ">Add Student</h3>
			</td>
		</tr>


		<tr>
			
			<th align="right" style="padding-right: 10px;" >
			Roll no.
			</th>
			<td>
				<input type="text" name="rollno" placeholder="Enter your Rollno" required="required" style="border:none; outline:none; background:none; color: white; border-bottom: 2px solid; border-bottom-color:green;">
			</td>

		</tr>

<tr>
			
			<th align="right" style="padding-right: 10px;">
			Full Name:
			</th>
			<td><input type="text" name="uname" placeholder="Enter your Name" required="required" style="border:none; outline:none; background:none; color: white; border-bottom: 1px solid; border-bottom-color:green;">
			</td>
		</tr>

<tr>
			
			<th align="right" style="padding-right: 10px;">
				Address:
			</th>
			<td><input type="text" name="city" placeholder="Enter Address" required="required" style="border:none; outline:none; background:none; color: white; border-bottom: 1px solid; border-bottom-color:green;">
			</td>
		</tr>

<tr>
			
			<th align="right" style="padding-right: 10px;" >
				parents contact:
			</th>
			<td><input type="text" name="pcon" placeholder="Enter parents contact" required="required" style="border:none; outline:none; background:none; color: white; border-bottom: 1px solid; border-bottom-color:green;">
			</td>
		</tr>


<tr>
			
			<th align="right" style="padding-right: 10px;">
			standard 
			</th>
			<td><input type="number" name="std" placeholder="Enter your standard" required="required" style="border:none; outline:none; background:none; color: white; border-bottom: 1px solid; border-bottom-color:green; ">
			</td>
		</tr>


<tr>
			
			<th align="right" style="padding-right: 10px;">
				image
			</th>
			<td><input type="file" name="img" style="border:none; outline:none; background:none; color: white; border-bottom: 1px solid; border-bottom-color:green;">
			</td>
		</tr>

<tr>

		<td colspan="4" align="center"><input style="width: 150px;height: 30px;  background:linear-gradient(to bottom, #66ccff 0%, #ffffff 100%); color: black; font-style:italic; " type="submit" name="submit" value="submit"></td>
	</tr>

	</table>



</form>



</body>
</html>
<?php
if(isset($_POST['submit']))
{
	include('../dbcon.php');
	$rollno= $_POST['rollno'];
	$name= $_POST['uname'];
	$city= $_POST['city'];
	$parentscontact= $_POST['pcon'];
	$standard= $_POST['std'];
	$image= $_FILES['img']['name'];
	$tempname=$_FILES['img']['tmp_name'];
	move_uploaded_file($tempname,"../dataimg/image");
	


	$query="INSERT INTO `student`( `rollno`, `name`, `city`, `parentscontact`, `standard`, `image`) VALUES ('$rollno','$name','$city','$parentscontact','$standard','$image')";
	$run=mysqli_query($con,$query);
	if ($run==true) 
	{
		?>
		<script type="text/javascript">
			
			alert('Data Inserted Sucessfully');
		</script>
<?php
	}

else
	{
		echo "error";
	}


}


?>