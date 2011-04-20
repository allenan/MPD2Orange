<?php

class Alumni_model extends CI_Model {

    function search($sort_by, $sort_order) {
        $sort_order = ($sort_order == 'asc') ? 'asc' : 'desc';
        $sort_columns = array('GraduationYear', 'CurrentEmployer', 'FirstName', 'LastName', 'Industry');
        $sort_by = (in_array($sort_by, $sort_columns)) ? $sort_by : 'GraduationYear';

// Results
        $q = $this->db->select('AlumniID, GraduationYear, CurrentEmployer, FirstName, LastName, Industry, ProjID')
                        ->from('alumni')
                        ->order_by($sort_by, $sort_order);

        $ret['rows'] = $q->get()->result();

        return $ret;
    }

    function bio_info($alum_id) {
        $this->db->where('alumniid', $alum_id);
        $query = $this->db->get('alumni');

        return $query->row();
    }

    function get_team_from_proj($proj_id) {
        $this->db->select('teamid');
        $this->db->where('projID', $proj_id);
        $query = $this->db->get('alumni');

        return $query->first_row();
    }

    function get_team_position($team_id, $alum_id) {
        $query = $this->db->query("select alumniID from alumni where teamID = ? and alumniid < ? order by alumniID asc", array($team_id, $alum_id));

        return $query->num_rows();
    }
	
	function get_alumID_login($login) {
		$query = $this->db->query("select alumniID from alumni where userID = (select userid from users where login = ?)", $login);
		return $query->first_row()->alumniID;
	}
	
	function get_teamID_login($login) {
		$query = $this->db->query("select teamID from alumni where userID = (select userid from users where login = ?)", $login);
		return $query->first_row()->teamID;
	}

	function get_team_position_login($login) {
        $query = $this->db->query("select alumniID from alumni where teamID = ? and alumniid < ? order by alumniID asc",
			array($this->get_alumID_login($login),$this->get_teamID_login($login)));

        return $query->num_rows();
    } 

	function bio_info_team($team_id) {
        $this->db->where('alumni.teamid', $team_id);
        $this->db->from('alumni');
        $this->db->join('images', 'images.alumniID = alumni.alumniID and images.imgtype = 4');
        $this->db->order_by("images.alumniID", "asc");

        $query = $this->db->get();

        return $query->result();
    }

    function add_user($data) {
        $sql = "INSERT INTO users (`UserID` ,`Login` ,`Password` ,`Privileges`)
            VALUES (NULL , ?, ?, '0')";
        
        $q = $this->db->query($sql,$data); //$data: Login, Password
    }
	
	function add_admin($data) {
	        $sql = "INSERT INTO users (`UserID` ,`Login` ,`Password` ,`Privileges`)
            VALUES (NULL , ?, ?, '1')";
        
        $q = $this->db->query($sql,$data); //$data: Login, Password
    }	

    function add_alumni($data)
    {
        $sql = "INSERT INTO alumni (`UserID`, `CurrentEmployer`, `GraduationYear`, `Industry`, `FirstName`, `LastName`, `ProjID`, `AlumniID`, `TeamID`, `info`, `facebook`, `twitter`, `linkedin`)
            VALUES (?, NULL, ?, NULL, ?, ?, NULL, NULL, NULL, NULL, NULL, NULL, NULL);";
        $q = $this->db->query($sql,$data);//$data: UserID, GraduationYear, FirstName, LastName
    }

    function get_alumni()
    {
        $sql = "SELECT * FROM alumni;";
        $q = $this->db->query($sql);
        return $q->result();
    }

    function get_alumni_userid($UserID)
    {
        $sql = "SELECT * FROM alumni WHERE UserID = ?;";
        $q = $this->db->query($sql,$UserID);
        return $q->first_row();
    }

    function get_teams()
    {
        $sql = "SELECT * FROM alumni order BY TeamID;";
        $q = $this->db->query($sql);
        return $q->result();
    }

    function get_next_teamID()
    {
        $sql = "SELECT max(TeamID)+1 as nextVal FROM alumni;";
        $q = $this->db->query($sql);
        if (!$q->first_row()->nextVal)
        {
            return 1;
        }

        return $q->first_row()->nextVal;
    }

    function update_teamID($AlumniID, $TeamID)
    {
        $sql = "UPDATE alumni SET `TeamID` = ? , `ProjID` = NULL WHERE `alumni`.`AlumniID` =?;";
        $q = $this->db->query($sql,array($TeamID,$AlumniID));
        return $q;
    }

    function update_projID($ProjID, $TeamID)
    {
        $sql = "UPDATE alumni SET `ProjID` = ? WHERE `alumni`.`TeamID` =?;";
        $q = $this->db->query($sql,array($ProjID,$TeamID));
        return $q;
    }

//    function update_name_year($First, $Last, $Year)
//    {
//        $sql = "UPDATE `mpd2`.`alumni` SET `FirstName` = ?, `LastName` = ?, `GraduationYear` = ?  WHERE `alumni`.`UserID` = ?;";
//        $q = $this->db->query($sql,array($First,$Last, $Year));
//        return $q;
//    }

    function update($UserID, $data)
    {
        $this->db->where('UserID', $UserID);
        $this->db->update('alumni', $data); 
    }

    function delete_user($UserID)
    {
        $sql = "DELETE FROM alumni WHERE `alumni`.`UserID` = ?;";
        $q = $this->db->query($sql,$UserID);

        $sql = "DELETE FROM users WHERE `users`.`UserID` = ?;";
        $q = $this->db->query($sql,$UserID);

        return $q;
    }

    
}
