<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
<style>
body {
  background-image: url("pictures/pexels-pixabay-278918.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}h1 {
  text-align: center;
  font-size:50px;
  
}
p { text-align: center;
	font-size:30px;
}
</style>
	<title>My website</title>
</head>
<body>

	<a  href="logout.php">Logout</a>
	<h1 style="color:blue;"> Welcome to Bored Games</h1>

	<br>
<p>	 Hello, <?php echo $user_data['user_name']; ?>
</p>
</body>
</html>