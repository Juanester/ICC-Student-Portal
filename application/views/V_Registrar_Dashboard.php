<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>

<html>

<body>

    <span>Welcome, <?= $registrar_info['last_name'] . ', ' . $registrar_info['first_name'] ?></span><br><br>

    <br><br>
    <form action="/C_Registrar_Dashboard/logout" method="post">
        <input type="submit" value="Logout">
    </form>

</body>

</html>