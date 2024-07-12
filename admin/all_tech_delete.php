<?php
$obj = new mysqli("localhost","root","","codershub");
if($obj->connect_errno!=0)
{
	echo $obj->connect_error;
	exit;
}

$id = $_GET["delid"];
$exe = $obj->query("delete from technology where Tech_id='$id' ");

if($exe)
{
	header('location:all_tech.php');
}
else
{
	echo "Error...";
}
?>