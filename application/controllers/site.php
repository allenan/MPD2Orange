<?php

class Site extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		
	}
	
	public function index()
	{
		$this->gallery();
	}
	
	public function gallery()
	{
		$data['main_content'] = 'gallery';
		$this->load->view('frontend/includes/template', $data);
	}
	
	public function alumni()
	{
		$data['main_content'] = 'alumni';
		$this->load->view('frontend/includes/template', $data);
	}
	
	public function project()
	{
		$data['main_content'] = 'project';
		$this->load->view('frontend/includes/template', $data);
	}
	
	public function bio()
	{
		$data['main_content'] = 'bio';
		$this->load->view('frontend/includes/template', $data);
	}
	
	
}