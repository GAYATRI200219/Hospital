<?php
$con;
function connection(){
global $con;
$host="localhost";
$user="root";
$pass="";
$db="hospital";
$con=mysqli_connect($host,$user,$pass,$db);
}
connection();
?>