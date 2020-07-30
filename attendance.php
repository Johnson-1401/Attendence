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
<h2>~ ~ Mark Attendance ~ ~</h2>
<?php 
$con=mysqli_connect('localhost','root','','attendance');
$result=mysqli_query($con,"SELECT * FROM attend WHERE class='2nd year';");
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