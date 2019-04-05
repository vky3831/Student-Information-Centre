<?php
$user = $_GET['user'];
$connection = mysqli_connect('localhost', 'root', '', 'sic');
$reject = $_GET['reject'];
$query = "UPDATE student SET status=2 WHERE reg='$reject' ";
$exe = mysqli_query($connection, $query);
if($exe){
  echo "<script>window.open('pending.php?user=$user', '_self')</script>";
} else{
  $err = mysqli_error($connection);
  echo "$err";
}
 ?>
