<?php

$obj = new mysqli("localhost","root","","codershub");

if($obj->connect_errno!=0)
{
	echo $obj->connect_error;
	echo "not connect";
	exit;
}


?>