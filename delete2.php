<?php
session_start();
?>
<html>
<?php
require("homepage.php");
?>
<form method="POST" action="../delete.php">
Enter subject to delete: <input type="text" name="name">
<br>
<input type="submit" value="Enter">
<input type="reset" value="Clear">
</form>
</html>