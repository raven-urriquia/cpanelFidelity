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

    function getBranches(){
        $sql = "SELECT * FROM Branches";
        $query = $this->db->query($sql);
        return $query->result();
    }

}
