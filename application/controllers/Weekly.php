<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Weekly extends CI_Controller {

    function __construct() {
        parent::__construct();
        if ($this->session->userdata('logged_in') == false) {
            redirect('Login');
        }
        $this->load->model('MWeekly');
    }

    public function index() {
        $user_id = $this->session->userdata('user_id');
        
        $data = array(
            'title' => 'Weekly',
            'subtitle' => 'Task List',
            'userClickWeekly' => TRUE,
            'weeklyList' => $this->MWeekly->get_all($user_id)
        );
        $this->load->view('page', $data);
    }

    public function add_weekly() {
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
