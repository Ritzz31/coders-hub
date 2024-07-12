<?php
$obj = new mysqli("localhost","root","","codershub");
if($obj->connect_errno!=0)
{
	echo $obj->connect_error;
	exit;
}

$id = $_GET["delid"];
$exe = $obj->query("delete from sub_technology where Sub_id='$id' ");

if($exe)
{
	header('location:all_subtech.php');
}
else
{
	echo "Error...";
}
?>