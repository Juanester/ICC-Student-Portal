
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>

<html>

<body>

<form action="C_Student_Login/student_login" method="post">
  <label for="student_id">Student ID</label><br>
  <input type="text" id="student_id" name="student_id" value=""><br>
  <label for="password">Password</label><br>
  <input type="password" id="password" name="password" value=""><br><br>
  <input type="submit" value="Submit">
</form> 

</body>

</html>