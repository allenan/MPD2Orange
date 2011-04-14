<?php

class Utilities_model extends CI_Model {
    function get_projID_Login($Login)
    {
        $sql = "SELECT ProjID FROM alumni WHERE UserID = (select UserID from users where Login = ?)";
        $q = $this->db->query($sql,$Login);
        foreach ($q->result() as $row) {
            $retVal = $row->ProjID;
        }
        return $retVal;
    }
    function get_alumniID_Login($Login)
    {
        $sql = "SELECT AlumniID FROM alumni WHERE UserID = (select UserID from users where Login = ?)";
        $q = $this->db->query($sql,$Login);
        foreach ($q->result() as $row) {
            $retVal = $row->AlumniID;
        }
        return $retVal;
    }
	function get_teamID_Login($Login)
    {
        $sql = "SELECT TeamID FROM alumni WHERE UserID = (select UserID from users where Login = ?)";
        $q = $this->db->query($sql,$Login);
        foreach ($q->result() as $row) {
            $retVal = $row->TeamID;
        }
        return $retVal;
    }
	function get_privileges_Login($Login)
	{
		$sql = "SELECT Privileges FROM users WHERE Login = ?";
		$q = $this->db->query($sql,$Login);
        foreach ($q->result() as $row) {
            $retVal = $row->Privileges;
        }
        return $retVal;
	}
}