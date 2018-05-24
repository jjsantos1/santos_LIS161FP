<?php
$username = $_POST['username'];
$password = $_POST['password'];

//Connection to MySQL server
$link = mysqli_connect("localhost","jjsantos1","","subject");
/*if ($link){
	echo 'You are connected to MySQL.';
}
else{
	echo "Couldn't connect to MySQL.";
}*/
?>