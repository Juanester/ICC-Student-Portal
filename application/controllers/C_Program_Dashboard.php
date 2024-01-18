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
        $MIS_info = $this->M_Program_Dashboard->fetchRegistrarInfo($employee_id);
        
        $data = array( 
            'MIS_info' => $MIS_info
        );
		$this->load->view('V_Program_Dashboard', $data);
    }

    public function logout(){
        $this->session->unset_userdata('employee_id');
        redirect($_SERVER['REQUEST_URI'], 'refresh'); 
    }
}