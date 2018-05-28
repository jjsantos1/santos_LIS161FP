<?php
session_start();
?>
<?php
include_once("connect.php");
require("homepage.php");

$name=$_POST['name'];
$updated = $_POST['updated'];
$info = $_POST['info'];

//Insert record
$query=("UPDATE subject SET $info='$updated' WHERE name='$name'");

print "Information has been updated successfully.<br>";
mysqli_query($link,$query);
?>