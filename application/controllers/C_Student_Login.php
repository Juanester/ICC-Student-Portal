<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Student_Login extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('M_Student_Login');

        if(!empty($_SESSION['student_number'])){
            redirect('/C_Student_Dashboard/index');
        }
    }


	public function index()
	{
        $message = $this->session->flashdata('message');
        if(!empty($message)){
            $data = array(
                'message' => $message
            );
            $this->load->view('V_Student_Login', $data);
        } else {
            $this->load->view('V_Student_Login');
        }

	}

	public function studentLogin()
	{
        $student_number = $this->input->post('student_number');
        $password = md5($this->input->post('password'));

        $student_number = $this->M_Student_Login->fetchStudentNumber($student_number, $password);
        
        if(!empty($student_number)){
            $_SESSION['student_number'] = $student_number;
            redirect('C_Student_Dashboard/index');
        } else{
            $this->session->set_flashdata('message','Incorrect login and password');
            redirect('C_Student_Login/index'); 
        }
	}
}