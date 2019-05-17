<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Weekly extends CI_Controller {

    public function index() {
        $data = array(
            'title' => 'Weekly',
            'userClickWeekly' => TRUE
        );
        $this->load->view('page', $data);
    }

}
