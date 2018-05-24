<?php
include_once("connect.php");
require("homepage.html");

$name = $_POST['name'];
$description = $_POST['description'];
$units = $_POST['units'];

//Insert record
$query=("INSERT INTO subject(name, description, units) VALUES ('$name','$description','$units')");

print "$name has been successfully inserted.";
mysqli_query($link,$query);
?>