<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Student_Dashboard extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    public function fetchStudentGradeList(){
        $this->db->select('subject.subject_name');
        $this->db->select('CONCAT(employee.first_name, " ", employee.last_name)');
        $this->db->select('schedule.schedule_remarks');
        $this->db->select('schedule.room_remarks');
        $this->db->select('student_schedule.year_level');
        $this->db->select('student_schedule.semester');
        $this->db->select('student_schedule.grade');
        $this->db->from('students_schedule');
        return $this->db->get()->result_array();
    }
    
    public function studentLoginCreate($student_id, $password)
    {
        
        $data = array(
            'student_id' => $student_id,
            'password' => $password

        );
    
        $this->db->insert('student_user', $data);
    }
}