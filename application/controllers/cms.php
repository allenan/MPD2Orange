<?php

class Cms extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->is_logged_in(); //Check to make sure user is logged in
    }

    //PAGES

    function index() {
        $data['cms_main_content'] = 'home';
        $this->load->view('cms/cms_template', $data);
    }

    function bio() {
        if ($this->session->userdata('Privileges') != 0)
            redirect('cms');
        $this->load->model('bio_model');
		$this->load->model('alumni_model');
		$this->load->model('project_model');
		$this->load->model('image_model');
        $Login = $this->session->userdata('Login');
		$proj_id = $this->project_model->get_projects_login($Login)->ProjID;
        $data['current_info'] = $this->image_model->get_proj_images_typed($proj_id, 4);
        $data['cms_main_content'] = 'bio';
        $data['bio_content'] = $this->bio_model->get_bio($Login);
		$data['position'] = $this->alumni_model->get_team_imagePos_login($Login);
        $this->load->view('cms/cms_template', $data);
    }

    function project() {
        if ($this->session->userdata('Privileges') != 0)
            redirect('cms');
        $this->load->model('project_model');
        $Login = $this->session->userdata('Login');
        $data['cms_main_content'] = 'project_settings';
        $data['project_info'] = $this->project_model->get_projects_login($Login);
        $this->load->view('cms/cms_template', $data);
    }

    function tab($index)
    {
        if ($this->session->userdata('Privileges') != 0)
            redirect('cms');
        
        if (($index < 0) || ($index > 3))
            redirect('cms');
        
        $this->load->model('project_model');
        $this->load->model('image_model');
        $Login = $this->session->userdata('Login');
		
		switch($index){
		case 0:
			$data['edit'] = 'Edit Summary Content';
			$data['text'] = 'Summary Text';
			$data['image'] = 'Summary Image ';
			break;
		case 1:
			$data['edit'] = 'Edit Product Opportunity Content';
			$data['text'] = 'Product Opportunity Text';
			$data['image'] = 'Product Opportunity Image ';
			break;
		case 2:
			$data['edit'] = 'Edit Ideation Content';
			$data['text'] = 'Ideation Text';
			$data['image'] = 'Ideation Image ';
			break;
		case 3:
			$data['edit'] = 'Edit Final Product Content';
			$data['text'] = 'Final Product Text';
			$data['image'] = 'Final Product Image ';
			break;
		}
		$data['cms_main_content'] = 'tab';
		$data['tab_index'] = $index;
        $proj_id = $this->project_model->get_projects_login($Login)->ProjID;
        $data['current_info'] = $this->image_model->get_proj_images_typed($proj_id, $index);
        $this->load->view('cms/cms_template', $data);
    }

  
    function tn($tab, $pos) {
        if ($this->session->userdata('Privileges') != 0)
            redirect('cms');
        $this->load->model('utilities_model');


        $img[0] = $this->utilities_model->get_projID_Login($this->session->userdata('Login'));
        $img[1] = $tab;
        $img[2] = $pos;
        $this->load->model('image_model');
        $data['img_url'] = $this->image_model->get_url($img);
        $size = getimagesize('uploads/' . $data['img_url']);
        $data['img_width'] = $size[0];
        $data['img_height'] = $size[1];
        $this->load->view('cms/tn', $data);
    }

    function new_user() {
        if ($this->session->userdata('Privileges') != 1)
            redirect('cms');
        $data['cms_main_content'] = 'new_user';
        $this->load->view('cms/cms_template', $data);
    }
	
	function new_admin() {
		if($this->session->userdata('Privileges') != 1)
			redirect('cms');
		$data['cms_main_content'] = 'new_admin';
        $this->load->view('cms/cms_template', $data);	
	}

    function edit($UserID) {
        if ($this->session->userdata('Privileges') != 1)
            redirect('cms');
        $this->load->model('alumni_model');
        $this->load->model('membership_model');
        $data['user_info'] = $this->alumni_model->get_alumni_userid($UserID);
        $data['user_login'] = $this->membership_model->get_login($UserID);
        $data['cms_main_content'] = 'edit_user';
        $this->load->view('cms/cms_template', $data);
    }

    function new_project() {
        if ($this->session->userdata('Privileges') != 1)
            redirect('cms');
        $data['cms_main_content'] = 'new_project';
        $this->load->view('cms/cms_template', $data);
    }

    function teams() {
        if ($this->session->userdata('Privileges') != 1)
            redirect('cms');
        $this->load->model('alumni_model');
        $data['alumni'] = $this->alumni_model->get_alumni();
        $data['cms_main_content'] = 'teams';
        $this->load->view('cms/cms_template', $data);
    }

    function projects() {
        if ($this->session->userdata('Privileges') != 1)
            redirect('cms');
        $this->load->model('alumni_model');
        $this->load->model('project_model');
        $data['teams'] = $this->alumni_model->get_teams();
        $data['projects'] = $this->project_model->get_all_projects();

        $data['cms_main_content'] = 'projects';
        $this->load->view('cms/cms_template', $data);
    }

    function view_users() {
        if ($this->session->userdata('Privileges') != 1)
            redirect('cms');
        $this->load->model('alumni_model');
        $data['alumni'] = $this->alumni_model->get_alumni();
        $data['cms_main_content'] = 'view_users';
        $this->load->view('cms/cms_template', $data);
    }

    function view_projects() {
        if ($this->session->userdata('Privileges') != 1)
            redirect('cms');
        $this->load->model('project_model');
        $data['projects'] = $this->project_model->get_all_projects();
        $data['cms_main_content'] = 'view_projects';
        $this->load->view('cms/cms_template', $data);
    }

    function edit_project($ProjID) {
        if ($this->session->userdata('Privileges') != 1)
            redirect('cms');

        $this->load->model('project_model');
        $data['project_info'] = $this->project_model->get_project_info($ProjID);
        $data['cms_main_content'] = 'edit_project';
        
        $this->load->view('cms/cms_template', $data);
    }

    //FUNCTIONS

    function is_logged_in() {
        //If the user isn't logged in, send them back to the login screen
        $is_logged_in = $this->session->userdata('is_logged_in');
        if (!isset($is_logged_in) || $is_logged_in != true) {
            redirect('login');
        }
    }

    function update_project() {
        $this->load->model('project_model');
        $data[0] = $this->input->post('projectName');
        $data[1] = $this->input->post('projectSummary');
        $data[2] = $this->session->userdata('Login');

        $this->project_model->update_project($data);

        redirect('cms/project');
    }

    function update_bio() {
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

    function do_add_user() {
        $this->load->model('alumni_model');
        $this->load->model('utilities_model');

        //Add user entry
        $login = $this->input->post('login');
        $data[0] = $login;
        $data[1] = md5($this->input->post('password'));
        $this->alumni_model->add_user($data);

        //Get userid assigned by db
        $userid = $this->utilities_model->get_userID_Login($login);

        //Add alumni entry
        $data[0] = $userid;
        $data[1] = $this->input->post('gradyear');
        $data[2] = $this->input->post('first');
        $data[3] = $this->input->post('last');
        $this->alumni_model->add_alumni($data);

        redirect('cms/new_user');
    }
	
	function do_add_admin(){
		$this->load->model('alumni_model');
        //Add user entry
        $login = $this->input->post('login');
        $data[0] = $login;
        $data[1] = md5($this->input->post('password'));
        $this->alumni_model->add_admin($data);
		
		redirect('cms/new_admin');
	}
	
    function do_edit_user() {
        $this->load->model('alumni_model');
        $UserID = $this->input->post('UserID');
        $data = array(
            'FirstName' => $this->input->post('first'),
            'LastName' => $this->input->post('last'),
            'GraduationYear' => $this->input->post('gradyear')
        );

        $this->alumni_model->update($UserID, $data);

        redirect('cms/view_users');
    }

    function do_edit_login() {
        $this->load->model('membership_model');
        $UserID = $this->input->post('UserID');
        $data = array(
            'Login' => $this->input->post('login'),
            'Password' => md5($this->input->post('password'))
        );

        $this->membership_model->update($UserID, $data);

        redirect('cms/view_users');
    }

    function delete($UserID) {
        $this->load->model('alumni_model');
        $this->alumni_model->delete_user($UserID);

        redirect('cms/view_users');
    }

    function delete_project($ProjID) {
        $this->load->model('image_model');
        $this->image_model->delete_image_by_project($ProjID);

        $this->load->model('project_model');
        $this->project_model->delete_project($ProjID);

        redirect('cms/view_projects');
    }

    function do_add_project() {
        $this->load->model('project_model');

        $data['ProjectName'] = $this->input->post('project_name');
        $data['Year'] = $this->input->post('project_year');

        $this->project_model->add_project($data);

        redirect('cms/new_project');
    }

    function do_update_project() {
        $this->load->model('project_model');

        $ProjID = $this->input->post('ProjID');

        $data['ProjectName'] = $this->input->post('project_name');
        $data['Year'] = $this->input->post('project_year');

        $this->project_model->update_project_all($ProjID, $data);

        redirect('cms/view_projects');
    }

    function do_make_team() {
        $this->load->model('alumni_model');
        $this->load->model('image_model');
        $team_group = $this->input->post('team_group');
        $next_teamID = $this->alumni_model->get_next_teamID();
		$position = 0;
        foreach ($team_group as $member) {
            $this->alumni_model->update_teamID($member, $next_teamID);
			$this->image_model->update_teamID_image($member, $next_teamID, $position);
			$position++;
        }

        redirect('cms/teams');
    }

    function do_assign_project() {
        $this->load->model('alumni_model');
        $this->load->model('image_model');
        $team_group = $this->input->post('team_group');
        $project_group = $this->input->post('project_group');

        $this->alumni_model->update_projID($project_group[0], $team_group[0]);
		$this->image_model->update_projID_image($project_group[0], $team_group[0]);
        redirect('cms/projects');
    }

    function update_project_details() {
        $this->load->model('project_model');
        $this->load->model('utilities_model');
        $ProjID = $this->utilities_model->get_projID_Login($this->session->userdata('Login'));

        $data = array(
            'MarketSegmentation' => $this->input->post('MarketSegmentation'),
            'TargetMarket' => $this->input->post('TargetMarket'),
            'MarketPositioning' => $this->input->post('MarketPositioning'),
            'QualitativeResearch' => $this->input->post('QualitativeResearch'),
            'QuantitativeResearch' => $this->input->post('QuantitativeResearch'),
            'Price' => $this->input->post('Price'),
            'CountryOfOrigin' => $this->input->post('CountryOfOrigin'),
            'MaterialSelection' => $this->input->post('MaterialSelection'),
            'IntellectualProperty' => $this->input->post('IntellectualProperty'),
            'HumanFactors' => $this->input->post('HumanFactors'),
            'Regulations' => $this->input->post('Regulations'),
            'OtherInfo' => $this->input->post('OtherInfo')
        );

        $this->project_model->update_project_all($ProjID, $data);

        redirect('cms/project');
    }

}

?>