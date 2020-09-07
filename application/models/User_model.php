<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    function login($data){
        $response = $this->db->get_where('users',$data)->result_array();
        return $response?$response:false;
    }
   

}