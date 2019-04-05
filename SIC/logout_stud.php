<?php
session_start();
// session_destroy();
unset($_SESSION["reg"]); 
header('location: login.php');
 ?>
