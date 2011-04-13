<?php

class Project_model extends CI_Model {
	
	function get_projects_with_image()
	{
		$query = $this->db->query('select * from images right outer join project on images.projID = project.projID');
		return $query->result();
	}
	
	function get_project_years()
	{
		$this->db->select('year');
		$query = $this->db->get('project');
		return $query->result();
	}
	
	function get_first_member($proj_id)
	{
		$this->db->select('alumniID');
		$this->db->where('projid', $proj_id);
		$query = $this->db->get('alumni');
		return $query->first_row();
		
	}
	
	function get_project_info($proj_id)
	{
		$this->db->select('projectname');
		$this->db->where('projid', $proj_id);
		$query = $this->db->get('project');
		return $query->row();
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