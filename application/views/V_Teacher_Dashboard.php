<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>

<html>

<body>

    <span>Welcome, <?= $teacher_info['last_name'] . ', ' . $teacher_info['first_name'] ?></span><br><br>

    <table>
        <thead>
            <th>Subject</th>

            <th>Room</th>

            <th>Schedule</th>
        </thead>
        <tbody>
            <?php foreach ($schedule_list as $row): ?>
            <tr>
                <td><?= $row['subject_name'] ?></td>
                <td><?= $row['room_remarks'] ?></td>
                <td><?= $row['schedule_remarks'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <br><br>
    <form action="/C_Teacher_Dashboard/logout" method="post">
        <input type="submit" value="Logout">
    </form>

</body>

</html>