<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Student_Dashboard extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    public function fetchStudentGradeList($student_id){
        $this->db->select('CONCAT(subject.subject_code, " - ", subject.subject_name) AS subject_name');
        $this->db->select('CONCAT(employee.first_name, " ", employee.last_name) AS employee_name');
        $this->db->select('schedule.schedule_remarks');
        $this->db->select('schedule.room_remarks');
        $this->db->select('students_schedule.year_level');
        $this->db->select('students_schedule.semester');
        $this->db->select('students_schedule.grade');
        $this->db->select('students_schedule.prelim_grade');
        $this->db->select('students_schedule.midterm_grade');
        $this->db->select('students_schedule.final_grade');
        $this->db->select('grade_remarks.grade_remarks_name');
        $this->db->from('students_schedule');
        $this->db->join('schedule','students_schedule.schedule_id = schedule.schedule_id','left');
        $this->db->join('grade_remarks','students_schedule.grade_remarks_id = grade_remarks.grade_remarks_id','left');
        $this->db->join('employee','schedule.employee_id = employee.employee_id','left');
        $this->db->join('subject','schedule.subject_id = subject.subject_id','left');
        $this->db->where('students_schedule.student_id', $student_id);
        $this->db->order_by('students_schedule.year_level');
        $this->db->order_by('students_schedule.semester');
        return $this->db->get()->result_array();
    }
    
    public function fetchStudentInfo($student_id){
        $this->db->select('first_name');
        $this->db->select('last_name');
        $this->db->from('students');
        $this->db->where('student_id', $student_id);
        return $this->db->get()->result_array()[0];
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