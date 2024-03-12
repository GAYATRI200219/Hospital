<?php
include('db_connection.php');
$username=$_POST['email'];
$password=$_POST['psw'];

global $con;
$sql="SELECT * FROM doctor2 WHERE email='".$username."' AND password='".$password."'";
$result=mysqli_query($con,$sql);
$rows=mysqli_num_rows($result);
if($rows)
{
	$data=mysqli_fetch_assoc($result);
	session_start();
	$_SESSION['username']=$data['name'];
	$_SESSION['useremail']=$data['email'];
	$_SESSION['pass']=$data['password'];
	header('location:index.php');
}
else
{
	echo "<script>alert('username or password does not exist.');window.location.href='user_login.php';</script>";
}
?>