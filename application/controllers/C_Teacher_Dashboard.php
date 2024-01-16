<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Teacher_Dashboard extends CI_Controller {

    public function __construct(){
        parent::__construct();
        
        if(empty($_SESSION['employee_id'])){
            redirect('C_Employee_Login');
        }
        
        $this->load->model('M_Teacher_Dashboard');

    }

    public function index(){
        $employee_id = $this->session->userdata('employee_id');
        $teacher_info = $this->M_Teacher_Dashboard->fetchTeacherInfo($employee_id);
        $schedule_list = $this->M_Teacher_Dashboard->fetchTeacherScheduleList($employee_id);

        $data = array( 
            'teacher_info' => $teacher_info,
            'schedule_list' => $schedule_list
        );
		$this->load->view('V_Teacher_Dashboard', $data);
    }

    public function logout(){
        $this->session->unset_userdata('employee_id');
        redirect($_SERVER['REQUEST_URI'], 'refresh'); 
    }
}