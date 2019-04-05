<?php
session_start();
  if($_SESSION['user']){}
    else{
      header('location: login_as_admin.php');
    }
$connection = mysqli_connect('localhost','root', '', 'sic');
$user = $_SESSION['user'];
$query = "SELECT * FROM admin WHERE user='$user' ";
$exe = mysqli_query($connection, $query);
while($rows=mysqli_fetch_array($exe)){
  $name = $rows['name'];
  $user = $rows['user'];
  $contact = $rows['contact'];
  $email = $rows['email'];
  $gender = $rows['gender'];
  $sec_ques = $rows['sec_ques'];
  $sec_ans = $rows['sec_ans'];
}
 ?>

<!DOCTYPE html>
<html>
<head>
<title> SIC: Admin </title>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
<link rel="stylesheet" href="decoration.css">
</head>
<body>
<div class="container-fluid">
<img id="img" src="image/icon.png" alt="google"/>
<p class="head">STUDENT INFORMATION CENTER</p>
<div class="row">
<ul>
	<li><a href="home.php" >Home</a></li>
	<li><a href="login.php">Login</a></li>
	<li><a href="signup.php">Sign up</a></li>
	<li><a href="about.php">About</a></li>
  <li class="right"><a href="logout.php">Log Out</a></li>
  <li class="right" style="background-color: #006CFF"><a href="#"><?php echo $user; ?></a></li>
</ul>
</div>
<div class="main">
  <div class="side main2">
  <button class="side_button" style="background-color: #006CFF"> <a href="#"> Personal Details </a></button><br>
  <a href="database.php?user=<?php echo $user; ?>"><button class="side_button">  Database </button><br></a>
  <a href="new_admin.php?user=<?php echo $user; ?>"><button class="side_button">  New Admin </button><br></a>
  </div>
  <div class="article main2">
		<!-- <img class="passport" src="image/student.jpg"/> -->
		<p class="field">Name: <span class="fill"><?php echo $name; ?></span></p>
			<p class="field">Username: <span class="fill"><?php echo $user; ?></span></p>
		<p class="field">Contact no.: <span class="fill"><?php echo $contact; ?></span></p>
		<p class="field">E-mail Id: <span class="fill"><?php echo $email; ?></span></p>
		<p class="field">Gender: <span class="fill"><?php echo $gender; ?></span></p>
		<p class="field">Security Question: <span class="fill"><?php echo $sec_ques; ?></span></p>
		<p class="field">Security Answer: <span class="fill"><?php echo $sec_ans; ?></span></p>
  </div>
</div>

</div>
</body>
</html>
