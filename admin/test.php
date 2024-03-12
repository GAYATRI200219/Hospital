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
	$fname="";	
	$call=vacinationupdateselect($id); 
	foreach ($call as $key => $value) 
	{
		$fname=$value['fastname'];
		$lname=$value['lastname'];
		$email=$value['email'];
		}
	?>
	<form action="vacination_update_form_action.php" method="post">
		<input type="text" name="u_id" value="<?php if($id!=""){echo $id;}?>">
		<input type="text" name="f_name" value="<?php if($fname!=""){echo $fname;}?>">
		<input type="text" name="l_name" value="<?php if($lname!=""){echo $lname;}?>">
		<input type="email" name="email" value="<?php if($email!=""){echo $email;}?>">
			<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>