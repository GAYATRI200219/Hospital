<?php
include "admin_function.php";
$id=$_GET['uid'];
$delete=vacination_delele($id);
if($delete)
{
	header('location:vacination_vew_insert.php');
}
else
{
	echo 'delete not success';
}
?>