-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2024 at 01:20 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `icc_student_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `access_role`
--

CREATE TABLE `access_role` (
  `access_role_id` int(8) NOT NULL,
  `access_role_name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `access_role`
--

INSERT INTO `access_role` (`access_role_id`, `access_role_name`) VALUES
(1, 'Teacher'),
(2, 'Program Head'),
(3, 'Registrar');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_code` varchar(8) NOT NULL,
  `course_name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_code`, `course_name`) VALUES
(1, 'BSCS', 'Bachelor of Science in Computer Science'),
(2, 'BSIT', 'Bachelor of Science in Information Technology');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(8) NOT NULL,
  `employee_number` varchar(9) NOT NULL,
  `first_name` varchar(60) NOT NULL,
  `middle_name` varchar(60) NOT NULL,
  `last_name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `employee_number`, `first_name`, `middle_name`, `last_name`) VALUES
(1, '9999-9999', 'John', 'Doe', 'Doe'),
(2, '9998-0000', 'Mark', 'Red', 'Blue');

-- --------------------------------------------------------

--
-- Table structure for table `employee_user`
--

CREATE TABLE `employee_user` (
  `employee_user_id` int(8) NOT NULL,
  `employee_id` int(8) NOT NULL,
  `access_role_id` int(8) NOT NULL,
  `password` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_user`
--

INSERT INTO `employee_user` (`employee_user_id`, `employee_id`, `access_role_id`, `password`) VALUES
(6, 1, 1, '202cb962ac59075b964b07152d234b70'),
(9, 2, 1, '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `grade_remarks`
--

CREATE TABLE `grade_remarks` (
  `grade_remarks_id` int(8) NOT NULL,
  `grade_remarks_name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `grade_remarks`
--

INSERT INTO `grade_remarks` (`grade_remarks_id`, `grade_remarks_name`) VALUES
(1, 'Passed'),
(2, 'Failed'),
(3, 'Incomplete'),
(4, 'Drop');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `schedule_id` int(8) NOT NULL,
  `employee_id` int(8) NOT NULL,
  `subject_id` int(8) NOT NULL,
  `schedule_remarks` varchar(60) NOT NULL,
  `room_remarks` varchar(60) NOT NULL,
  `year_level` int(1) NOT NULL,
  `section_id` int(8) NOT NULL,
  `semester` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`schedule_id`, `employee_id`, `subject_id`, `schedule_remarks`, `room_remarks`, `year_level`, `section_id`, `semester`) VALUES
(1, 1, 1, 'Tue, 8:00AM - 9:00AM', '(Online)', 1, 1, 1),
(2, 2, 2, 'Wed, 9:00PM-10:00PM', '(Online)', 2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `section_id` int(8) NOT NULL,
  `section_name` varchar(60) NOT NULL,
  `course_id` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`section_id`, `section_name`, `course_id`) VALUES
(1, 'BSCS1-A', 1),
(2, 'BSCS2_A', 1),
(3, 'BSIT1-A', 2);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(8) NOT NULL,
  `student_number` varchar(9) NOT NULL,
  `first_name` varchar(60) NOT NULL,
  `middle_name` varchar(60) NOT NULL,
  `last_name` varchar(60) NOT NULL,
  `contact_number` varchar(11) NOT NULL,
  `email_address` varchar(60) NOT NULL,
  `year_level` int(1) NOT NULL,
  `section_id` int(8) NOT NULL,
  `course_id` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `student_number`, `first_name`, `middle_name`, `last_name`, `contact_number`, `email_address`, `year_level`, `section_id`, `course_id`) VALUES
(1, '0000-0000', 'Jake', 'Jake', 'Lake', '09999999999', 'test@email.com', 1, 1, 1),
(2, '0001-0000', 'Karl', 'Ronquillo', 'Vargas', '09121231231', 'test@email', 1, 1, 1),
(3, '0002-0000', 'Jasper', 'Mercado', 'Garcia', '09123121223', 'asdasd@email.com', 1, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `students_schedule`
--

CREATE TABLE `students_schedule` (
  `student_schedule_id` int(8) NOT NULL,
  `year_level` int(1) NOT NULL,
  `semester` int(1) NOT NULL,
  `grade` decimal(3,2) DEFAULT NULL,
  `prelim_grade` decimal(5,2) DEFAULT NULL,
  `midterm_grade` decimal(5,2) DEFAULT NULL,
  `final_grade` decimal(5,2) DEFAULT NULL,
  `student_id` int(8) NOT NULL,
  `schedule_id` int(8) NOT NULL,
  `grade_remarks_id` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students_schedule`
--

INSERT INTO `students_schedule` (`student_schedule_id`, `year_level`, `semester`, `grade`, `prelim_grade`, `midterm_grade`, `final_grade`, `student_id`, `schedule_id`, `grade_remarks_id`) VALUES
(3, 1, 1, NULL, '80.00', '80.00', '90.00', 1, 1, 1),
(4, 1, 1, NULL, '90.00', NULL, NULL, 1, 2, 0),
(7, 1, 1, NULL, NULL, NULL, NULL, 2, 1, NULL),
(9, 2, 1, NULL, '75.00', NULL, NULL, 3, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `student_user`
--

CREATE TABLE `student_user` (
  `student_user_id` int(8) NOT NULL,
  `student_id` int(8) NOT NULL,
  `password` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_user`
--

INSERT INTO `student_user` (`student_user_id`, `student_id`, `password`) VALUES
(3, 1, '202cb962ac59075b964b07152d234b70'),
(4, 2, '92daa86ad43a42f28f4bf58e94667c95');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(8) NOT NULL,
  `subject_code` varchar(8) NOT NULL,
  `subject_name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_code`, `subject_name`) VALUES
(1, 'CS 403', 'Human Computer Interaction');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access_role`
--
ALTER TABLE `access_role`
  ADD PRIMARY KEY (`access_role_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`),
  ADD UNIQUE KEY `course_code` (`course_code`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`),
  ADD UNIQUE KEY `employee_number` (`employee_number`);

--
-- Indexes for table `employee_user`
--
ALTER TABLE `employee_user`
  ADD PRIMARY KEY (`employee_user_id`),
  ADD UNIQUE KEY `employee_id` (`employee_id`);

--
-- Indexes for table `grade_remarks`
--
ALTER TABLE `grade_remarks`
  ADD PRIMARY KEY (`grade_remarks_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`schedule_id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`section_id`),
  ADD UNIQUE KEY `section_name` (`section_name`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `student_number` (`student_number`);

--
-- Indexes for table `students_schedule`
--
ALTER TABLE `students_schedule`
  ADD PRIMARY KEY (`student_schedule_id`),
  ADD UNIQUE KEY `student_id` (`student_id`,`schedule_id`);

--
-- Indexes for table `student_user`
--
ALTER TABLE `student_user`
  ADD PRIMARY KEY (`student_user_id`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`),
  ADD UNIQUE KEY `subject_code` (`subject_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `access_role`
--
ALTER TABLE `access_role`
  MODIFY `access_role_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee_user`
--
ALTER TABLE `employee_user`
  MODIFY `employee_user_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `grade_remarks`
--
ALTER TABLE `grade_remarks`
  MODIFY `grade_remarks_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `schedule_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `section_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students_schedule`
--
ALTER TABLE `students_schedule`
  MODIFY `student_schedule_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `student_user`
--
ALTER TABLE `student_user`
  MODIFY `student_user_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
