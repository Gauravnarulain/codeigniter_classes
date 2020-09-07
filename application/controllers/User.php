<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('user_model');

    }
    public function index(){
       $this->load->view("user_login");
    }
    
    public function login(){
        $data = array(); 
         
         // Get messages from the session 
       

        $btnLogin = $this->input->post("loginSubmit");
        if(isset($btnLogin)){
            $data = array(
                'email'=>$this->input->post("email"),
                'password'=>$this->input->post("password"),
                'status'=>1
            );
            $response = $this->user_model->login( $data);
            if($response){

                $userID = $response[0]['id'];
                $this->session->set_userdata('isUserLoggedIn', TRUE); 
                $this->session->set_userdata('userId', $userID); 
                redirect('index.php/post');

            }else{
                
            echo "Invalid username and password!"
                
            }
        }

        $this->load->view("user_login",$data);
    }
}