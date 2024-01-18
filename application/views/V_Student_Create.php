<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>

<html>
<head>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="<?= base_url(); ?>">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/Employee_D.css?<?= filemtime('css/Employee_D.css'); ?>">
</head>
<body>


            <main>
                <div class="logo">
                <img src="images\icc logo.webp" alt="logo">
            </div>





    <div class="login">
        <h2>CREATE STUDENT ACCOUNT</h2>   
        <form action=/C_Student_Management/studentCreate method="post" target="_self">
        <label for="student_id">Student:</label><br>
        <select class="text-gray-800" id="student_id" name="student_id">
            <option value="" hidden>-</option>
            <?php foreach ($student_list as $option) : ?>
            <option value="<?= $option['student_id'] ?>">
                <?= $option['student_number'] . ' - ' . $option['first_name'] . ' ' . $option['last_name'] ?>
            </option>
            <?php endforeach; ?>
        </select><br>
        <label for="password">Password</label><br>
        <input class="text-gray-800" type="password" id="password" name="password" value=""><br><br>

        <input class="login_button hover:bg-blue-200 hover:text-gray-900" type="submit" value="Create">
        </form>
    </div>
</main>
</body>

</html>