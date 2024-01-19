<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Program_Dashboard extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    

    



    public function fetchTeacherInfo($employee_id){
        $this->db->select('employee.employee_number');
        $this->db->select('CONCAT(employee.first_name, " ", employee.last_name) AS employee_name');
        $this->db->select('section.section_name');
        $this->db->from('schedule');
        $this->db->join('employee','schedule.employee_id = employee.employee_id','left');
        $this->db->join('section','schedule.section_id = section.section_id','left');
        
        return $this->db->get()->result_array();
    }
}