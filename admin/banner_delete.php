<?php
include "admin_function.php";
$id=$_GET['uid'];
$delete=banner_delele($id);
if($delete)
{
	header('location:banner_slider_table_veiw.php');
}
else{
	echo 'delete not success';
}
?>