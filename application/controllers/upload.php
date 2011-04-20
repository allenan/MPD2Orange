<?php

class Upload extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    function index() {
        //$this->load->view('upload_form', array('error' => ' ' ));
    }

    function make_tn() {
        $this->load->library('image_lib');

        //TODO: Check to make sure a tn doesn't already exist

        //CROP
        $config['image_library'] = 'gd2';
        $config['source_image'] = './uploads/' . $this->input->post('url');
        $config['new_image'] = './uploads/tn/' . $this->input->post('url');
        $config['maintain_ratio'] = FALSE;
        $config['width'] = $this->input->post('w');
        $config['height'] = $this->input->post('h');
        $config['x_axis'] = $this->input->post('x');
        $config['y_axis'] = $this->input->post('y');

        $this->image_lib->initialize($config);

        if (!$this->image_lib->crop()) {
            echo $this->image_lib->display_errors();
        }

        //RESIZE
        $config['image_library'] = 'gd2';
        $config['source_image'] = './uploads/tn/' . $this->input->post('url');
        $config['maintain_ratio'] = TRUE;
        $config['width'] = 75;
        $config['height'] = 50;

        $this->image_lib->initialize($config);

        if (!$this->image_lib->resize()) {
            echo $this->image_lib->display_errors();
        }

        redirect('cms');
    }

    function do_upload() {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = '3000';
        $config['max_width'] = '2000';
        $config['max_height'] = '2000';
        //$config['file_name'] = $filename;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {
            //If there's no image file, but a description, go ahead and update just the description and skip the file upload
            if ($this->input->post('description')) {
                $this->load->model('utilities_model');
                $this->load->model('image_model');
                $data['description'] = $this->input->post('description');
                $Login = $this->session->userdata('Login');
                $ImgType = $this->input->post('tab');
                $ProjID = $this->utilities_model->get_projID_Login($Login);
                $position = $this->input->post('position');
                $imgid = $this->image_model->get_imgid($ProjID, $ImgType, $position);
                $this->image_model->update_image($data, $imgid);

                redirect('cms/tab/' . $ImgType);
            }
            $error = array('error' => $this->upload->display_errors());
            echo $error['error'];
            //$this->load->view('upload_form', $error);
        }
		else {

            //Set up variables for db
            $this->load->model('utilities_model');
            $this->load->model('image_model');
            $uploadData = $this->upload->data();
            $Login = $this->session->userdata('Login');
            $url = $uploadData['file_name'];
            $description = $this->input->post('description');
            $type = $this->input->post('tab');
            $projID = $this->utilities_model->get_projID_Login($Login);
            $alumniID = $this->utilities_model->get_alumniID_Login($Login);
            $teamID = $this->utilities_model->get_teamID_Login($Login);
            $position = $this->input->post('position');

            $dataDB['AlumniID'] = $alumniID;
            $dataDB['TeamID'] = $teamID;
            $dataDB['ProjID'] = $projID;
            $dataDB['ImageURL'] = $url;
            $dataDB['imgType'] = $type;
            $dataDB['description'] = $description;
            $dataDB['position'] = $position;

            //check to make sure there isn't already an image for this location in the db
            if ($dup_info = $this->image_model->check_dups($dataDB)) {
                //If there is, delete it (maybe should prompt user in a later release)
                //Delete pic from filesystem by following url
                unlink('uploads/' . $dup_info['url']);
                if (file_exists('uploads/tn/' . $dup_info['url'])) {
                    unlink('uploads/tn/' . $dup_info['url']);
                }
                //die($dup_info['url']);
                //delete entry in images table
                $this->image_model->delete_image($dup_info['id'], $projID, $type);
            }

            $data = array('upload_data' => $this->upload->data());

            
			
			$position = $this->image_model->add_image($dataDB, $projID, $type, $position);
			
			
			

            redirect('cms/tn/' . $type . '/' . $position);

            //$this->load->view('upload_success', $data);
        }
    }

    function delete($tab, $pos) {
        $this->load->model('utilities_model');
        $this->load->model('image_model');

        $Login = $this->session->userdata('Login');

        $data['ProjID'] = $this->utilities_model->get_projID_Login($Login);
        $data['imgType'] = $tab;
        $data['position'] = $pos;

        if ($dup_info = $this->image_model->check_dups($data)) {
            //If there is, delete it (maybe should prompt user in a later release)
            //Delete pic from filesystem by following url
            unlink('uploads/' . $dup_info['url']);
            if (file_exists('uploads/tn/' . $dup_info['url'])) {
                unlink('uploads/tn/' . $dup_info['url']);
            }
            //die($dup_info['url']);
            //delete entry in images table
            $this->image_model->delete_image($dup_info['id'], $data['ProjID'], $data['imgType']);
        }

        redirect('cms/tab/' . $tab);
    }

}