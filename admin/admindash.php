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
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body body style="margin: 20px;
	padding: 0px;
	font-family: sans-serif;
background: url(../bg.jpg) no-repeat;
background-size: cover;>

	
	<div class="admintitle">
	<h3><a href="logout.php" style="float:right; color: white; margin-right:10px;">Logout </h3></a>
	<h3 align="center" style="color: white;">Welcome to Admin Dashboard</h3>
	
	</div>

<div class="dashboard">
	<table style="color: white; padding-top: 80px;" width="50%" align="center">
		<tr>
			
			<td  align="center" style="padding-bottom: 20px;" >
				1.<a href="addstudent.php" style="color: white; ">Insert Student Details</a>
			</td>
		</tr>

			<tr>
			
			<td align="center" style="padding-bottom: 20px;">
				2.<a href="update.php" style="color: white;">Update Student Details</a>
			</td>
		</tr>

		<tr>
			
			<td align="center" style="padding-bottom: 20px;">
				3.<a href="delete.php" style="color: white;">Delete Student Details</a>
			</td>
		</tr>


	</table>
</div>









</body>
</html>