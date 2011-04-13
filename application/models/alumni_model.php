<?php
class Alumni_model extends CI_Model{
	
	
	function search($sort_by, $sort_order){
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
	
	function bio_info($alum_id){
		$this->db->where('alumniid', $alum_id);
		$query = $this->db->get('alumni');
		
		return $query->row();
	}
	
	function get_team_from_proj($proj_id)
	{
		$this->db->select('teamid');
		$this->db->where('projID', $proj_id);
		$query = $this->db->get('alumni');
		
		return $query->first_row();
	}
	
	function bio_info_team($team_id)
	{
		$this->db->where('alumni.teamid', $team_id);
		$this->db->from('alumni');
		$this->db->join('images','images.alumniID = alumni.alumniID');

		$query = $this->db->get();
		
		return $query->result();
	
	}
	

	
	
	
	
	
}
