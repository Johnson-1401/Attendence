<?php
session_start(); // Starting Session
?>
 <!DOCTYPE html>
<html>
<head>
	<title>Automated Attendance System</title>
	<style type="text/css">
		.container{
			width: 100%;
			height: 100%;
		}
		.header{
			flex-basis: 100%;
			text-align: center;
			background-color: black;
			padding: 1px;
			color: white;
		}
		.container2{
			display: flex;
			height: 570px;

		}
		.items{
			flex-basis: 15%;
			background-color: gray;
			flex-direction: column;
		}
		.login{
			flex-basis: 85%;
			 text-align: center;
			 background-image: url("capture6.png");
			 background-repeat: no-repeat;
			 background-size: 100% 570px;
		}
		form{
			top: 25%;
			left: 40%;
			position: absolute;
			border: 2px solid black;
			padding: 30px;
			border-radius: 8px;
			background-color: lightgray;
		}
		li{
			margin-top: -5px;
			margin-left: -36px;
			list-style-type: none;
			border: 1px solid black;
			padding: 11px;
			border-radius: 6px;
			}
		a{
			text-decoration: none;
			color: white;
			font-size: 23px;

			}
		#wid{
			width: 190px;
			padding: 5px;
			border-radius: 5px;
		}
		#sid{
			padding: 5px 7px;
			border-radius: 5px;
			background-color: skyblue;
		}
	</style>
	</style>
</head>
<body><div class="container">
	<div class="header">
<h2>" ATTENDANCE SYSTEM "</h2></div>
<div class="container2">
	<div class="items">
		<ul><li>
<li><a href="admin_page.php">Add Teacher</a></li>
<li><a href="add_student.php">Add Student</a></li>
<li><a href="view_teacher.php">View Teacher</a></li>
<li><a href="view_student.php">View Student</a></li>
<li><a href="view_attendance.php">View Attendance</a></li>
<li><a href="logout.php"> Logout</a></li></ul></div>

<div class="login">
<form method="post">
	<h2>~ ~  View Attendance ~ ~</h2><br>
<center>
<input type="text" name="teacher" placeholder="Enter The Year"  id="wid">	
</center><br><br>
Enter The Date :
<br><br>
<input type="date" name="dat" id="wid"><br><br>
<input type="submit" id="sid" name="submit" value="Search">
</center>
</form>
</div>
</div>
</div>
</body>
</html>
<?php 

if(isset($_POST['submit'])){
$_SESSION["class"]=$_POST['teacher'];
$_SESSION["attend"]=$_POST['dat'];
}
 ?>

<?php 

if (isset($_POST['submit']))
 {
if (empty($_POST['teacher']) || empty($_POST['dat'])) {
$error = "Username or Password is invalid";
}
else{
header("location:att.php"); // Redirecting To Profile Page
}


mysqli_close($conn); // Closing Connection
}
?>