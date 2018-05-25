<html>
<?php
require("homepage.php");
?>
<form method="POST" action="../update.php">
Enter updated information of the subject:<br>
Name<input type="text" name="name">
<br>
<p>
Description<input type="radio" name="info" value="description">
<br></p>
<p>
Units<input type="radio" name="info" value="units">
<br></p>
<p>
<input type="text" name="updated">
<br></p>
<input type="submit" value="Enter">
<input type="reset" value="Clear">
</form>
</html>