<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Student_Login extends CI_Model{
    public function __construct(){
        parent::__construct();
    }


    public function fetchStudentNumber($student_number, $password){
        
        $this->db->select('student_number');
        $this->db->from('students');
        $this->db->where('student_number', $student_number);
        $this->db->where('password', $password);
        $result = $this->db->get();

        return $result->result_array();
    }

    public function getStudentGrade($student_id, $subject_id, $year_level){
        
        $this->db->select('GRADES');
        $this->db->select('STUDENT_ID');
        $this->db->from('student_grade');
        $this->db->where('STUDENT_ID', $student_id);
        $this->db->where('SUBJECT_ID', $subject_id);
        $this->db->where('YEAR_LEVEL', $year_level);
        $result = $this->db->get();

        return $result->result_array()[0];
    }

    public function studentLoginCreate($student_number, $firstname, $middlename, $lastname, $email_address, $contact_number, $password)
    {
        
        $data = array(
            'student_number' => $student_number,
            'firstname' => $firstname,
            'middlename' => $middlename,
            'lastname' =>  $lastname,
            'email_address' => $email_address,
            'contact_number' => $contact_number,
            'password' => $password

        );
    
        $this->db->insert('students', $data);
    }
}