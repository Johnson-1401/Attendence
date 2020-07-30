<?php
session_start(); // Starting Session
$error = ''; // Variable To Store Error Message
if (isset($_POST['submit']))
 {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else{
// Define $username and $password
$username = $_POST['username'];
$password = $_POST['password'];
// mysqli_connect() function opens a new connection to the MySQL server.
$conn = mysqli_connect("localhost", "root", "", "Attendance");
// SQL query to fetch information of registerd users and finds user match.
$query = "SELECT username, password from admin where username=? AND password=? LIMIT 1";
// To protect MySQL injection for Security purpose
$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$stmt->bind_result($username, $password);
$stmt->store_result();
if($stmt->fetch()) //fetching the contents of the row {
$_SESSION['login_user'] = $username; // Initializing Session
header("location: admin_page.php"); // Redirecting To Profile Page
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
		background-image: url("19.jpg");
		background-repeat: no-repeat;
		background-size: 1400px 700px;
		}
		#wid{
			padding: 6px 10px;
			border-radius: 6px 10px;

		}
		
	</style>
</head>
<body>
<center>" ATTENDANCE SYSTEM "</center><hr>
<a href="home.html" style="font-size:20px">back</a>
<center>
<h2 style="font-size: 30px"> ~ ~ Admin Login ~ ~</h2>
<form action="" method="post">
<input type="text" name="username" placeholder=" Enter your Name"/ id="wid"><br><br>
<input type="password" name="password" placeholder=" Enter your Password "/ id="wid"><br><br>
<input type="submit" name="submit" value="Login" id="wid">
<span><?php echo $error; ?></span>
</form>
</div>
</body>
</html>