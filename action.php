<?php
	include('db_connection.php');
	$location='assects/img/';
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$password=$_POST['psw'];
		$filename=$_FILES['images']['name'];
		$tempname=$_FILES['images']['tmp_name'];
		if($filename !="")
		{
		move_uploaded_file($tempname,$location.$filename);
	}
	$sql="INSERT INTO doctor2(`name`,`email`,`phone`,`password`,`image`) VALUES('$name','$email','$phone','$password','$filename')";
	$result=mysqli_query($con,$sql);
	if($result)
	{
		
		echo "<script>alert('student added successfully');window.location.href='user_login.php'</script>";
	}
	else
	{
		echo "<script>alert('student added unsuccessfully');window.location.href='contact.html'</script>";
	}
}
		
	?>