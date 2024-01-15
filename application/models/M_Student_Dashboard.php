<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Student_Dashboard extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    public function fetchStudentGrade(){
        $this->db->select('subject.subject_name');
        $this->db->select('CONCAT(employee.first_name, " ", employee.last_name)');
        $this->db->select('schedule.schedule_remarks');
        $this->db->select('schedule');
        $this->db->from('students');
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