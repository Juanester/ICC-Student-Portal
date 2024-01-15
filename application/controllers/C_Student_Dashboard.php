<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Student_Dashboard extends MY_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('M_Student_Dashboard');
    }

    public function index(){
        $student_grade_list = $this->M_Student_Dashboard->fetchStudentGradeList();
		$this->load->view('V_Student_Dashboard');
    }

    public function logout(){
        $this->session->unset_userdata('student_number');
        redirect($_SERVER['REQUEST_URI'], 'refresh'); 
    }
}