<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Registrar_Dashboard extends CI_Controller {

    public function __construct(){
        parent::__construct();
        
        if(empty($_SESSION['employee_id'])){
            redirect('C_Employee_Login');
        }
        $this->load->library('excel');
        $this->load->model('M_Registrar_Dashboard');

    }

    public function index(){
        
        $employee_id = $this->session->userdata('employee_id');
        $registrar_info = $this->M_Registrar_Dashboard->fetchRegistrarInfo($employee_id);
        
        $data = array( 
            'registrar_info' => $registrar_info
        );
		$this->load->view('V_Registrar_Dashboard', $data);
    }

    public function studentUpload(){

        $objPHPExcel = PHPExcel_IOFactory::load($_FILES['fileToUpload']['tmp_name']);
        $cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection();
 

        foreach ($cell_collection as $cell) {
            $column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
            $row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
            $data_value = $objPHPExcel->getActiveSheet()->getCell($cell)->getValue();
         
            //The header will/should be in row 1 only. of course, this can be modified to suit your need.
            if ($row == 1) {
                $header[$row][$column] = $data_value;
            } else {
                $arr_data[$row][$column] = $data_value;
            }
        }
        

        var_dump($header);
        var_dump($arr_data);
    
    }

    public function logout(){
        $this->session->unset_userdata('employee_id');
        redirect($_SERVER['REQUEST_URI'], 'refresh'); 
    }
}