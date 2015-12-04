<?php

/**
 * Created by PhpStorm.
 * User: Glenn Matotes
 * Date: 2/17/2015
 * Time: 5:21 PM
 */
Class M_transactionhistory extends CI_Model {

    public function __constuct() {
        $this->load->database();
    }

    function getAllTransaction()
	{
		
        $sql = "SELECT CustomerTransaction.* , Customer.firstName, Customer.lastName, Branches.branchName FROM CustomerTransaction LEFT JOIN Customer ON CustomerTransaction.customerId = Customer.customerId LEFT JOIN Branches ON CustomerTransaction.branchId = Branches.id";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

}
