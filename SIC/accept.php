<?php
$user = $_GET['user'];
$connection = mysqli_connect('localhost', 'root', '', 'sic');
$accept = $_GET['accept'];
$query = "UPDATE student SET status=1 WHERE reg='$accept' ";
$exe = mysqli_query($connection, $query);
if($exe){
  echo "<script>window.open('pending.php?user=$user', '_self')</script>";
} else{
  $err = mysqli_error($connection);
  echo "$err";
}
 ?>
