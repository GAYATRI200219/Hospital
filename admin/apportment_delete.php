<?php
include "admin_function.php";
$id=$_GET['uid'];
$delete=apportment_del($id);
if($delete)
{
	header('location:apportment_insert.php');
}
else
{
	echo 'delete not success';
}
?>