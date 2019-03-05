<?php
if(isset($_POST['submit']))
{
	include('../dbcon.php');
	$rollno= $_POST['rollno'];
	$name= $_POST['uname'];
	$city= $_POST['city'];
	$parentscontact= $_POST['pcon'];
	$standard= $_POST['std'];
	$id=$_POST['sid'];
	$image= $_FILES['img']['name'];
	$tempname=$_FILES['img']['tmp_name'];
	move_uploaded_file($tempname,"../dataimg/image");
	


	$query="UPDATE `student` SET `rollno` = '$rollno', `name` = '$name', `city` = '$city', `parentscontact` = '$parentscontact', `standard` = '$standard', `image` = '$image' WHERE `id` = $id;";
	$run=mysqli_query($con,$query);
	if ($run==true) 
	{
		?>
		<script type="text/javascript">
			
			alert('Data updated Sucessfully');
		window.open('updateform.php?sid=<?php echo $id; ?>','_self');
 		</script>
<?php
	}
}
?>