<?php  
include "db_connection.php";
if (isset($_POST['submit']))
{
	global $con;
	$fastname=$_POST['fastname'];
	$lastname=$_POST['lastname'];
	$useremail=$_POST['useremail'];
	$sql="INSERT INTO header_form(fastname,	lastname,email) VALUES ('$fastname','$lastname','$useremail')";
	$query=mysqli_query($con,$sql);
	if($query)
	{
		echo "<script>alert('your apportments booking successfully');
		window.location.href='index.php';</script>";
	}	
	else
	{
		echo "not success";
	}
}
?>