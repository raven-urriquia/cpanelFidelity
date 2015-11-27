<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Help extends CI_Controller 
{

	public function index()
	{          
		$this->load->view('include/header');
        $this->load->view('HelpView');
		$this->load->view('include/footer');
	}
}