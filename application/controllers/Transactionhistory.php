<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Transactionhistory extends CI_Controller 
{

	public function index()
	{          
		$this->load->view('include/header');
        $this->load->view('TransactionView');
		$this->load->view('include/footer');
	}
}