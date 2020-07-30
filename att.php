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
<body style=" background-image: url('capture6.png');background-repeat: no-repeat;background-size: 100% 700px;
			 text-align: center;">
	<div class="container">
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

<center>
<h2>~ ~  View Attendance ~ ~</h2><br><br>
<center>
<?php
$con=mysqli_connect('localhost','root','','attendance');
$result=mysqli_query($con,"SELECT * FROM attend");
$a=$_SESSION["class"];
$b= $_SESSION["attend"];
?>
<?php 
$con=mysqli_connect('localhost','root','','attendance');
$result=mysqli_query($con,"SELECT * FROM attend WHERE class='$a' && dates='$b';");
echo"<table border='1'>
<tr>
<th>DATE</th>
<th>ID</th>
<th>Class</th>
<th>Name</th>
<th>Attendance</th>
</tr>";
while($row=mysqli_fetch_array($result))
{
	echo"<tr>";
	echo"<td>".$row['dates']."</td>";
	echo"<td>".$row['id']."</td>";
    echo"<td>".$row['class']."</td>";
	echo"<td>".$row['name']."</td>";
	echo"<td>".$row['attendance']."</td>";
	echo"<tr>";
}
echo"<table>";
mysqli_close($con);
 ?>
</center>
</body>
</html>