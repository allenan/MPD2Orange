<?php

class Image_model extends CI_Model {
	
	function get_image_alum($alum_id)
	{
		$this->db->where('alumniid', $alum_id);
		$this->db->select('imageURL');
		$query = $this->db->get('images');
		
		return $query->result();
	}
	
	function get_image_proj($proj_id)
	{
		$this->db->where('projid', $proj_id);
		$this->db->select('imageURL');
		$query = $this->db->get('images');
		
		return $query->result();
	}
	
	function add_image($data) 
	{
		$this->db->insert('images', $data);
		return;
	}
	
	function update_image($data, $img_id) 
	{
		$this->db->where('imageID', $img_id);
		$this->db->update('images', $data);
	}
	
	function delete_image($img_id)
	{
		$this->db->where('imageID', $img_id);
		$this->db->delete('images');
	}
	
}