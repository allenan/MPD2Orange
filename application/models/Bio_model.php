<?php

class Bio_model extends CI_Model {

    function get_bio($Login) {
        // Results
        $sql = "SELECT Industry, CurrentEmployer, info, facebook, twitter, linkedin FROM alumni WHERE UserID =
                    (select UserID from users where Login = ?)";
        $q = $this->db->query($sql, $Login);
		$ret = null;
        foreach ($q->result() as $row) {
            $ret[0] = $row->Industry;
            $ret[1] = $row->CurrentEmployer;
            $ret[2] = $row->info;
            $ret[3] = $row->facebook;
            $ret[4] = $row->twitter;
            $ret[5] = $row->linkedin;
        }

        return $ret;
    }

    function update_bio($data) {
        // Results
        $sql = "UPDATE alumni
                SET Industry = ?,
                CurrentEmployer = ?,
                info = ?,
                facebook = ?,
                twitter = ?,
                linkedin = ?
                WHERE UserID =
                    (select UserID from users where Login = ?)";
        $this->db->query($sql, $data);
    }

}