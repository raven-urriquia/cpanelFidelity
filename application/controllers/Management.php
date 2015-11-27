<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Management extends CI_Controller 
{
	public function __construct() {
		parent::__construct();
		$this->load->model('M_management' ,'',TRUE);
	}

	public function index()
	{          
		$data['branches'] = $this->M_management->getBranches();		
		$this->load->view('include/header');
        $this->load->view('ManagementView', $data);
		$this->load->view('include/footer');
	}
}