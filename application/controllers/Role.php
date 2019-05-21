<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Role extends CI_Controller {

    public function index() {
        $data = array(
            'title' => 'Role',
            'subtitle' => 'Role List',
            'userClickRole' => TRUE
        );
        $this->load->view('page', $data);
    }

}
