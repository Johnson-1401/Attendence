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
			background-color: gray;
			padding: 1px;
		}
		.container2{
			display: flex;
			height: 570px;

		}
		.options{
			flex-basis: 15%;
			background-color: violet;
			flex-direction: column;
		}
		.register{
			flex-basis: 85%;
			 text-align: center;
			 background-image: url("capture1.png");
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
		}
		li{
			margin-top: -5px;
			margin-left: -36px;
			list-style-type: none;
			border: 1px solid darkviolet;
			padding: 11px;
			border-radius: 6px;
			}
		a{
			text-decoration: none;
			color: black;
			font-size: 23px;

			}
		#wid{
			width: 190px;
			padding: 5px;
			border-radius: 5px;
		}
		#vid{
			width: 201px;
			padding: 5px;
			border-radius: 5px;
		}
		#sid{
			padding: 5px 7px;
			border-radius: 5px;
			background-color: skyblue;
		}
	</style>
</head>
<body style="background-image: url('capture1.png');background-repeat: no-repeat;background-size: 100% 570px;">
<div class="container">
	<div class="header"><h2>" ATTENDANCE SYSTEM "</h2></div>
<div class="container2">
<div class="options"><ul>
<li><a href="my_details.php">My Details</a></li>
<li><a href="student_attandance.php">Attendance</a></li>
<li><a href="student_view_attandance.php">view Attendance</a></li>
<li><a href="logout.php">Logout</a></li></ul>
</div>
<center>
<h2>~ ~  Student's Profile ~ ~</h2>
<?php 
$con=mysqli_connect('localhost','root','','attendance');
$result=mysqli_query($con,"SELECT * FROM student WHERE id='1' ;");
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
</center>
</body>
</html>