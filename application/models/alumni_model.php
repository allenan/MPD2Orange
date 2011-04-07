<?php
class Alumni_model extends CI_Model{
	
	
	function search($sort_by, $sort_order){
		$sort_order = ($sort_order == 'asc') ? 'asc' : 'desc';
		$sort_columns = array('GraduationYear', 'CurrentEmployer', 'FirstName', 'LastName', 'Industry');
		$sort_by = (in_array($sort_by, $sort_columns)) ? $sort_by : 'GraduationYear';
		
		// Results
		$q = $this->db->select('AlumniID, GraduationYear, CurrentEmployer, FirstName, LastName, Industry')
		->from('alumni')
		->order_by($sort_by, $sort_order);
		
		$ret['rows'] = $q->get()->result();
		
		return $ret;
	}
	
	
	
	
	
}
