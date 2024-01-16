<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>

<html>

<body>

    <span>Welcome, <?= $teacher_info['last_name'] . ', ' . $teacher_info['first_name'] ?></span><br><br>

    <table>
        <thead>
            <th></th>
            <th>Subject</th>
            <th>Room</th>
            <th>Schedule</th>
            <th>Year Level</th>
            <th>Semester</th>
            <th>Section Name</th>
        </thead>
        <tbody>
            <?php foreach ($schedule_list as $row): ?>
            <tr>
                <td class="">
                    <a href="/C_Teacher_Dashboard/schedule/?schedule_id=<?= $row['schedule_id'] ?>">Edit</a>
                </td>
                <td><?= $row['subject_name'] ?></td>
                <td><?= $row['room_remarks'] ?></td>
                <td><?= $row['schedule_remarks'] ?></td>
                <td><?= $row['year_level'] ?></td>
                <td><?= $row['semester'] ?></td>
                <td><?= $row['section_name'] ?></td>
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