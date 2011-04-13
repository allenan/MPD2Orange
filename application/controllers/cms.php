<?php

class Cms extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->is_logged_in(); //Check to make sure user is logged in
	}
	
	function index(){
		$data['cms_main_content'] = 'home';
		$this->load->view('cms/cms_template', $data);
	}

        function bio(){
            $this->load->model('bio_model');
            $Login = $this->session->userdata('Login');
            $data['cms_main_content'] = 'bio';
            $data['bio_content'] = $this->bio_model->get_bio($Login);
            $this->load->view('cms/cms_template', $data);
        }

        function project(){
            $this->load->model('project_model');
            $Login = $this->session->userdata('Login');
            $data['cms_main_content'] = 'project_settings';
            $data['projectName'] = $this->project_model->get_projectName($Login);
            $data['projectSummary'] = $this->project_model->get_summary($Login);
            $this->load->view('cms/cms_template', $data);
        }

        function tab0(){
            $data['cms_main_content'] = 'tab0';
            $this->load->view('cms/cms_template', $data);
        }

        function tab1(){
            $data['cms_main_content'] = 'tab1';
            $this->load->view('cms/cms_template', $data);
        }

        function tab2(){
            $data['cms_main_content'] = 'tab2';
            $this->load->view('cms/cms_template', $data);
        }

        function tab3(){
            $data['cms_main_content'] = 'tab3';
            $this->load->view('cms/cms_template', $data);
        }

        function tab4(){
            $data['cms_main_content'] = 'tab4';
            $this->load->view('cms/cms_template', $data);
        }
	
	function is_logged_in()
	{
	//If the user isn't logged in, send them back to the login screen
            $is_logged_in = $this->session->userdata('is_logged_in');
            if(!isset($is_logged_in) || $is_logged_in != true)
            {
                    redirect('login');
            }
	}

        function update_project()
        {
            $this->load->model('project_model');
            $data[0] = $this->input->post('projectName');
            $data[1] = $this->input->post('projectSummary');
            $data[2] = $this->session->userdata('Login');

            $this->project_model->update_project($data);

            redirect('cms/project');
        }

        function update_bio()
        {
            $this->load->model('bio_model');
            $data[0] = $this->input->post('Industry');
            $data[1] = $this->input->post('Employer');
            $data[2] = $this->input->post('info');
            $data[3] = $this->input->post('facebook');
            $data[4] = $this->input->post('twitter');
            $data[5] = $this->input->post('linkedin');
            $data[6] = $this->session->userdata('Login');

            $this->bio_model->update_bio($data);

            redirect('cms/bio');
        }
}
?>