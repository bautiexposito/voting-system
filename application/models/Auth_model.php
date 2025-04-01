<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }

    function authLoginFunction(){
        $email = html_escape($this->input->post('email'));
        $password = html_escape($this->input->post('password'));
        
        // Setting loging for users
        $queryUser = $this->db->get_where('users', array('email' => $email, 'password' => Sha1($password)));

        if($queryUser->num_rows() > 0){
            $row = $queryUser->row();

            $this->session->set_userdata('login_type', 'user');
            $this->session->set_userdata('id_user', $row->id_user);
            $this->session->set_userdata('username', $row->first_name);
            $this->session->set_userdata('useremail', $row->email);

            return $this->db->set('login_status', ('1'))
                            ->where('id_user', $this->session->userdata('id_user'))
                            ->update('users');
        }

        // Setting loging for admin
        $queryUser = $this->db->get_where('admin', array('email' => $email, 'password' => Sha1($password)));

        if($queryUser->num_rows() > 0){
            $row = $queryUser->row();

            $this->session->set_userdata('login_type', 'admin');
            $this->session->set_userdata('id_admin', $row->id_admin);
            $this->session->set_userdata('admin_name', $row->first_name);
            $this->session->set_userdata('admin_email', $row->email);

            return $this->db->set('login_status', ('1'))
                            ->where('id_admin', $this->session->userdata('id_admin'))
                            ->update('admin');
        }
    }
}
