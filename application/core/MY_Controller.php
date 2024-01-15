<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        
        if(empty($_SESSION['student_number'])){
            redirect('/C_Student_Login/index');
        }
        else if(empty($_SESSION['teacher_number'])){
            redirect('/C_Teacher_Login/index');
        }

    }

}