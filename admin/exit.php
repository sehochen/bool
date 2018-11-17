<?php

$url = 'http://'.$_SERVER['HTTP_HOST'].dirname(dirname($_SERVER['SCRIPT_NAME']) );
session_start();

unset($_SESSION['u_id']);
unset($_SESSION['u_name']);

header("Location:$url/login.php");	
