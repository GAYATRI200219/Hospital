<?php
include "../db_connection.php";



function admin()
{
	global $con;
	$sec=array();
        $sql="SELECT * FROM doctor2";
        $result=mysqli_query($con,$sql);
        while($record=mysqli_fetch_array($result))
        {
            $sec[]=$record;
        }
            if($sec>0)
            {
                return $sec;
            }
            else
            {
                return false;
            }
}

function apportment_view()
{
    global $con;
    $sec=array();
        $sql="SELECT * FROM apportment2";
        $result=mysqli_query($con,$sql);
        while($record=mysqli_fetch_array($result))
        {
            $sec[]=$record;
        }
            if($sec>0)
            {
                return $sec;
            }
            else
            {
                return false;
            }
}

function apportment_del($id)
{
    global $con;
    $query = "DELETE  FROM apportment2 WHERE id=".$id;
    $res = mysqli_query($con,$query);
    if($res)
    {
        return $res;
    }
//     else
//     {
//         return false;
//     }
}
// apportment2  select funtion 
function updateselect($id)
{
global $con;
    $query = "SELECT * FROM apportment2 WHERE id=".$id;
    $res = mysqli_query($con,$query);
    $result=array();
    while($rec=mysqli_fetch_assoc($res))
    {
        $result[]=$rec;
    }
    if($result)
    {
        return $result;
    }
    else
    {
        return false;
    }

}

// apportment update function
function updateres($id,$fname,$lname,$email,$phone,$date,$times_set)

{
    global $con;
    $query = "UPDATE apportment2 SET fastname='".$fname."',lastname='".$lname."',email='".$email."',phone='".$phone."',dates='".$date."',times_set='".$times_set."' WHERE id =".$id;
    $res = mysqli_query($con,$query);
    if($res)
    {
        return $res;
    }
    else
    {
        return false;
    }
}
 // vactination view insert
 function vacination_view()
{
    global $con;
    $sec=array();
        $sql="SELECT * FROM  header_form";
        $result=mysqli_query($con,$sql);
        while($record=mysqli_fetch_array($result))
        {
            $sec[]=$record;
        }
            if($sec>0)
            {
                return $sec;
            }
            else
            {
                return false;
            }
}

function vacinationupdateselect($id)
{
global $con;
    $query = "SELECT * FROM header_form WHERE id=".$id;
    $res = mysqli_query($con,$query);
    $result=array();
    while($rec=mysqli_fetch_assoc($res))
    {
        $result[]=$rec;
    }
    if($result)
    {
        return $result; 
    }
    else
    {
        return false;
    }

}

// vacination update function
function vacinationupdateres($id,$fname,$lname,$email)

{
    global $con;
    $query = "UPDATE header_form SET fastname='".$fname."',lastname='".$lname."',email='".$email."' WHERE id=".$id;
    $res = mysqli_query($con,$query);
    if($res)
    {
        return $res;
    }
    else
    {
        return false;
    }
}

// vacination delete
function vacination_delele($id)
{
    global $con;
    $query = "DELETE  FROM header_form WHERE id=".$id;
    $res = mysqli_query($con,$query);
    if($res)
    {
        return $res;
    }
//     else
//     {
//         return false;
//     }
}
function banner_view()
{
      global $con;
    $sec=array();
        $sql="SELECT * FROM  slide";
        $result=mysqli_query($con,$sql);
        while($record=mysqli_fetch_array($result))
        {
            $sec[]=$record;
        }
            if($sec>0)
            {
                return $sec;
            }
            else
            {
                return false;
            }
}
function banner_delele($id)
{
    global $con;
    $sql="DELETE FROM slide WHERE id=".$id;
    $query=mysqli_query($con,$sql);
    if($query)
    {
        return $query;
    }
    else
    {
        return $query;
    }
}
function bannerupdateselect($id)
{
global $con;
    $query = "SELECT * FROM slide WHERE id=".$id;
    $res = mysqli_query($con,$query);
    $result=array();
    while($rec=mysqli_fetch_assoc($res))
    {
        $result[]=$rec;
    }
    if($result)
    {
        return $result; 
    }
    else
    {
        return false;
    }

}

// update function
function bannerupdateres($id,$title,$subtitle,$status)

{
    global $con;
    $query = "UPDATE slide SET title='".$title."',subtitle='".$subtitle."',status='".$status."' WHERE id=".$id;
    $res = mysqli_query($con,$query);
    if($res)
    {
        return $res;
    }
    else
    {
        return false;
    }
}
function user_count()
{
    global $con;
    $sql="SELECT * FROM apportment2";
    $query=mysqli_query($con,$sql);
    $count=mysqli_num_rows($query);
    return $count;
}
function vacsination_count()
{
    global $con;
    $sql="SELECT * FROM header_form";
    $query=mysqli_query($con,$sql);
    $count=mysqli_num_rows($query);
    return $count;
}

?>