<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>

<html>
<head>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <base href="<?= base_url(); ?>">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/Employee_D.css?<?= filemtime('css/Employee_D.css'); ?>">
<script>
  function passlength(){
    document.getElementById("password").maxLength = "12";

  }
</script>
</head>
<body>
<header>
  <h1>Immaculada Concepcion College</h1>
</header>
<main>
  <div class="logo">
    <img src="images\icc logo.webp" alt="logo">
  </div>
    <div class="login">
        <h2>CREATE STUDENT ACCOUNT</h2>  
        <form action=/C_Student_Management/studentCreate method="post" target="_self">
        <div class="inputdiv">
        <label for="student_id">Student:</label><br>
        <select id="student_id" name="student_id">
            <option value="" hidden>-</option>
            <?php foreach ($student_list as $option) : ?>
              <option value="<?= $option['student_id'] ?>">
                <?= $option['student_number'] . ' - ' . $option['first_name'] . ' ' . $option['last_name'] ?>
            </option>
            <?php endforeach; ?>
        </select><br>
        </div>
        <div class="inputdiv">
        <label for="password">Password</label><br>
        <input type="password" id="password" name="password" value="" maxlength="12" require><br><br>
        </div>
        <input class="create" type="submit" value="Create">
        </form>
  </div>
</main>
</body>

</html>

  