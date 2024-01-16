<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>

<html>

<body>

    <form action=/C_Employee_Management/employeeCreate method="post" target="_self">

        <label for="employee_id">Employee:</label><br>
        <select id="employee_id" name="employee_id">
            <option value="" hidden>-</option>
            <?php foreach ($employee_list as $option) : ?>
            <option value="<?= $option['employee_id'] ?>">
                <?= $option['employee_number'] . ' - ' . $option['first_name'] . ' ' . $option['last_name'] ?>
            </option>
            <?php endforeach; ?>
        </select><br>
        <label for="access_role_id">Access Roles:</label><br>
        <select id="access_role_id" name="access_role_id">
            <option value="" hidden>-</option>
            <?php foreach ($access_role_list as $option) : ?>
            <option value="<?= $option['access_role_id'] ?>">
                <?= $option['access_role_id'] . ' - ' . $option['access_role_name'] ?>
            </option>
            <?php endforeach; ?>
        </select><br>
        <label for="password">Password</label><br>
        <input type="password" id="password" name="password" value=""><br><br>

        <input type="submit" value="Create">
    </form>

</body>

</html>