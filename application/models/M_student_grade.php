<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_student_grade extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    public function get_student_grade($student_id, $subject_id, $year_level){
        $this->db->select('GRADES');
        $this->db->select('STUDENT_ID');
        $this->db->from('student_grade');
        $this->db->where('STUDENT_ID', $student_id);
        $this->db->where('SUBJECT_ID', $subject_id);
        $this->db->where('YEAR_LEVEL', $year_level);
        $result = $this->db->get();

        return $result->result_array()[0];
    }
}