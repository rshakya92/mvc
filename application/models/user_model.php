<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * This Model class handles the user related functions.
 * 
 * @author Sanjeev Subedi
 * @version 1.0
 * @date Feb 06, 2012
 * @copyright Copyright (c) 2012, neolinx.com.np
 */
class user_model extends CI_Model {

    private $table_name = 'student';

    /**
     * checks the valid user
     * @param string $email     
     * @param string $password
     * return boolean
     */
    public function validate_user($email, $password) {
       //echo "model user";die;

        $this->db->select("*");
        $this->db->where('username', $email);
        $this->db->where('password', $password);
        $query = $this->db->get($this->table_name);
        return $query->row();


    }

    

}