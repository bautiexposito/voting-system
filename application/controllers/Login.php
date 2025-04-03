<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index(){
		$this->load->view('backend/sign-in');
	}

	public function validateLogin(){
		$authModel = $this->auth_model->authLoginFunction();

		$loginType = $this->session->userdata('login_type');

		if(!$authModel){
			$this->session->set_flashdata('message', 'Wrong login credentials');
			redirect(base_url() . 'login', 'refresh');
		}

		if($loginType == 'user'){
			$this->session->set_flashdata('message', 'Login Successful');
			redirect(base_url() . 'user/dashboard', 'refresh');
		}

		if($loginType == 'admin'){
			$this->session->set_flashdata('message', 'Login Successful');
			redirect(base_url() . 'admin/dashboard', 'refresh');
		}
	}

}
