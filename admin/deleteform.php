<?php
//if(isset($_POST['submit']))
//{
	include('../dbcon.php');
	$id=$_REQUEST['sid'];
	
	$query="DELETE FROM `student` WHERE `id`='$id';";
	$run=mysqli_query($con,$query);
	if ($run==true) 
	{
		?>
		<script type="text/javascript">
			
			alert('Data Deleted Sucessfully');
		window.open('delete.php','_self');
 		</script>
<?php
	}
//}
?>