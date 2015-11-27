<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Dashboard extends CI_Controller 
{

	public function index()
	{          
		$this->load->view('include/header');
        $this->load->view('DashboardView');
		$this->load->view('include/footer');
	}
}