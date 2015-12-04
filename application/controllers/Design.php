<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Design extends CI_Controller 
{	
	public function __construct() {
		parent::__construct();
		$this->load->model('M_design' ,'',TRUE);
	}

	public function index()
	{          
		$this->load->view('include/header');
        $this->load->view('DesignView');
		$this->load->view('include/footer');
	}
	
	public function uploadDesign()
	{		
		$valid_formats = array("jpg", "png", "gif", "bmp");
		$max_file_size = 1024*1024;
		$path = realpath(dirname(getcwd())).UPLOAD_PATH;	
		$count = 0;

		if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
		{
			foreach ($_FILES['uploadFile']['name'] as $f => $name) 
			{     
				if ($_FILES['uploadFile']['error'][$f] == 4) {
					continue; // Skip file if any error found
				}	       
				if ($_FILES['uploadFile']['error'][$f] == 0) 
				{	           
					if ($_FILES['uploadFile']['size'][$f] > $max_file_size) {
						$message[] = "$name is too large!.";
						echo "$name is too large!.";
						continue; // Skip large files
					}
					elseif( ! in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats) ){
						$message[] = "$name is not a valid format";
						echo "$name is not a valid format";
						continue; // Skip invalid file formats
					}
					else{ // No error found! Move uploaded files 
						if(move_uploaded_file($_FILES["uploadFile"]["tmp_name"][$f], $path.$name))
						echo "Success";
						$count++; // Number of successfully uploaded file
					}
				}
			}
		}
	}
}