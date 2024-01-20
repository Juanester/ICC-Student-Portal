<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>

<html>

<body>

    <span>Welcome, <?= $registrar_info['last_name'] . ', ' . $registrar_info['first_name'] ?></span><br><br>

    <span><?= !empty($message) ? $message : '' ?></span>
    <form action="/C_Registrar_Dashboard/studentUpload" method="post" enctype="multipart/form-data">
        Select Excel to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Excel" name="submit">
    </form>

    <br><br>
    <form action="/C_Registrar_Dashboard/logout" method="post">
        <input type="submit" value="Logout">
    </form>

</body>

</html>