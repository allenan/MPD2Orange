<?php

class Project_model extends CI_Model {
	
	function get_projects($proj_id)
	{
		$this->db->where('projid', $proj_id);
		$query = $this->db->get('project');
		return $query->result();
	}
	
	function add_project($data) 
	{
		$this->db->insert('project', $data);
		return;
	}
	
	function update_project($data, $proj_id) 
	{
		$this->db->where('projid', $proj_id);
		$this->db->update('project', $data);
	}
	
	function delete_project($proj_id)
	{
		$this->db->where('projid', $proj_id);
		$this->db->delete('project');
	}
	
}