<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index(){
        if ($this->session->userdata('admin_status' == 1)){
            redirect(base_url() . 'admin/dashboard', 'refresh');
        } else {
            redirect(base_url() . 'login', 'refresh');
        }
	}

    function dashboard(){
        $this->load->view('backend/admin/dashboard');
    }
}
