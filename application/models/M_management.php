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
	
	function addEmployee($data)
	{
        $sql = "INSERT INTO Users (employeeId, merchantId, branchId, firstName, lastName, middleName, email, phoneNumber, mobileNumber, address, username, password, repeatPassword, lastlogin, lastlogout, loginCount, userType) VALUES ('".$data['employeeId']."','".$data['merchantId']."','".$data['branchId']."','".$data['firstName']."','".$data['lastName']."','".$data['middleName']."','".$data['email']."','".$data['phoneNumber']."','".$data['mobileNumber']."','".$data['address']."','".$data['username']."','".$data['password']."','".$data['repeatPassword']."','".$data['lastlogin']."','".$data['lastlogout']."','".$data['loginCount']."','".$data['userType']."')";
        $query = $this->db->query($sql);
    }
	
	function getCustomer($merchantID)
	{
        $sql = "SELECT * FROM Customer where merchantId = '".$merchantID."'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

}
