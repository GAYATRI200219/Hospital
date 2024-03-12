


<?php
include('db_connection.php');
function allRec($fname,$lname,$email,$phone,$dates,$times)
{
	
	$sql="INSERT INTO apportment2(fastname,lastname,email,phone,dates,times_set) VALUES ('$fname','$lname','$email','$phone','$dates','$times')";
	global $con;
	$query=mysqli_query($con,$sql);
	if($query)
	{
		return $query;
	}
	else
	{
		return false;
	}
}


function getAllOwl()
{
	global $con;
	$sql="SELECT* FROM 	owlcarousel WHERE 	status=1 ORDER BY id DESC";
	$query=mysqli_query($con,$sql);
	$numrow=mysqli_num_rows($query);
	if($numrow)
	{
		$alldata=array();
		while($data=mysqli_fetch_assoc($query))
		{
			$alldata[]=$data;
		}
		return $alldata;
	}
	else
	{
		return false;
	}
}


function getAllOwl2()
{
	global $con;
	$sql="SELECT * FROM  owlcarousel2 WHERE status=1 ORDER BY id DESC";
	$query=mysqli_query($con,$sql);
	$numrow=mysqli_num_rows($query);
	if($numrow)
	{
		$alldata=array();
		while ($data=mysqli_fetch_assoc($query))
		{
			$alldata[]=$data;
		}
		return $alldata;
	}
	else
	{
		return false;
	}
}


function getAllSlider(){
	global $con;
	$sql="SELECT * FROM slide WHERE status=1 ORDER BY id DESC";
	$query=mysqli_query($con,$sql);
	$norow=mysqli_num_rows($query);
	if($norow)
	{
		$alldata=array();
		while($data=mysqli_fetch_assoc($query))
		{
			$alldata[]=$data;

		}
		return $alldata;

	}
	else
	{
		return false;
	}
}
?>