<!DOCTYPE html>
<html>
<head>
<title> SIC: Feedback </title>
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
  <li class="right"><a href="home.php">Sign out</a></li>
  <li class="right" style="background-color: #006CFF"><a href="#">Student</a></li>
</ul>
</div>
<div class="main">
  <div class="side main2">

  <a href="student.php"> <button class="side_button" >  Personal Details </button></a><br>
  <button class="side_button" style="background-color: #006CFF"> <a href="#"> Feedback </button></a><br>
  <a href="sem_reg.php"> <button class="side_button">  Semester Registration </button></a><br>
  <a href="result.php"> <button class="side_button">  Semester Result </button></a><br>
  <a href="fee.php"> <button class="side_button">  Fee Payment </button></a><br>

  </div>
  <div class="article main2">
  <form action="#">
    <div class="element">
  <label for="subject" class="lab">Subject:</label>
  <select name="subject">
    <option value="it601">IT601</option>
    <option value="it602">IT602</option>
    <option value="it603">IT603</option>
    <option value="it604">IT604</option>
    <option value="it605">IT605</option>
  </select>

</div>
<div class="element">Contents & Organization</div>
<div class="feed">
  <label for="q1">(i) Relevance of the subject to the academic program:</label><br>
  <input type="radio" name="q1" value="5" ><span style="color: green"><b>Excellent</b></span>
  <input type="radio" name="q1" value="4" ><span style="color: blue"><b>Very Good</b></span>
  <input type="radio" name="q1" value="3" ><span style="color: brown"><b>Good</b></span>
  <input type="radio" name="q1" value="2" ><span style="color: grey"><b>Satisfactory</b></span>
  <input type="radio" name="q1" value="1" ><span style="color: red"><b>Average</b></span>
  <br>
  <label for="q2">(ii) Coverage of the subject:</label><br>
  <input type="radio" name="q2" value="5" ><span style="color: green"><b>Excellent</b></span>
  <input type="radio" name="q2" value="4" ><span style="color: blue"><b>Very Good</b></span>
  <input type="radio" name="q2" value="3" ><span style="color: brown"><b>Good</b></span>
  <input type="radio" name="q2" value="2" ><span style="color: grey"><b>Satisfactory</b></span>
  <input type="radio" name="q2" value="1" ><span style="color: red"><b>Average</b></span>
  <br>
  <label for="q3">(iii) Contents of the syllabus towards the present day need:</label><br>
  <input type="radio" name="q3" value="5" ><span style="color: green"><b>Excellent</b></span>
  <input type="radio" name="q3" value="4" ><span style="color: blue"><b>Very Good</b></span>
  <input type="radio" name="q3" value="3" ><span style="color: brown"><b>Good</b></span>
  <input type="radio" name="q3" value="2" ><span style="color: grey"><b>Satisfactory</b></span>
  <input type="radio" name="q3" value="1" ><span style="color: red"><b>Average</b></span>
  <br>
</div>
<div class="element">Attendance & Discipline</div>
<div class="feed">
  <label for="q4">(i) Regularity of the class:</label><br>
  <input type="radio" name="q4" value="5" ><span style="color: green"><b>Excellent</b></span>
  <input type="radio" name="q4" value="4" ><span style="color: blue"><b>Very Good</b></span>
  <input type="radio" name="q4" value="3" ><span style="color: brown"><b>Good</b></span>
  <input type="radio" name="q4" value="2" ><span style="color: grey"><b>Satisfactory</b></span>
  <input type="radio" name="q4" value="1" ><span style="color: red"><b>Average</b></span>
  <br>
  <label for="q5">(ii) Uniformity of the syllabus coverage throughout the semester:</label><br>
  <input type="radio" name="q5" value="5" ><span style="color: green"><b>Excellent</b></span>
  <input type="radio" name="q5" value="4" ><span style="color: blue"><b>Very Good</b></span>
  <input type="radio" name="q5" value="3" ><span style="color: brown"><b>Good</b></span>
  <input type="radio" name="q5" value="2" ><span style="color: grey"><b>Satisfactory</b></span>
  <input type="radio" name="q5" value="1" ><span style="color: red"><b>Average</b></span>
  <br>
  <label for="q6">(iii) Number of classes taken:</label><br>
  <input type="radio" name="q6" value="5" ><span style="color: green"><b>Excellent</b></span>
  <input type="radio" name="q6" value="4" ><span style="color: blue"><b>Very Good</b></span>
  <input type="radio" name="q6" value="3" ><span style="color: brown"><b>Good</b></span>
  <input type="radio" name="q6" value="2" ><span style="color: grey"><b>Satisfactory</b></span>
  <input type="radio" name="q6" value="1" ><span style="color: red"><b>Average</b></span>
  <br>
</div>
<div class="element">Delivery of Lectures & Tutorials</div>
<div class="feed">
  <label for="q7">(i) Teaching techniques adopted by the teacher:</label><br>
  <input type="radio" name="q7" value="5" ><span style="color: green"><b>Excellent</b></span>
  <input type="radio" name="q7" value="4" ><span style="color: blue"><b>Very Good</b></span>
  <input type="radio" name="q7" value="3" ><span style="color: brown"><b>Good</b></span>
  <input type="radio" name="q7" value="2" ><span style="color: grey"><b>Satisfactory</b></span>
  <input type="radio" name="q7" value="1" ><span style="color: red"><b>Average</b></span>
  <br>
  <label for="q8">(ii) Student teacher interaction in the class:</label><br>
  <input type="radio" name="q8" value="5" ><span style="color: green"><b>Excellent</b></span>
  <input type="radio" name="q8" value="4" ><span style="color: blue"><b>Very Good</b></span>
  <input type="radio" name="q8" value="3" ><span style="color: brown"><b>Good</b></span>
  <input type="radio" name="q8" value="2" ><span style="color: grey"><b>Satisfactory</b></span>
  <input type="radio" name="q8" value="1" ><span style="color: red"><b>Average</b></span>
  <br>
  <label for="q9">(iii) Availability of teacher to address individual doubts:</label><br>
  <input type="radio" name="q9" value="5" ><span style="color: green"><b>Excellent</b></span>
  <input type="radio" name="q9" value="4" ><span style="color: blue"><b>Very Good</b></span>
  <input type="radio" name="q9" value="3" ><span style="color: brown"><b>Good</b></span>
  <input type="radio" name="q9" value="2" ><span style="color: grey"><b>Satisfactory</b></span>
  <input type="radio" name="q9" value="1" ><span style="color: red"><b>Average</b></span>
  <br>
</div>
<div class="element">Evaluation Process</div>
<div class="feed">
  <label for="q10">(i) Sufficiency of class tests: </label><br>
  <input type="radio" name="q10" value="5" ><span style="color: green"><b>Excellent</b></span>
  <input type="radio" name="q10" value="4" ><span style="color: blue"><b>Very Good</b></span>
  <input type="radio" name="q10" value="3" ><span style="color: brown"><b>Good</b></span>
  <input type="radio" name="q10" value="2" ><span style="color: grey"><b>Satisfactory</b></span>
  <input type="radio" name="q10" value="1" ><span style="color: red"><b>Average</b></span>
  <br>
  <label for="q11">(ii) Numbers of assignments provided: </label><br>
  <input type="radio" name="q11" value="5" ><span style="color: green"><b>Excellent</b></span>
  <input type="radio" name="q11" value="4" ><span style="color: blue"><b>Very Good</b></span>
  <input type="radio" name="q11" value="3" ><span style="color: brown"><b>Good</b></span>
  <input type="radio" name="q11" value="2" ><span style="color: grey"><b>Satisfactory</b></span>
  <input type="radio" name="q11" value="1" ><span style="color: red"><b>Average</b></span>
  <br>
  <label for="12">(iii) Standard of Mid-Semester Assessment:</label><br>
  <input type="radio" name="q12" value="5" ><span style="color: green"><b>Excellent</b></span>
  <input type="radio" name="q12" value="4" ><span style="color: blue"><b>Very Good</b></span>
  <input type="radio" name="q12" value="3" ><span style="color: brown"><b>Good</b></span>
  <input type="radio" name="q12" value="2" ><span style="color: grey"><b>Satisfactory</b></span>
  <input type="radio" name="q12" value="1" ><span style="color: red"><b>Average</b></span>
  <br>
</div>
  </form>
  <div style="margin: auto; width:60px; margin-top: 4px; ">
  <button type="submit" name="submit" style="border-radius: 5px; padding: 5px; font-size: 20px; background-color: #0088FF; color:white;">Submit</button>
  </div>
  </div>
</div>

</div>
</body>
</html>
