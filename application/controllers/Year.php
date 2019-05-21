<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Year extends CI_Controller {

    function __construct() {
        parent::__construct();
        if ($this->session->userdata('logged_in') == false || $this->session->userdata('role_id') != 1) {
            redirect('Login');
        }
        $this->load->model('MYear');
    }

    public function index() {
        $user_id = $this->session->userdata('user_id');

        $data = array(
            'title' => 'Year',
            'subtitle' => 'Year List',
            'userClickYear' => TRUE,
            'yearList' => $this->MYear->get_all()
        );
        $this->load->view('page', $data);
    }

    public function add_year() {
        $date = date('Y/m/d H:i:s');
        $data = array(
            'name' => $this->input->post('name'),
            'createdby' => $this->session->userdata('user_id'),
            'created' => $date,
            'updatedby' => $this->session->userdata('user_id'),
            'updated' => $date
        );

        $insert = $this->MYear->add($data);
        echo json_encode(array("status" => true));
    }

    public function get_by_id_json($id) {
        $data = $this->MYear->get_by_id($id);
        echo json_encode($data);
    }

    public function update_year() {
        $date = date('Y/m/d H:i:s');

        $data = array(
            'name' => $this->input->post('name'),
            'updatedby' => $this->session->userdata('user_id'),
            'updated' => $date
        );

        $this->MYear->update(array('c_year_id' => $this->input->post('id')), $data);
        echo json_encode(array('status' => TRUE));
    }

}
