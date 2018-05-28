<?php
session_start();
?>
<?php
include_once("connect.php");
require("homepage.php");

$name = $_POST['name'];

//Search record
$query=("SELECT * FROM subject WHERE name='$name'");

$result=mysqli_query($link,$query);
$num_rows=mysqli_num_rows($result);
echo '<br>';
print $num_rows." records.<br>";

print "<table border=\"1\">\n";
while ($a_row = mysqli_fetch_row($result)){
	print "<tr>\n";
	foreach($a_row as $field){
		print "\t<td>".$field."</td>\n";
	}
	print "</tr>\n";
}
print "</table>\n";
?>