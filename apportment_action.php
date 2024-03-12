<?php
	include('hospital_function.php');	
	if(isset($_POST['submit']))
	{
		$fname=$_POST['Firstname'];
		$lname=$_POST['Lastname'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$dates=$_POST['date'];
		$times=$_POST['time'];

	global $con;
	$result=allRec($fname,$lname,$email,$phone,$dates,$times);
	if($result)
	{
		echo "<script>alert('your apportment booking successfully');
		window.location.href='index.php';</script>";
	}
	else
	{
		echo "not";
	}
}
		
	?>