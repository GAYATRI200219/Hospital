<?php
	include('admin_function.php');
	if(isset($_POST['submit']))
	{
		$p_id=$_POST['u_id'];
		$fname=$_POST['f_name'];
		$lname=$_POST['l_name'];;
		$email=$_POST['email'];
		
	$call=vacinationupdateres($p_id,$fname,$lname,$email);
	if($call)
	{
		
		echo "<script>alert('successfully update this data');window.location.href='vacination_vew_insert.php';</script>";
	}
	else
	{
		echo "not";
	}
}
		
	?>