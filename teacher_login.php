<?php
session_start(); // Starting Session
$error = ''; // Variable To Store Error Message
if (isset($_POST['submit']))
 {
if (empty($_POST['name']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else{
// Define $username and $password
$username = $_POST['name'];
$password = $_POST['password'];
// mysqli_connect() function opens a new connection to the MySQL server.
$conn = mysqli_connect("localhost", "root", "", "Attendance");
// SQL query to fetch information of registerd users and finds user match.
$query = "SELECT name, password from teacher where name=? AND password=? LIMIT 1";
// To protect MySQL injection for Security purpose
$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$stmt->bind_result($username, $password);
$stmt->store_result();
if($stmt->fetch()) //fetching the contents of the row {
$_SESSION['login_user'] = $username; // Initializing Session
header("location: student_profile.php"); // Redirecting To Profile Page
}
mysqli_close($conn); // Closing Connection
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Automated Attendance System</title>
	<style type="text/css">
		body{
		background-image: url("Capture3.png");
		background-repeat: no-repeat;
		background-size: 1400px 700px;
	}
		form{
			position: absolute;
			top: 25%;
			left: 37%;
		    padding: 50px 60px 50px 60px;
			background: black;
			border-radius: 20px;
		
	}
	#name{
		border: none;
		background: transparent;
		color: white;
		border-bottom: 1px solid white;
		padding: 10px;
		margin-bottom: 10px;
		
		width: 180px;
	</style>
</head>
<body>
<center style="font-size: 25px;margin-top: 30px">" ATTENDANCE SYSTEM "</center><br>
<a style="font-size: 20px" href="home.html">back</a>
<center>

<form action="" method="post">
	<h2 style="color: white;font-size: 25px"> ~ ~ Teacher Login ~ ~</h2><br>
<input type="text" name="name" placeholder=" Enter your Name"/ id="name"><br><br>
<input type="password" name="password" placeholder=" Enter your Password "/ id="name"><br><br>
<input type="submit" name="submit" value="Login" style="padding: 5px 8px;border-radius: 3px;background-color: skyblue">
<span><?php echo $error; ?></span>
</form>
</div>
</body>
</html>
