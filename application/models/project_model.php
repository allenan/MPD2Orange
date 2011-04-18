<?php

class Project_model extends CI_Model {

    function get_projects($proj_id) {
        $this->db->where('projid', $proj_id);
        $query = $this->db->get('project');
        return $query->result();
    }

    function add_project($data) {
        $this->db->insert('project', $data);
        return;
    }

    function update_project($data) {
        //$this->db->where('projid', $proj_id);
        //$this->db->update('project', $data);
        $sql = "UPDATE `mpd2`.`project`
            SET `ProjectName` = ?,
            `Summary` = ?
            WHERE `project`.`ProjID` =(select projID from alumni where userID =
            (select userID from users where Login = ?))";
        $this->db->query($sql, $data);
    }

    function delete_project($proj_id) {
        $this->db->where('projid', $proj_id);
        $this->db->delete('project');
    }

    function get_projectName($Login) {
        $sql = "select projectName from project
            where projID = (select projID from alumni where userID =
            (select userID from users where Login = ?))";
        $q = $this->db->query($sql,$Login);
		$retVal = null;
        foreach ($q->result() as $row) {
            $retVal = $row->projectName;
        }
        return $retVal;
    }

    function get_summary($Login) {
        $sql = "select summary from project
            where projID = (select projID from alumni where userID =
            (select userID from users where Login = ?))";
        $q = $this->db->query($sql,$Login);
		$retVal = null;

        foreach ($q->result() as $row) {
            $retVal = $row->summary;
        }
        return $retVal;
    }

    function get_projects_login($Login) {
        $sql = "select * from project
            where projID = (select projID from alumni where userID =
            (select userID from users where Login = ?))";
        $q = $this->db->query($sql, $Login);

        return $q->first_row();
    }

    function update_project_all($ProjID, $data) {
        $this->db->where('ProjID', $ProjID);
        $this->db->update('project', $data);
    }

    function get_projects_with_image() {
        $query = $this->db->query('select * from images right outer join project on images.projID = project.projID where imgtype = 0');
        return $query->result();
    }

    function get_project_years() {
        $this->db->select('year');
        $query = $this->db->get('project');
        return $query->result();
    }

    function get_first_member($proj_id) {
        $this->db->select('alumniID');
        $this->db->where('projid', $proj_id);
        $this->db->order_by("alumniID", "asc");
        $query = $this->db->get('alumni');
        return $query->first_row();
    }

    function get_project_info($proj_id) {
        $this->db->where('projid', $proj_id);
        $query = $this->db->get('project');
        return $query->row();
    }

    function get_all_projects() {
        $query = $this->db->get('project');
        return $query->result();
    }

}