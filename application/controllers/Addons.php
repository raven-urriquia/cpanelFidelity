<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Addons extends CI_Controller 
{
	public function __construct() {
		parent::__construct();
		$this->load->model('M_addons' ,'',TRUE);
	}

	public function index()
	{          
		$data['addons'] = $this->M_addons->getAddons();			
		$this->load->view('include/header');
        $this->load->view('AddonView', $data);
		$this->load->view('include/footer');
	}
	
	public function addTablet()
	{
		$this->M_addons->addTablet($_POST);
		$this->session->set_flashdata('message', 'Tablet Added Successfully!');			
		redirect('addons', 'refresh');
	}
}