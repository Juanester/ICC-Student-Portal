<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Program_Dashboard extends CI_Controller {

    public function __construct(){
        parent::__construct();
        
        if(empty($_SESSION['employee_id'])){
            redirect('C_Employee_Login');
        }
        
        $this->load->model('M_Program_Dashboard');

    }

    public function index(){
        
        $employee_id = $this->session->userdata('employee_id');
        $teacher_schedule_info = $this->M_Program_Dashboard->fetchTeacherInfo($employee_id);
        $teacher_schedule = $this->M_Program_Dashboard->fetchTeacher($employee_id);
        $data = array( 
            'teacher_schedule_infos' => $teacher_schedule_info,
            'teacher_schedule' => $teacher_schedule
        );
		$this->load->view('V_Program_Dashboard', $data);
    }

    public function logout(){
        $this->session->unset_userdata('employee_id');
        redirect($_SERVER['REQUEST_URI'], 'refresh'); 
    }
}