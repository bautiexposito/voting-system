<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
		$this->load->helper(array('url','form'));
	}

	public function index(){
		$this->load->view('backend/sign-up');
	}

	public function addUser($param1 = "", $param2 = ""){
		if ($param1 == "create"){
			$this->form_validation->set_rules('password', 'Password', 'required|min_length[4]|max_length[32]');
			$this->form_validation->set_rules('password-confirm', 'Confirm Password', 'required|matches[password]');
			$this->form_validation->set_rules('first_name', 'First Name', 'required');
			$this->form_validation->set_rules('last_name', 'Last Name', 'required');
			$this->form_validation->set_rules('email', 'Email', 'valid_email|is_unique[users.email]|required', array('is_unique' => '%s already exist'));

			if ($this->form_validation->run() == FALSE){
				$this->load->view('backend/sign-up');
			} else{
				$this->user_model->addUser();
				$this->session->set_flashdata('message', 'Account created successfully');
				redirect(base_url() . 'login', 'refresh');
			}
		}
	}

	public function activate(){
		$id_user = $this->uri->segment(3);
		$activation_code = $this->uri->segment(4);

		$user = $this->user_model->getUserID($id_user);

		if($user['activation_code'] == $activation_code){
			$data['activation_status'] = true;

			$query = $this->user_model->activate($data, $id_user);

			$this->session->set_flashdata('message', 'Your account has been activated.');
			redirect(base_url() . 'register', 'refresh');
		}
	}
}
