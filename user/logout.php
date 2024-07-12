<?php
     

session_start();

unset($_SESSION['log']);

session_destroy();

header("location:user_login.php");


?>