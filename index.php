<!DOCTYPE html>
<html>
<head>
	<title>Student management system</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">

</head>
<body style="background:url(bg.jpg) no-repeat; background-size: cover; ">
	<a href="login.php"><h3 style="margin:15px;  background-color:black; color:white; float:right;">Admin login</h3></a>
<h3 align="center" style=" padding-top: 20px; margin:10px; height:60px; color:white; font-size: 25px ">welcome to student management system</h3>


<form method="post" >

	 



<table style="color: white; font-size:20px; border-color:black; border:none; background-color: transparent; background:none; outline: none; "  width="30%"  align="center">
	<tr>
		
		<tr>
		<th align="center" >Enter standard</th>
		<td>
			<input type="number" name="standard" placeholder="Enter standard" required="required" style="border:none; outline:none; background:none; color: white; border-bottom: 2px solid; border-bottom-color:green;padding:5px; margin-right:10px;">

		</td>








			
	
	</tr>
	<tr>
		<td>
			Enter Roll No.	
		</td>
		<td>
			<input  type="text" name="rollno" required="required" style="border:none; outline:none; background:none; color: white; border-bottom: 1px solid; border-bottom-color:green;"></td>
		

	</tr>

	<tr>
		<td colspan="2" align="center"> <input type="submit" name="submit" value="show Info" style="color:black; font-size: 15px;"></td>
	</tr>
</form>
</table>


</body>
</html>
<?php
 if(isset($_POST['submit']))
 {
 	$standard=$_POST['standard'];
 	$rollno=$_POST['rollno'];
 

	include('dbcon.php');
	include('function.php');
	showdetails($standard,$rollno);
}
?>