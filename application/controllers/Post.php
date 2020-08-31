<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('post_model');

    }
	public function index()
	{
		$this->load->view('post_view');
    }
    public function add(){

        $btn=$this->input->post('btnsave');
        if(isset($btn)){
           
            $title=$this->input->post('post_title');

            $data = array(
                'post_title' =>$title,
            );

            $response = $this->post_model->add($data);
            if($response){
                echo "data base been inserted successfully!";
            }else{
                echo "error while processing your request!";
            }


        }
    }
	
}
