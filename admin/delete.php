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
	<title>Delete student record </title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body  style="margin: 20px;
	padding: 0px;
	font-family: sans-serif;
background: url(../bg.jpg) no-repeat;
background-size: cover;>>

<div class="admintitle">
	<h3><a href="logout.php" style="float:right; color: white; margin-right:10px;">Logout </h3></a>
	<h3><a href="admindash.php" style="float:left; color: white; margin-left :10px;">Back </h3></a>
	<h3 align="center">Welcome to Admin Dashboard</h3>
</div>
<table align="center" width="40%" style="color: white;">
	<form action="delete.php" method="post"> 
	

<tr>
			<td>
				<h3 style=" margin-left:0px;  color:white; border-bottom:6px solid; float:left; top:50%; left:50%; padding:20px 0; border-bottom-color:green;">Delete Data</h3>
			</td>
		</tr>





	<tr>
		<th align="right" style="padding-right: 10px;">Enter standard</th>
		<td>
			<input type="number" name="standard" placeholder="Enter standard" required="required" style="border:none; outline:none; background:none; color: white; border-bottom: 2px solid; border-bottom-color:green;padding:9px;  ">

		</td>
	</tr>

	<tr>
		<th align="right" style="padding-right: 10px;">Enter Student Name</th>
		<td><input type="text" name="name" placeholder="Enter Name" required="required" style="border:none; outline:none; background:none; color: white; border-bottom: 2px solid; border-bottom-color:green; padding:9px; "  >
		</td>
	</tr>
	<tr>

		<td colspan="4"  style="padding-top:20px; " align="center"><input style="  width: 150px;height: 30px; background:linear-gradient(to bottom, #66ccff 0%, #ffffff 100%); color: black;" type="submit" name="submit" value="search"></td>
	</tr>
</form>
</table>	
<table style="color: white;" align="center" width="80% " border="1px">
<tr>
	
	<th>No</th>
	<th>Name</th>
	<th>Roll no</th>
	<th>standard</th>
	<th>par.contact</th>
	<th>Address</th>
	<th>Delete</th>
</tr>



<?php
if (isset($_POST['submit']))
{
			
include('../dbcon.php');
$standard=$_POST['standard'];
$name=$_POST['name'];

$sql="SELECT * FROM `student` WHERE `standard`='$standard' AND `name` LIKE '%$name%'";
$run=mysqli_query($con,$sql);
if (mysqli_num_rows($run)<1) 
{

echo "No record found";	# code...
}
else
{

	$count=0;
while ($data=mysqli_fetch_assoc($run))
	{
		$count++;
	?>
	<tr>
	
	<td> <?php echo $count;?> </td>
	<td><?php echo $data['name'];   ?></td>
	<td><?php echo $data['rollno'];   ?> </td>
	<td><?php echo $data['standard'];   ?> </td>
	<td><?php echo $data['parentscontact'];   ?> </td>
	<td><?php echo $data['city'];   ?> </td>
	<td ><a href="deleteform.php?sid=<?php echo $data['id']; ?>" style="color:white;">Delete</td></a>
</tr>
 	

	<?php
	}

}


}



?>
</table>

	</body>
</head>