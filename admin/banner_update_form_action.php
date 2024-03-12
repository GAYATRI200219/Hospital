<?php
	include('admin_function.php');
	if(isset($_POST['submit']))
	{
		$p_id=$_POST['u_id'];
		$title=$_POST['title'];
		$subtitle=$_POST['subtitle'];;
		$status=$_POST['status'];
		
	$call=bannerupdateres($p_id,$title,$subtitle,$status);
	if($call)
	{
		
		echo "<script>alert('successfully update this data');window.location.href='banner_slider_table_veiw.php';</script>";
	}
	else
	{
		echo "not";
	}
}
		
	?>