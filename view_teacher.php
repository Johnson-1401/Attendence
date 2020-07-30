<!DOCTYPE html>
<html>
<head>
	<title>Automated Attendance System</title>
	<style type="text/css">
		body{
			background-image: url("Capture2.png");
		background-repeat: no-repeat;
		background-size: 1400px 700px;
		}
		ul,li{
		font-size: 22px;
		list-style-type: none;
		display: inline;
		padding: 10px 45px;
		background-color:black;

	}
	a{
		text-decoration: none;
		color: white;
	}
	form{
		
		    top: 15%;
			left: 8%;
			padding: 20px 120px 50px 120px;
			color: black;
			position: absolute;
			font-size: 15px;
			border-radius: 6px;
	}
	#wid{
		width: 170px;
		background-color: lightgreen;
		border-radius: 4px;
		padding: 5px 8px;

	}
	#sid{
		padding: 4px 8px;
		border-radius: 3px;
		background-color: lightblue;
	}
	</style>
</head>
<body>
<center style="font-size: 22px">" ATTENDANCE SYSTEM "</center><br>
<ul>
 <li><a href="admin_page.php">Add Teacher</a> </li>
<li><a href="add_student.php">Add Student</a> </li>
<li><a href="view_teacher.php">View Teacher</a></li> 
<li><a href="view_student.php">View Student</a></li> 
<li><a href="view_attendance.php">View Attendance</a></li> 
<li><a href="logout.php">Logout</a></li></ul><br> 
<center>
<h2>~ ~  Teacher's Profile ~ ~</h2>
<center><br><br>
<?php 
$con=mysqli_connect('localhost','root','','attendance');
$result=mysqli_query($con,"SELECT * FROM teacher");
echo"<table border='1'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Subject</th>
<th>Address</th>
<th>Contect No</th>
<th>Email Id</th>
<th>Gender</th>
<th>Age</th>
<th>Password</th>
</tr>";
while($row=mysqli_fetch_array($result))
{
	echo"<tr>";
	echo"<td>".$row['id']."</td>";
	echo"<td>".$row['name']."</td>";
	echo"<td>".$row['subject']."</td>";
	echo"<td>".$row['address']."</td>";
	echo"<td>".$row['contect']."</td>";
	echo"<td>".$row['email']."</td>";
	echo"<td>".$row['gender']."</td>";
	echo"<td>".$row['age']."</td>";
	echo"<td>".$row['password']."</td>";
	echo"<tr>";
}
echo"<table>";
mysqli_close($con);
 ?>
</center>
</body>
</html>