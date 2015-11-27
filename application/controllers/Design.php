<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Design extends CI_Controller 
{

	public function index()
	{          
		$this->load->view('include/header');
        $this->load->view('DesignView');
		$this->load->view('include/footer');
	}
}