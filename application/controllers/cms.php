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
	
	function is_logged_in()
	{
	//If the user isn't logged in, send them back to the login screen
            $is_logged_in = $this->session->userdata('is_logged_in');
            if(!isset($is_logged_in) || $is_logged_in != true)
            {
                    redirect('login');
            }
	}
}
?>