<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="<?= base_url(); ?>">

    <link rel="stylesheet" href="lib/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="lib/tempusdominus-bootstrap-4/5.1.2/css/tempusdominus-bootstrap-4.min.css" />
    <link rel="stylesheet" href="lib/fontawesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="lib/bootstrap-4-navbar/4.3.1/css/bootstrap-4-navbar.min.css">
    <link rel="stylesheet" href="lib/handsontable/7.1.0/css/handsontable.full.min.css">
    <link rel="stylesheet" href="css/Employee_Login.css?<?= filemtime('css/Employee_Login.css'); ?>">
</head>

<body>

    <header>
        <h1>Immaculada Concepcion College</h1>
    </header>

    <div class="container">
        <main>
            <!-- Insert text "Employee portal account" -->
            <div class="login">
                <h2>Employee Portal Account</h2>
                <span><?= !empty($message) ? $message : '' ?></span>
                <form action="/C_Employee_Login/employeeLogin" method="post">
                    <label for="employee_number">Employee Number</label><br>
                    <input type="text" id="employee_number" name="employee_number" value=""><br>
                    <label for="password">Password</label><br>
                    <input type="password" id="password" name="password" value=""><br><br>
                    <div class="login_button_container">
                        <!-- Center the login button -->
                        <input class="login_button" type="submit" value="Login">
                    </div>
                </form>
            </div>
        </main>
    </div>
</body>

</html>
