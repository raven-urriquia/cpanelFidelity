<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Merchant extends CI_Controller 
{
	public function __construct() {
		parent::__construct();
		$this->load->model('' ,'',TRUE);
	}

	public function index()
	{          
		$this->load->view('include/header');
        $this->load->view('MerchantView');
		$this->load->view('include/footer');
	}	
}