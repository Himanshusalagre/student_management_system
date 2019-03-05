<?php


function showdetails($standard,$rollno)
{
include('dbcon.php');
$sql="SELECT * FROM `student` WHERE `rollno`='$rollno' AND `standard`='$standard'";

$run=mysqli_query($con,$sql);
if(mysqli_num_rows($run)>0)
{

$data=mysqli_fetch_assoc($run);

?>
<html>
<body>
<table align="center" style="height:250px; border-color:black; border-style:groove;  font-size: 30px; color:white; " width="60%" border="1"
	<tr  align="center" >
		<th colspan="3" align="center" >Student Details</th>
		
		
	</tr>
<tr >	
		<td  rowspan="5">
			<img src="dataimg/<?php $data['imaage']  ?>" style=" width: 100px;  max-height:200px; " />
		</td>
	<th  align="left" >Roll No</th>
	
		<td align="center">
			<?php echo $data['rollno']; ?>
		</td>
</tr>

<tr>
	<th align="left">Student Name </th>
	<td align="center">
		<?php echo  $data['name']; ?>
	</td>
<<tr>
<th align="left">standard</th>
	
<td align="center">
	<?php echo $data['standard']; ?>
</td>
	</tr>

<tr>
<th align="left">parents contact</th>
	
<td align="center">
	<?php echo $data['parentscontact']; ?>
</td>
</tr>
<tr>
<th align="left">Address</th>
	
<td align="center">
	<?php echo $data['city']; ?>
</td>
</tr>
</table>


</body>
</html>


<?php

}
else
{
	echo "<script>alert('No student Found!!');</script";

}



}



?>
