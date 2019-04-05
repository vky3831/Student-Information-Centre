<?php
session_start();
  if($_SESSION['user']){}
    else{
      header('location: login_as_admin.php');
    }
$connection = mysqli_connect('localhost','root', '', 'sic');
$user = $_GET['user'];
$query = "SELECT * FROM admin WHERE user='$user' ";
$exe = mysqli_query($connection, $query);
while($rows=mysqli_fetch_array($exe)){
  $user = $rows['user'];
}
 ?>
<!DOCTYPE html>
<html>
<head>
<title> SIC: Database </title>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
<link rel="stylesheet" href="decoration.css">
<style>
.database{
	width: 100%;
}
.database th {
	padding-top: 10px;
  padding-bottom: 10px;
	color: white;
	background-color: #0088FF;
}
.database tr:nth-child(even){background-color: #E5E4E2;}
.database tr:nth-child(odd){background-color: #F0F8FF;}
.database tr:hover {background-color: #BDEDFF;}
.database th{
	border-radius: 5px;
}
.database td{
  border: 1px solid #E0FFFF;
	padding-top: 8px;
  padding-bottom: 8px;
	border-radius: 5px;
}
.green{
	color: white;
	background-color: green;
	text-decoration: none;
	padding: 5px;
	border-radius: 5px;
	text-align: center;

}

.blue{
	color: white;
	background-color: #3576E7;
	text-decoration: none;
	padding: 5px;
	border-radius: 5px;
	text-align: center;
}

.yellow{
	color: black;
	background-color: yellow;
	text-decoration: none;
	padding: 5px;
	border-radius: 5px;
	text-align: center;
}
.red{
	color: white;
	background-color: red;
	text-decoration: none;
	padding: 5px;
	border-radius: 5px;
	text-align: center;
}
a{
	color: inherit;
}
</style>
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
  <a href="admin.php?user=<?php echo $user; ?>"> <button class="side_button">  Personal Details </button></a><br>
  <button class="side_button" style="background-color: #006CFF"> <a href="#"> Database </a></button><br>
  <a href="pending.php?user=<?php echo $user; ?>"> <button class="side_button">  Pending </button></a><br>
  <a href="rejected.php?user=<?php echo $user; ?>"><button class="side_button">  Rejected </button></a><br>
	<a href="new_admin.php?user=<?php echo $user; ?>"><button class="side_button">  New Admin </button></a><br>
  </div>
  <div class="article main2" style="overflow: auto;">
		<input type="text" onkeyup="search()" placeholder="search by registration no..." id="to_search" style="padding: 10px; width:100%">
		<table class="database" id="data">
			<tr>
				<th>Reg no.</th>
				<th>Roll no.</th>
				<th>Name</th>
				<th>Gender</th>
				<th>Contact</th>
				<th>E-mail ID</th>
				<th>Open</th>
				<th>Update</th>
				<th>Delete</th>
			</tr>
<?php
$connection = mysqli_connect('localhost', 'root', '', 'sic');
$query = "SELECT * FROM student";
$exe = mysqli_query($connection, $query);
while ($rows = mysqli_fetch_array($exe)){
	$reg = $rows['reg'];
	$roll = $rows['roll'];
	$name = $rows['name'];
	$gender = $rows['gender'];
	$contact = $rows['contact'];
	$email = $rows['email'];
  $status = $rows['status'];

  if($status == 1){
 ?>

	<tr>
		<td><?php echo $reg; ?></td>
		<td><?php echo $roll; ?></td>
		<td><?php echo $name; ?></td>
		<td><?php echo $gender; ?></td>
		<td><?php echo $contact; ?></td>
		<td><?php echo $email; ?></td>
		<td class="blue"> <a href="open.php?open=<?php echo $reg; ?>&user=<?php echo $user ?>">Open</a></td>
		<td class="yellow"><a href="update.php?update=<?php echo $reg; ?>&user=<?php echo $user ?>">Update</a></td>
		<td class="red"><a href="delete.php?del=<?php echo $reg; ?>&user=<?php echo $user ?>">Delete</a></td>
	</tr>

<?php } } ?>

		</table>
  </div>
</div>

</div>
<script type="text/javascript">
function search() {
	var input, filter, table, tr, td, i;
	input = document.getElementById("to_search");
	filter = input.value.toUpperCase();
	table = document.getElementById("data");
	tr = table.getElementsByTagName("tr");
	for (i = 1; i < tr.length; i++) {
		td = tr[i].getElementsByTagName("td")[0];
		if (td) {
			if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
				tr[i].style.display = "";
			} else {
				tr[i].style.display = "none";
			}
		}
	}
}
</script>
</body>
</html>
