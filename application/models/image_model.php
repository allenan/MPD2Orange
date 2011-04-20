<?php

class Image_model extends CI_Model {


    function get_image_alum($alum_id) {
        $this->db->where('alumniid', $alum_id);
        $this->db->select('imageURL');
        $query = $this->db->get('images');

        return $query->row();
    }

    function get_proj_images_typed($proj_id, $image_type) {
        $this->db->where('projid', $proj_id);
		$this->db->where('imgtype',$image_type);
        $this->db->select('imageURL, description');
        $query = $this->db->get('images');

        return $query->result();
    }

    function get_url($data) {
        $sql = "SELECT ImageURL FROM images WHERE ProjID = ? AND imgType = ? AND position = ?";
        $q = $this->db->query($sql, $data);
		$retVal = null;
        foreach ($q->result() as $row) {
            $retVal = $row->ImageURL;
        }
        return $retVal;
    }

    function get_descriptions($data) {
        $sql = "SELECT position, description FROM images WHERE ProjID = ? AND imgType = ?;";
        $q = $this->db->query($sql, $data);

        return $q->result();
    }

    function get_imgid($ProjID, $ImgType, $position)
    {
        $this->db->where('ProjID', $ProjID);
        $this->db->where('imgType', $ImgType);
        $this->db->where('position', $position);
        $this->db->select('ImageID');
        $q = $this->db->get('images');

        return $q->first_row()->ImageID;
    }

    function add_image($data) {
        $this->db->insert('images', $data);
        return;
    }

    function update_image($data, $img_id) {
        $this->db->where('imageID', $img_id);
        $this->db->update('images', $data);
    }

    function delete_image($img_id) {
        $this->db->where('imageID', $img_id);
        $this->db->delete('images');
    }
	
	function update_proj_images_position($proj_id, $img_type){
		$sql = "select current.ImageID, current.Position from images current left join images previous on
		current.position = previous.position + 1 and current.projID = previous.projID and
		current.imgType = previous.imgType where current.position <> 0 and previous.position is null and projID = ? and imgType = ?";
		$unordered_images = $this->db->query($sql, array($proj_id, $img_type));
		
		while($unordered_images->num_rows()){
			foreach ($unordered_images->result() as $one_image){
				$this->db->where('imageID', $one_image->ImageID);
				$this->db->update('images', array('position'=> ($position - 1));
			}			
		
			$unordered_images = $this->db->query($sql, array($proj_id, $img_type));
		}
	
	}

    function delete_image_by_project($ProjID) {
        $this->db->where('ProjID', $ProjID);
        $this->db->delete('images');
    }

    function get_team_pictures($team_id) {
        $query = $this->db->query("select imageURL, alumniID from images where teamid = ?", array($team_id));
        return $query->result();
    }

    function check_dups($data) {
        //$this->db->where('AlumniID', $data['AlumniID']);
        $this->db->where('imgType', $data['imgType']);
        $this->db->where('ProjID', $data['ProjID']);
        $this->db->where('position', $data['position']);
        $query = $this->db->get('images');

        if ($query->num_rows == 1) {
            foreach ($query->result() as $row) {
                $retval['url'] = $row->ImageURL;
                $retval['id'] = $row->ImageID;
                return $retval;
            }
            //return true;
        }

        return false;
    }
	
	function update_teamID_image($AlumniID, $TeamID, $pos)
    {
        $sql = "UPDATE images SET `TeamID` = ? , `ProjID` = NULL, position = ? WHERE `images`.`AlumniID` = ? and imgType = 4;";
        $q = $this->db->query($sql,array($TeamID,$pos,$AlumniID));
        return $q;
    }
	
	function update_projID_image($ProjID, $TeamID)
    {
        $sql = "UPDATE images SET `ProjID` = ? WHERE `images`.`TeamID` =?;";
        $q = $this->db->query($sql,array($ProjID,$TeamID));
        return $q;
    }



}