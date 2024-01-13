<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('M_student_grade');
    }


	public function index()
	{

        $student_grade = $this->M_student_grade->get_student_grade('2020-0071', '1', '1st');

        $data = array(
            'student_grade' => $student_grade
        );

		$this->load->view('login', $data);
	}
}
