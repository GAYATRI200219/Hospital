<?php
include "../db_connection.php";connection();
if(isset($_POST['submit']))
{
	$title=$_POST['title'];
	$subtitle=$_POST['subtitle'];
	$status=$_POST['status'];
	$filename=$_FILES['banner_image']['name'];
	$tempname=$_FILES['banner_image']['tmp_name'];
	$location="../assects/slider/";
	$sql="INSERT INTO slide(title,subtitle,status,image)VALUES('".$title."','".$subtitle."','".$status."','".$filename."')";
	$query=mysqli_query($con,$sql);
	if($query)
	{
		move_uploaded_file($tempname,$location.$filename);
		echo "insert successful";
	}
	else
	{
		echo "not successful";
	}
}

?>