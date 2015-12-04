<?php

/**
 * Created by PhpStorm.
 * User: Glenn Matotes
 * Date: 2/17/2015
 * Time: 5:21 PM
 */
Class M_management extends CI_Model {

    public function __constuct() {
        $this->load->database();
    }

    function getBranches($merchantID)
	{
        $sql = "SELECT * FROM Branches where merchantId = '".$merchantID."'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
	
	function addBranch($data)
	{	
        $sql = "INSERT INTO Branches (merchantId, branchName, address, longitude, latitude, `status`) VALUES('".$data['merchantId']."','".$data['branchName']."','".$data['branchAddress']."','".$data['longitude']."','".$data['latitude']."','".$data['status']."')";
        $query = $this->db->query($sql);
    }
	
	function editBranch($merchantID)
	{
    }
	
	function deleteBranch($merchantID)
	{
    }
	
	function getEmployee($merchantID)
	{
        $sql = "SELECT * FROM Users where merchantId = '".$merchantID."'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
	
	function getCustomer($merchantID)
	{
        $sql = "SELECT * FROM Customer where merchantId = '".$merchantID."'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

}
