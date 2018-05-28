<?php
session_start();
?>
<html>
<?php
require("homepage.php");
?>
<form method="POST" action="../insert.php">
Name<input type="text" name="name">
<br>
<p>
Description<input type="text" name="description">
<br></p>
<p>
Units<input type="text" name="units">
<br></p>
<input type="submit" value="Enter">
<input type="reset" value="Clear">
</form>
</html>