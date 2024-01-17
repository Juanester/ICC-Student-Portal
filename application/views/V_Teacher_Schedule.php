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
    <link rel="stylesheet" href="css\V_Teacher_Schedule.css">
</head>
<body>

    <span>Welcome, <?= $teacher_info['last_name'] . ', ' . $teacher_info['first_name'] ?></span><br><br>

    <table>
        <thead>
            <th>Student Number</th>
            <th>Student Name</th>
            <th>Year Level</th>
            <th>Section Name</th>
            <th>Status</th>
            <th>Preliminary Grade</th>
            <th>Midterm Grade</th>
            <th>Finals Grade</th>
            <th>Grade</th>
            <th>Remarks</th>
        </thead>
        <tbody>
            <?php foreach ($teacher_student_schedule_list as $row): ?>
            <tr>
                <input type="hidden" name=student_schedule_id value="<?= $row['student_schedule_id'] ?>">
                <td><?= $row['student_number'] ?></td>
                <td><?= $row['student_name'] ?></td>
                <td><?= $row['year_level'] == 1 ? '1st Year' : ($row['year_level'] == 2 ? '2nd Year' : ($row['year_level'] == 3 ? '3rd Year' : '4th Year')) ?>
                </td>
                <td><?= $row['section_name'] ?></td>
                <td></td>
                <td><input type="number" name="prelim_grade[]" value="<?= $row['prelim_grade'] ?>">
                <td><input type="number" name="midterm_grade[]" value="<?= $row['midterm_grade'] ?>">
                <td><input type="number" name="final_grade[]" value="<?= $row['final_grade'] ?>">
                <td><input type="number" name="grade[]" value="<?= $row['grade'] ?>">
                <td>
                    <select type="" name="grade_remarks[]" value="<?= $row['grade_remarks_id'] ?>">
                        <option value="" hidden>-</option>
                        <?php foreach ($grade_remarks_list as $option) : ?>
                        <option value="<?= $option['grade_remarks_id'] ?>"
                            <?= $row['grade_remarks_id'] == $option['grade_remarks_id'] ? 'selected' : ''?>>
                            <?= $option['grade_remarks_id'] . ' - ' . $option['grade_remarks_name'] ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                </td>

            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <br><br>
        <form  action="/C_Teacher_Dashboard/" method="post">
                <input class="back"  type="submit" value="Back">
            </form>
        <form  action="/C_Teacher_Dashboard/logout" method="post">
                <input class="logout"  type="submit" value="Logout">
            </form>
    
</body>

</html>