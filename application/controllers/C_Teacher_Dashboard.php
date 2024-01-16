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

    public function schedule(){

        $schedule_id = $this->input->get('schedule_id'); 
        $employee_id = $this->session->userdata('employee_id');
        
        $teacher_info = $this->M_Teacher_Dashboard->fetchTeacherInfo($employee_id);
        $teacher_student_schedule_list = $this->M_Teacher_Dashboard->fetchTeacherStudentScheduleList($schedule_id);
        $grade_remarks_list = $this->M_Teacher_Dashboard->fetchGradeRemarksList();
		$data = array( 
            'teacher_info' => $teacher_info,
            'teacher_student_schedule_list' => $teacher_student_schedule_list,
            'grade_remarks_list' => $grade_remarks_list
        );

        $this->load->view('V_Teacher_Schedule', $data);
    }
    public function logout(){
        $this->session->unset_userdata('employee_id');
        redirect($_SERVER['REQUEST_URI'], 'refresh'); 
    }
}