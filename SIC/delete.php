<?php
$user = $_GET['user'];
$connection = mysqli_connect('localhost', 'root', '', 'sic');
$del = $_GET['del'];
$query = "DELETE FROM student where reg='$del' ";
$exe = mysqli_query($connection, $query);
if($exe){
  echo  "<script>window.open('database.php?user=$user', '_self')</script>";
} else{
  $err = mysqli_error($connection);
  echo "$err";
}
 ?>
