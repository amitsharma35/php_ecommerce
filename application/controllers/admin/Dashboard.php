<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* Admin Dashboard class */
class Dashboard extends CI_Controller {

        public function __construct()
	{
            parent::__construct();
            
            $this->load->model('Admin_Dashboard_Model','Admin_Dashboard_Model');
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');
            $this->load->library('session');
            $this->load->database();
            if($this->session->email == "")
            {
                redirect('account/login');
            }
    	}
   
   /* show admin Dashboard  */
     
	public function index()
	{
        $this->load->view('admin/dashboard');
     }
}
