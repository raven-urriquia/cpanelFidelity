<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Reports extends CI_Controller 
{

	public function index()
	{          
		$this->load->view('include/header');
        $this->load->view('ReportView');
		$this->load->view('include/footer');
	}
}