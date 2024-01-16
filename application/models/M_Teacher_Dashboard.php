<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Teacher_Dashboard extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    public function fetchTeacherScheduleList($employee_id){
        $this->db->select('CONCAT(subject.subject_code, " - ", subject.subject_name) AS subject_name');
        $this->db->select('schedule.room_remarks');
        $this->db->select('schedule.schedule_remarks');
        $this->db->from('schedule');
        $this->db->join('subject','schedule.subject_id = subject.subject_id','left');
        $this->db->where('schedule.employee_id', $employee_id);
        $this->db->order_by('schedule.schedule_id');
        return $this->db->get()->result_array();
    }
    
    public function fetchTeacherInfo($employee_id){
        $this->db->select('first_name');
        $this->db->select('last_name');
        $this->db->from('employee');
        $this->db->where('employee_id', $employee_id);
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