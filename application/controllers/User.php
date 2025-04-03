<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index(){
        if ($this->session->userdata('activation_status' == 1)){
            redirect(base_url() . 'user/dashboard', 'refresh');
        } else {
            redirect(base_url() . 'login', 'refresh');
        }
	}

    function dashboard(){
        $this->load->view('backend/user/dashboard');
    }
}
