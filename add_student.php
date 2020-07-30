<?php
$connect=mysqli_connect('localhost','root','','attendance');
if(isset($_POST['go']))
{
$b=$_POST['name'];
$d=$_POST['address'];
$e=$_POST['contect'];
$f=$_POST['email'];
$g=$_POST['gender']; 
$h=$_POST['DOB'];
$i=$_POST['class'];
$j=$_POST['teacher'];
$k="INSERT INTO student (`name`,`address`,`contect`,`email`,`gender`,`dob`,`class`,`classteacher`)
values ('$b','$d','$e','$f','$g','$h','$i','$j')";
$l=mysqli_query($connect,$k); }
 ?>
<!DOCTYPE html>
 <html>
  <head>
<title>Automated Attendance System</title> 
<style type="text/css">
	body{
		background-image: url("Capture.png");
		background-repeat: no-repeat;
		background-size: 1400px 700px;
	}
	ul,li{
		font-size: 22px;
		list-style-type: none;
		display: inline;
		padding: 10px 45px;
		background-color: black;

	}
	a{
		text-decoration: none;
		color: white;
	}
	form{
		
		    top: 15%;
			left: 35%;
			padding: 20px 120px 50px 120px;
			background-color: gray;
			position: absolute;
			font-size: 15px;
			border-radius: 6px;
	}
	#wid{
		width: 170px;
		border-radius: 4px;
		padding: 5px 8px;

	}
	#sid{
		padding: 4px 8px;
		border-radius: 3px;
		background-color: lightblue;
	}

</style>
</head> <body> <center style="font-size: 23px;font-weight: bold">" ATTENDANCE SYSTEM "</center><br>
	<ul>
 <li><a href="admin_page.php">Add Teacher</a> </li>
<li><a href="add_student.php">Add Student</a> </li>
<li><a href="view_teacher.php">View Teacher</a></li> 
<li><a href="view_student.php">View Student</a></li> 
<li><a href="view_attendance.php">View Attendance</a></li> 
<li><a href="logout.php">Logout</a></li></ul><br> 
<center>

<form method="post">
<h2 style="font-size: 30px">~ ~ Add Student ~ ~</h2> 
<input type="text" name="name" placeholder="Name" id="wid"><br><br>
<input type="text" name="address" placeholder="Address" id="wid"><br><br>
<input type="number" name="contect" placeholder="Contect No" id="wid"><br><br> 
<input type="text" name="email" placeholder="Email Id" id="wid"><br><br>
 GENDER: <input type="radio" name="gender" value="Male">male 
 <input type="radio" name="gender" value="Female">Female <br><br> 
 DOB:
 <input type="Date" name="DOB" placeholder="Date of Birth"><br><br>
 <input type="text" name="class" placeholder="Year" id="wid"><br><br> 
<input type="text"  name="teacher" placeholder="classteacher Name" id="wid"> <br><br>	
<button type="Submit" name="go" id="sid">Submit</button> 
</form> 
</body> 
</html>