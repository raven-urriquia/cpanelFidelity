<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Achievementunlock extends CI_Controller 
{

	public function index()
	{          
		$this->load->view('include/header');
        $this->load->view('AchievementView');
		$this->load->view('include/footer');
	}
}