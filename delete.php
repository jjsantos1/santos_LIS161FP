<?php
session_start();
?>
<?php
include_once("connect.php");		
require("homepage.php");

$name = $_POST['name'];

//Insert record
$query=("DELETE FROM subject WHERE name='$name'");

print "$name has been successfully deleted.";
mysqli_query($link,$query);
?>