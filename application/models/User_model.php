<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function addUser(){
        $set = '123456789abcdefghjkilmnopqrstuvwxyzABCDFGHIJKLMNOPQRSTUVWXYRZ';
        $activation_code = substr(str_shuffle($set), 0, 10);
        $data['first_name'] = $this->input->post('first_name');
        $data['last_name']  = $this->input->post('last_name');
        $data['email']      = $this->input->post('email');
        $data['password']   = sha1($this->input->post('password'));
        $data['country']    = $this->input->post('country');
        $data['city']       = $this->input->post('city');
        $data['gender']     = $this->input->post('gender');
        $data['user_file']  = $_FILES['user_file']['name'];
        $data['activation_code'] = $activation_code;
        $data['activation_status'] = FALSE;
        $data['is_contestant']     = FALSE;
        $data['login_status']      = date('Y-m-d');

        $this->db->insert('users', $data);
        $image_id = $this->db->insert_id();
        $id_user = $this->db->insert_id();

        move_uploaded_file($_FILES['user_file']['tmp_name'], 'uploads/user_image/' . $image_id . '.jpg');

        $balance = array(
            'id_user' => $id_user,
            'usd_balance' => 0,
            'pesos_balance' => 0
        );
        $this->db->insert('wallet_balance', $balance);
    }
}
