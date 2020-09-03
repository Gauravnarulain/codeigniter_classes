<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('post_model');

    }
	public function index()
	{
        $data['blogs'] = $this->post_model->getRow();
		$this->load->view('post_view', $data);
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
                
                redirect('/');

            }else{
                redirect('/');
            }


        }
    }
    public function delete($ref){
        $response = $this->post_model->delete($ref);
        if($response){
            redirect('/');
        }else{
            redirect('/');
        }
    }
    public function update($ref){

        $data['post'] = $this->post_model->getRowById($ref);
        $btn=$this->input->post('btnsave');
        if(isset($btn)){

            $title=$this->input->post('post_title');

            $data = array(
                'post_title' =>$title,
            );

            $response = $this->post_model->update($data,$ref);
            if($response){
                
                redirect('/');

            }else{
                redirect('/');
            }



        }

        $this->load->view("update_view",$data);
    }
	
}
