 <!DOCTYPE html>
<html>
<head>
	<title>Automated Attendance System</title>
	<style type="text/css">
		a{
			padding: 5px;
			color: black;
			font-size: 20px;

		}
		ul{
			background-color: gray;
			padding: 10px;
		}
		h2{
			margin-top: -69px;
		}
		hr{
			
		}
		
	</style>
</head>
<body style="background-color: lightgray">
<center style="font-size: 20px">" ATTENDANCE SYSTEM "</center><ul>
<a href="student_profile.php">View Student</a>
<a href="attendance.php">Attendance</a>
<a href="logout.php">Logout</a><br></ul><br>
<center>
	<h2>~ ~ Student's Profile ~ ~</h2>
	<?php 
$con=mysqli_connect('localhost','root','','attendance');
$result=mysqli_query($con,"SELECT * FROM student WHERE classteacher='Mr.kumar' ;");
echo"<table border='1'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Address</th>
<th>Contect No</th>
<th>Email Id</th>
<th>Gender</th>
<th>Date of Birth</th>
<th>Class</th>
<th>Class Teacher</th>
</tr>";
while($row=mysqli_fetch_array($result))
{
	echo"<tr>";
	echo"<td>".$row['id']."</td>";
	echo"<td>".$row['name']."</td>";
    echo"<td>".$row['address']."</td>";
	echo"<td>".$row['contect']."</td>";
	echo"<td>".$row['email']."</td>";
	echo"<td>".$row['gender']."</td>";
	echo"<td>".$row['dob']."</td>";
	echo"<td>".$row['class']."</td>";
	echo"<td>".$row['classteacher']."</td>";
	echo"<tr>";
}
echo"<table>";
mysqli_close($con);
 ?>
</body>
</html>