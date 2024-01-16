<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>

<html>

<body>

    <form action=/C_Student_Management/studentCreate method="post" target="_self">

        <label for="student_id">Student:</label><br>
        <select id="student_id" name="student_id">
            <option value="" hidden>-</option>
            <?php foreach ($student_list as $option) : ?>
            <option value="<?= $option['student_id'] ?>">
                <?= $option['student_number'] . ' - ' . $option['first_name'] . ' ' . $option['last_name'] ?>
            </option>
            <?php endforeach; ?>
        </select><br>
        <label for="password">Password</label><br>
        <input type="password" id="password" name="password" value=""><br><br>

        <input type="submit" value="Create">
    </form>

</body>

</html>