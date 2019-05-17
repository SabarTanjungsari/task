<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect('login');
        }
    }

    public function index() {
        $data = array(
            'title' => 'Home',            
            'userClickHome' => TRUE
        );

        $this->load->view('page', $data);
    }

}
