<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Teacher_Login extends CI_Model{
    public function __construct(){
        parent::__construct();
    }


    public function fetchTeacherNumber($teacher_number, $password){
        
        $this->db->select('teacher_number');
        $this->db->from('teacher');
        $this->db->where('teacher_number', $teacher_number);
        $this->db->where('password', $password);
        $result = $this->db->get();

        return $result->result_array();
    }

    public function teacherLoginCreate($teacher_number, $firstname, $middlename, $lastname, $email_address, $contact_number, $password)
    {
        
        $data = array(
            'teacher_number' => $teacher_number,
            'firstname' => $firstname,
            'middlename' => $middlename,
            'lastname' =>  $lastname,
            'email_address' => $email_address,
            'contact_number' => $contact_number,
            'password' => $password

        );
    
        $this->db->insert('teacher', $data);
    }
}