<?php
session_start();
?>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="gga.css">
</head>
<body>
<a href="homepage.php">Home</a> <br />
<?php
include("connect.php");
 
if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;

    if($link) {
        header('location:homepage.php');          
        }
    }
else {
?>
<div>
<p>Enter your login credentials here.</p>
<form method="POST" action="">
Username<input type="text" name="username"><br>
Password<input type="text" name="password">
<input type="submit" name="submit" value="Enter">
<input type="reset" name= "reset" value="Clear">
</form>
</div>
<?php
}
?>
</body>
</html>