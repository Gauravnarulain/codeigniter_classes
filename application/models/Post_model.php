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
    function getRowById($ref){
        return $this->db->get_where('tbl_post',array('post_id'=>$ref))->result_array();
    }
    function delete($ref){
        $response = $this->db->delete('tbl_post',array('post_id'=>$ref));
        return $response?true:false;
    }
    function update($data,$ref){
        $response = $this->db->update('tbl_post',$data,array('post_id'=>$ref));
        return $response?true:false;
    }

}
?>