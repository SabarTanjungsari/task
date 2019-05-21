<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Period extends CI_Controller {

    function __construct() {
        parent::__construct();
        if ($this->session->userdata('logged_in') == false || $this->session->userdata('ad_role') != 1) {
            redirect('Login');
        }
        $this->load->model('MPeriod');
    }

    public function index() {
        $user_id = $this->session->userdata('user_id');

        $data = array(
            'title' => 'Period',
            'subtitle' => 'Period List',
            'userClickPeriod' => TRUE,
            'periodList' => $this->MWeekly->get_all($user_id)
        );
        $this->load->view('page', $data);
    }

    public function add_() {
        $date = date('Y/m/d H:i:s');
        $data = array(
            'name' => $this->input->post('name'),
            'createdby' => $this->session->userdata('user_id'),
            'created' => $date,
            'updatedby' => $this->session->userdata('user_id'),
            'updated' => $date
        );

        $insert = $this->MWeekly->add($data);
        echo json_encode(array("status" => true));
    }

    public function get_by_id_json($id) {
        $data = $this->MWeekly->get_by_id($id);
        echo json_encode($data);
    }

    public function update_weekly() {
        $date = date('Y/m/d H:i:s');

        $data = array(
            'name' => $this->input->post('name'),
            'updatedby' => $this->session->userdata('user_id'),
            'updated' => $date
        );

        $this->MWeekly->update(array('x_weekly_id' => $this->input->post('id')), $data);
        echo json_encode(array('status' => TRUE));
    }

}
