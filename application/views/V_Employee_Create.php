<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<base href="<?= base_url(); ?>">
<!-- <link rel="stylesheet" href="css\V_Employee_Create.css">    -->
<link rel="stylesheet" href="css\V_Employee_Create.css?<?= filemtime('css\V_Employee_Create.css'); ?>">
<script src="https://cdn.tailwindcss.com"></script> 
</head>
<body>
<main>
    <header>
        <h1>Immaculada Concepcion College</h1> 
        <div class="redirect">
            <a href="/C_Student_Management/">Student Create ></a>
        </div>
        <div class="back">
        <a href="/C_MIS_Dashboard/">Back</a>
        </div>
    </header>
    
    <div class="logo">
        <img src="images\icc logo.webp" alt="logo"> 
    </div>

    <div class="login">
    <form action=/C_Employee_Management/employeeCreate method="post" target="_self">
    <h2>CREATE EMPLOYEE ACCOUNT</h2>

    <div class="inputdiv">
    <label for="employee_id" >Employee:</label><br>
    <select class="text-gray-800" id="employee_id" name="employee_id">
        <option value="" hidden>-</option>
        <?php foreach ($employee_list as $option) : ?>
        <option value="<?= $option['employee_id'] ?>">
        <?= $option['employee_number'] . ' - ' . $option['first_name'] . ' ' . $option['last_name'] ?>
        </option>
        <?php endforeach; ?>
    </select><br>
    </div>

    <div class="inputdiv">
    <label for="access_role_id">Access Roles:</label><br>
    <select class="text-gray-800" id="access_role_id" name="access_role_id">
        <option value="" hidden>-</option>
        <?php foreach ($access_role_list as $option) : ?>
        <option value="<?= $option['access_role_id'] ?>">
        <?= $option['access_role_id'] . ' - ' . $option['access_role_name'] ?>
        </option>
        <?php endforeach; ?>
    </select><br>
    </div>

    <div class="inputdiv">
        <label for="password" class="block text-base">Password</label>
        <input type="password" id="password" name="password" value=""><br><br>
    </div>        

    <input class="hover:bg-blue-200 hover:text-gray-800" type="submit" value="Create">    
    </form>
    </div>
    </div>

    </div>
    </div>

</body>

</html>