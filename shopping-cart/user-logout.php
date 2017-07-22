<?php 
session_start(); 

header("location: user-login.php");


session_destroy();
?>