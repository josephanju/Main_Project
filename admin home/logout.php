<?php
session_start(); 
session_unset();
session_destroy(); 
header("Location:../login/index.php?msg=Successfully Logged out"); 
?>