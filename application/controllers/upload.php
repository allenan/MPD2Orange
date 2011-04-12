<?php

class Upload extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    function index() {
        //$this->load->view('upload_form', array('error' => ' ' ));
    }

    function do_upload() {

        //$filename = $this->input->post('project')."_".$this->input->post('tab')."_".$this->input->post('position');


        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = '3000';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';
        //$config['file_name'] = $filename;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {
            $error = array('error' => $this->upload->display_errors());

            //$this->load->view('upload_form', $error);
        } else {
            $data = array('upload_data' => $this->upload->data());
            
//Set up variables for db
            $this->load->model('utilities_model');
            $this->load->model('image_model');
            $uploadData = $this->upload->data();
            $Login = $this->session->userdata('Login');
            $url = "uploads/" . $uploadData['file_name'];
            $description = $this->input->post('description');
            $type = $this->input->post('tab');
            $projID = $this->utilities_model->get_projID_Login($Login);
            $alumniID = $this->utilities_model->get_alumniID_Login($Login);

            
            $dataDB['AlumniID'] = $alumniID;
            $dataDB['ProjID'] = $projID;
            $dataDB['ImageURL'] = $url;
            $dataDB['imgType'] = $type;
            $dataDB['description'] = $description;

            $this->image_model->add_image($dataDB);

            redirect('cms/tab'.$type);

            //$this->load->view('upload_success', $data);
        }
    }

}