<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>

<html>

<body>
    <span>Welcome, <?= $teacher_info['last_name'] . ', ' . $teacher_info['first_name'] ?></span><br><br>

    <label>Subject</label><br>
    <input type="text" value="<?= $schedule_info['subject_name'] ?>">

    <form action="/C_Teacher_Dashboard/saveStudentGrade" method="post">
        
    <input type="hidden" name="schedule_id" value="<?= $schedule_id ?>">
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
                    <input type="hidden" name=student_schedule_id[] value="<?= $row['student_schedule_id'] ?>">
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
                        <select type="" name="grade_remarks_id[]" value="<?= $row['grade_remarks_id'] ?>">
                            <option value="">-</option>
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
        <input type="submit" value="Save">
    </form>
    <br><br>
    <form action="/C_Teacher_Dashboard/" method="post">
        <input type="submit" value="Back">
    </form>
    <br><br>
    <form action="/C_Teacher_Dashboard/logout" method="post">
        <input type="submit" value="Logout">
    </form>
</body>

</html>