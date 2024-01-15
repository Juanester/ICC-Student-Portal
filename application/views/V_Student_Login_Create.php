
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>

<html>

<body>

<form action=/C_Student_Login/studentLoginCreate method="post" target="_self">

  <label for="student_number">Student Number:</label><br>
  <input type="text" id="student_number" name="student_number" value=""><br>

  <label for="firstname">First Name:</label><br>
  <input type="text" id="firstname" name="firstname" value=""><br>

  <label for="lastname">Last Name:</label><br>
  <input type="text" id="lastname" name="lastname" value=""><br>

  <label for="email_address">Email Address:</label><br>
  <input type="text" id="email_address" name="email_address" value=""><br>

  <label for="contact_number">Contact Number:</label><br>
  <input type="text" id="contact_number" name="contact_number" value=""><br>

  <label for="password">Password</label><br>
  <input type="password" id="password" name="password" value=""><br><br>

  <input type="submit" value="Submit">
</form> 

</body>

</html>