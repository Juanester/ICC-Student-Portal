<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Student_Management extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('M_Student_Management');
    }

	public function index()
	{
        $student_list = $this->M_Student_Management->fetchStudent();
        
        $data = array(
            'student_list'=> $student_list
        );

		$this->load->view('V_Student_Create', $data);
	}

	public function studentLoginCreate()
	{
        $student_number = $this->input->post('student_id');
        $password = md5($this->input->post('password'));

        $this->M_Student_Management->studentLoginCreate($student_number, $password);
	}
}
