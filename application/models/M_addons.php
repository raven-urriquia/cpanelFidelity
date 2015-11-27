<?php

/**
 * Created by PhpStorm.
 * User: Glenn Matotes
 * Date: 2/17/2015
 * Time: 5:21 PM
 */
Class M_addons extends CI_Model {

    public function __constuct() {
        $this->load->database();
    }

    function getAddons()
	{
        $sql = "SELECT * FROM Addons";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
	
	function addTablet($data)
	{
		$data['branch_id'] = "0111";
		$sql = "INSERT into Addons (tablet_id, tablet_brand, branch_id, branch_assigned) 
		VALUES ('".$data['tabletID']."','".$data['tabletBrand']."','".$data['branch_id']."','".$data['branchAssigned']."')";
		$this->db->query($sql);
	}

}
