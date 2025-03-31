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

        $admin = $this->db->query("select email from admin where id_admin='1'")->row();
        $admin_email = $admin->email;
        $user_name = $this->input->post('first_name');
        $user_email = $this->input->post('email');

        //sending email
        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => '465',
            'smtp_user' => 'bautistaaexpositooo@gmail.com',
            'smtp_pass' => 'voeb tgvn kwvy zquc',
            'mailtype' => 'html',
            'wordwrap' => TRUE
        );

        $user_message = "
            <html>
                <head>
                    <title>Email Verification</title>
                </head>
                <body>
                    <p>Dear ".$user_name",</p>
                    <p>This email is to confirm that we have received your registrarion information and to verify the email address you have provided</p>
                    <br>
                    <h4>
                        <a href='".base_url() . "register/activate" . $id_user . "/" . $activation_code. "'>Activate Account</a>
                    </h4>
                </body>
            </html>
        ";

        $admin_message = "
            <html>
                <head>
                    <title>Sign Up Alert</title>
                </head>
                <body>
                    <p>A new user just created an account:</p>
                    <p>".$user_name."</p>
                    <p>".$user_email."</p>
                    <br>
                </body>
            </html>
        ";
    }

}
