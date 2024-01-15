<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Student_Login extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('M_Student_Login');
    }


	public function index()
	{

		$this->load->view('V_Student_Login');
	}

	public function student_login()
	{
        $student_number = $this->input->post('student_number');
        $password = md5($this->input->post('password'));

        $student_number = $this->M_Student_Login->fetchStudentNumber($student_number, $password);
        
        if(!empty($student_number)){
            $this->createStudent();
        }
	}

    // For Creating students
	public function createStudent()
	{
		$this->load->view('V_Student_Login_Create');
	}

	public function studentLoginCreate()
	{
        $student_number = $this->input->post('student_number');
        $firstname = $this->input->post('firstname');
        $lastname = $this->input->post('lastname');
        $email_address = $this->input->post('email_address');
        $contact_number = $this->input->post('contact_number');
        $password = md5($this->input->post('password'));

        $this->M_Student_Login->studentLoginCreate($student_number, $firstname, null, $lastname, $email_address, $contact_number, $password);
	}
}
