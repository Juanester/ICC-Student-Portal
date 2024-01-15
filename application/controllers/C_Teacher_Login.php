<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Teacher_Login extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('M_Teacher_Login');
    }


	public function index()
	{

		$this->load->view('V_Teacher_Login');
	}

	public function teacher_login()
	{
        $teacher_number = $this->input->post('teacher_number');
        $password = md5($this->input->post('password'));

        $student_teacher = $this->M_Teacher_Login->fetchTeacherNumber($teacher_number, $password);
        
        if(!empty($teacher_number)){
            $_SESSION['teacher_number'] = $teacher_number;
            redirect('C_Teacher_Dashboard/index');
        }
	}

    // For Creating students
	public function createTeacher()
	{
		$this->load->view('V_Teacher_Login_Create');
	}

	public function teacherLoginCreate()
	{
        $teacher_number = $this->input->post('teacher_number');
        $firstname = $this->input->post('firstname');
        $lastname = $this->input->post('lastname');
        $email_address = $this->input->post('email_address');
        $contact_number = $this->input->post('contact_number');
        $password = md5($this->input->post('password'));

        $this->M_Teacher_Login->teacherLoginCreate($teacher_number, $firstname, null, $lastname, $email_address, $contact_number, $password);
	}
}
