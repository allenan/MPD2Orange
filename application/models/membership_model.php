<?php

class Membership_model extends CI_Model {

    function validate() {

        $this->db->where('Login', $this->input->post('Login'));
        $this->db->where('Password', md5($this->input->post('Password')));
        $query = $this->db->get('users');

        if ($query->num_rows == 1) {
			
			
            $newdata = array(
                   'Login'  => $this->input->post('Login')
					
               );
            $this->session->set_userdata($newdata);
            return true;
        }
    }

}