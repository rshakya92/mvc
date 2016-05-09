<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {


	 function __construct() {
        parent::__construct();
        $this->load->model('user_model');

    }


	public function index()
	{

		echo "index function of user controller";
		
	}


	public function login() {

		$data = array();
		$data['list'] = "test";
		$data['hi'] = "this is test from controller";
		$this->load->view('login',$data);
	}



	public function login_post() {



		 $username = $this->input->post('username');

		 $pass = $this->input->post('pass');
		 //var_dump($username);die;




		$result = $this->user_model->validate_user($username,$pass);

		 //var_dump($result);

		if($result) {

		} else{
			
		}


	}

}
