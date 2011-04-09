<?php

class Image_model extends CI_Model {
	
	function get_image_alum($alum_id)
	{
		$this->db->where('alumid', $alum_id);
		$this->db->select('imageURL');
		$query = $this->db->get('image');
		
		return $query->result();
	}
	
	function get_image_proj($proj_id)
	{
		$this->db->where('projid', $proj_id);
		$this->db->select('imageURL');
		$query = $this->db->get('image');
		
		return $query->result();
	}
	
	function add_image($data) 
	{
		$this->db->insert('image', $data);
		return;
	}
	
	function update_image($data, $img_id) 
	{
		$this->db->where('imageID', $img_id);
		$this->db->update('image', $data);
	}
	
	function delete_image($img_id)
	{
		$this->db->where('imageID', $img_id);
		$this->db->delete('image');
	}
	
}