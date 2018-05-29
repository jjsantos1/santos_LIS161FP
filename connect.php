<?php
//Connection to MySQL server
$hostname = 'sql113.byethost.com';
$username = 'b16_22153224';
$password = 'atinglat';
$database = 'b16_22153224_subject';

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
	$link = mysqli_connect($hostname,$_SESSION['username'],$_SESSION['password'],$database);
	
    if($link) {
        header('location:homepage.php');          
        }
		else{
			header('location:login.php');
		}
}
$link = mysqli_connect($hostname,$username,$password,$database);
?>