<?php 
 include "db_connection.php";
 if(isset($_POST['submit']))
 {
 	global $con;
 	$description=$_POST['description'];
 	$title=$_POST['title'];
 	$number=$_POST['number'];
 	$status=$_POST['status'];
 	$filename=$_FILES['images']['name'];
 	$tempname=$_FILES['images']['tmp_name'];
 	$location='assects/img/';
 	$sql="INSERT INTO owlcarousel2 (description,title,number,image,status) VALUES('$description','$title','$number','$filename','$status')";
 	$result=mysqli_query($con,$sql);
 	if($result)
	{
		move_uploaded_file($tempname,$location.$filename);
		echo "successfully";
	}
	else
	{
		echo " unsuccessfully";
	}
}
		
?>