<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>

<html>

<body>

    <span>Welcome, <?= $student_info['last_name'] . ', ' . $student_info['first_name'] ?></span><br><br>

        <table>
            <thead>
                <th>Subject</th>

                <th>Teacher</th>

                <th>Year Level</th>

                <th>Semester</th>

                <th>Preliminary Grade</th>

                <th>Midterm Grade</th>

                <th>Finals Grade</th>
                
                <th>Grade</th>
            </thead>
            <tbody>
                <?php foreach ($student_grade_list as $row): ?>
                  <tr>
                    <td><?= $row['subject_name'] ?></td>
                    <td><?= $row['employee_name'] ?></td>
                    <td><?= $row['year_level'] == 1 ? '1st Year' : ($row['year_level'] == 2 ? '2nd Year' : ($row['year_level'] == 3 ? '3rd Year' : '4th Year')) ?></td>
                    <td><?= $row['semester'] == 1 ? '1st Semester' : ($row['semester'] == 2 ? '2nd Semester' : ($row['semester'] == 3 ? '3rd Semester' : '4th Semester')) ?></td>
                    <td><?= $row['prelim_grade'] ?></td>
                    <td><?= $row['midterm_grade'] ?></td>
                    <td><?= $row['final_grade'] ?></td>
                    <td><?= $row['grade'] ?></td>
                  </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <br><br>

        <form action="/C_Student_Dashboard/logout" method="post">
            <input type="submit" value="Logout">
        </form>

</body>

</html>