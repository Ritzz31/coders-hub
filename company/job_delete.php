<?php
$obj = new mysqli("localhost","root","","codershub");
if($obj->connect_errno!=0)
{
	echo $obj->connect_error;
	exit;
}

$id = $_GET["delid"];
$exe = $obj->query("delete from job where Job_id='$id' ");

if($exe)
{
	header('location:all_job.php');
}
else
{
	echo "Error...";
}
?>