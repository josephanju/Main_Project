<?php
session_start(); 
session_unset();
session_destroy(); 
header("location:../a/index.php?msg=Successfully Logged out"); 
?>