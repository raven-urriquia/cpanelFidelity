<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Management extends CI_Controller 
{
	public function __construct() {
		parent::__construct();
		$this->load->model('M_management' ,'',TRUE);
	}

	public function index()
	{          
		$merchantID = '16';
		$data['branches'] = $this->M_management->getBranches($merchantID);		
		$data['employees'] = $this->M_management->getEmployee($merchantID);
		$data['customers'] = $this->M_management->getCustomer($merchantID);	
		$this->load->view('include/header');
        $this->load->view('ManagementView', $data);
		$this->load->view('include/footer');
	}
	
	public function addBranch()
	{
		$data['branchName'] = $_POST['branchName'];
		$data['branchAddress'] = $_POST['branchAddress'];
		$data['longitude'] = "1";
		$data['latitude'] = "2";
		$data['status'] = "1";
		$data['merchantId'] = "16";
		$this->M_management->addBranch($data);	
		$this->session->set_flashdata('message', 'Branch Added Successfully!');			
		redirect('management', 'refresh');
	}
	
	public function editBranch()
	{
	}
	
	public function deleteBranch()
	{
	}
	
	public function addEmployee()
	{		
		$data['employeeName'] = $_POST['employeeName'];
		$data['selectBranch'] = $_POST['selectBranch'];
		$data['fourDigit'] = $_POST['fourDigit'];	
		
		//$this->M_management->addEmployee($data);	
		$this->session->set_flashdata('message', 'Employee Added Successfully!');			
		redirect('management', 'refresh');
	}
}