<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('MUser');
    }

    public function index() {
        $this->load->view("login");
    }

    public function authenticate() {
        $email = $this->input->post('email', TRUE);
        $password = md5($this->input->post('password', TRUE));
        $validate = $this->MUser->validate($email, $password);
        if ($validate->num_rows() == 1) {
            $data = $validate->row_array();
            $sesdata = array(
                'user_id' => $data['ad_user_id'],
                'username' => $data['username'],
                'email' => $data['email'],
                'role_id' => $data['ad_role_id'],
                'role' => $data['role'],
                'logged_in' => TRUE
            );
            $this->session->set_userdata($sesdata);
            redirect('Home');
        } else {
            echo $this->session->set_flashdata('msg', 'Username or Password is Wrong');
            redirect('Login');
        }
    }

    public function Logout() {
        $this->session->sess_destroy();
        redirect('Login');
    }

}
