<?php
	include('db_connection.php');
	if(isset($_POST['submit']))
	{
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];;
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$dates=$_POST['dates'];
		$times_set=$_POST['times_set'];

		
	$sql="INSERT INTO  apportment2(`fastname`,`lastname`,`email`,`phone`,`dates`,`	times_set	`) VALUES('$fname,'$lname,'$email','$phone','$dates','$times_set')";
	$result=mysqli_query($con,$sql);
	if($result)
	{
		
		echo " success"
	}
	else
	{
		echo "not";
	}
}
		
	?>