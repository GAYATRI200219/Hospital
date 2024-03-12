<?php 
include "admin_function.php";
$id=$_GET['uid'];
echo $id;
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$name="";
	$email="";
	$call=updateres($id); 
	foreach ($call as $key => $value) 
	{
		$fname=$value['fastname'];
		$lname=$value['lastname'];
		$email=$value['email'];
		$phone=$value['phone'];
		$date=$value['dates'];
		$times_set=$value['times_set'];

		
	}
	?>
	<form action="update_action.php" method="post">
		<input type="text" name="u_id" value="<?php if($id!=""){echo $id;}?>">
		<input type="text" name="f_name" value="<?php if($fname!=""){echo $fname;}?>">
		<input type="text" name="l_name" value="<?php if($lname!=""){echo $lname;}?>">
		<input type="email" name="email" value="<?php if($email!=""){echo $email;}?>">
		<input type="date" name="dates" value="<?php if($dates!=""){echo $dates;}?>">
		<input type="time" name="times_set" value="<?php if($times_set!=""){echo $times_set;}?>">
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>