<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_model extends CI_Model {

   

    function add($data){
        $response = $this->db->insert('tbl_post',$data);
        return $response?true:false;
    }

    function getRow(){
        return $this->db->get('tbl_post')->result();
    }

}
?>