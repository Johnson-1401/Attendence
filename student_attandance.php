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
<body>
<div class="container">
	<div class="header"><h2>" ATTENDANCE SYSTEM "</h2></div>
<div class="container2">
<div class="options"><ul>
<li><a href="my_details.php">My Details</a></li>
<li><a href="student_attandance.php">Attendance</a></li>
<li><a href="student_view_attandance.php">view Attendance</a></li>
<li><a href="logout.php">Logout</a></li></ul>
</div>
<div class="register">
	<form method="post">
		<h1>~ My Attandance ~</h1>
	<input type="text" name="id" placeholder="ID" id="wid"><br><br>
	<input type="text" name="class" placeholder="Class" id="wid"><br><br>
	<input type="text" name="name" placeholder="Name" id="wid"><br><br>
	<select name='att' id="vid">
	    <option values='select'>Select</option>
	    <option values='Present'>Present</option>
        <option values='Absent'>Absent</option>
    </select><br><br> 
    <button type="Submit" name="go" id="sid">Submit</button></form>
</div></div></div>
</body>
</html>
<?php
$connect=mysqli_connect('localhost','root','','attendance');
if(isset($_POST['go']))
{
$a=date('Y-m-d H:i:s');
$b=$_POST['id'];
$c=$_POST['class'];
$d=$_POST['name'];
$e=$_POST['att'];
$k="INSERT INTO attend (`dates`,`id`,`class`,`name`,`attendance`) values ('$a','$b','$c','$d','$e')";
$l=mysqli_query($connect,$k);
}
?>