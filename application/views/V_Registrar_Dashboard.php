<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>

<html>

<body>

    <span>Welcome, <?= $registrar_info['last_name'] . ', ' . $registrar_info['first_name'] ?></span><br><br>

    <form action="/C_Registrar_Dashboard/studentUpload" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
    </form>

    <br><br>
    <form action="/C_Registrar_Dashboard/logout" method="post">
        <input type="submit" value="Logout">
    </form>

</body>

</html>