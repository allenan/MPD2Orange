<?php
class Bio_model extends CI_Model{


	function get_dummy($alum_id){
		// Results
		$q = $this->db->query("SELECT dummy FROM bio WHERE alumniID = $alum_id");

		   foreach ($q->result() as $row)
                   {
                      $ret = $row->dummy;
                   }

		return $ret;
	}
}