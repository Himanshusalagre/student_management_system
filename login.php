<?php
session_start();
if (isset($_SESSION['uid'])) {
	header('location:admin/admindash.php');
	# code...
}



?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin login</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<div class="bg" >
<body style="margin: 20px;
	padding: 0px;
	font-family: sans-serif;
background: url(bg.jpg) no-repeat;
background-size: cover;
">

<div class="admintitle">
	<h3><a href="index.php" style="float:left; color:white; margin-left:20px; ">Back</h3></a>
	<h3 align="center" style="background-color:black; height: 30px; color:white;">Welcome to Admin Login</h3>
	
	</div>



<form action="login.php" method="post">

<table align="center" style="margin-top:10%;">
	<div class="head">
	<tr>
		<td>
			<h2 style="color: white; border-bottom: 6px solid ; float: left;
	
	top:50%;
	left: 50%; padding: 13px 0; border-bottom-color:green;">Login </h2>
		</td>
	</tr>
</div>

	<tr>
		<td spacing="10px" style=" line-height:10px; padding: 5px;" >
	 <input style="border:none; outline:none; background:none; color: white; border-bottom: 1px solid; border-bottom-color:green;" type="text" name="uname"required="required" 
			placeholder="Username" size="20px" ></td>
		
	</tr>
	<tr>
		<td style=" line-height:20px; padding:5px; "><input style="border:none; outline:none; background:none; color: white; border-bottom: 1px solid; border-bottom-color:green;"  type="Password" name="pass"required="required" size="20px" 
			placeholder="Password"></td>

	</tr>
	
	<tr>

		<td style="line-height:50px; " colspan="2"  align="center"><input type="submit" name="login" value="login" style="width: 80px; height: 35px;" ></td>
	</tr>
	</form>
</table>

</body>
</div>
</html>

<?php
include('dbcon.php');
if(isset($_POST['login'])) 
{
	$username=$_POST['uname'];
	$password=$_POST['pass'];
	$qry="SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
	$run=mysqli_query($con,$qry);
	$row=mysqli_num_rows($run);
	if ($row<1) 
	{
		?>
	<script>
		alert('username or password Not mached!!');
		window.open('login.php','_self');
	</script>	
	<?php 
	}
 	else
 	{
 		$data=mysqli_fetch_assoc($run);
 		$id =$data['id'];
	session_start();
	$_SESSION['uid']=$id;
	header('location:admin/admindash.php'); 		# code...
 	}
 	
}




	




	
		# code...

		
?>