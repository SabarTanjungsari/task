<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MUser extends CI_Model {

    public function validate($email, $password) {
        /* $this->db->where('email', $email);
          $this->db->where('password', $password);
          $result = $this->db->get('ad_user', 1);
         */
        $array = array(
            'usr.isactive' => 'Y',
            'ur.isactive' => 'Y',
            'rl.isactive' => 'Y',
            'usr.email' => $email,
            'usr.password' => $password
        );

        $this->db->select('usr.ad_user_id, email, usr.name AS username, password, rl.ad_role_id, rl.name AS role');
        $this->db->join('ad_user_roles ur', 'ur.ad_user_id = usr.ad_user_id');
        $this->db->join('ad_role rl', 'rl.ad_role_id = ur.ad_role_id');
        $this->db->from('ad_user usr');
        $this->db->where($array);
        
        $query = $this->db->get();
        return $query;
    }

}
