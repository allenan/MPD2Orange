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

    function update($UserID,$data)
    {
        $this->db->where('UserID', $UserID);
        $this->db->update('users', $data);
    }

    function get_login($UserID)
    {
        $this->db->where('UserID', $UserID);
        $query = $this->db->get('users');
        return $query->first_row()->Login;
    }

}