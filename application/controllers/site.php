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
	
	public function alumni($sort_by = 'graduationyear', $sort_order = 'desc')
	{			
		$data['fields'] = array(
		'GraduationYear' => 'Graduated',
		'FirstName' => 'First',
		'LastName' => 'Last',
		'CurrentEmployer' => 'Current Employer',
		'Industry' => 'Industry');
		
		$this->load->model('Alumni_model');
		
		$results = $this->Alumni_model->search($sort_by, $sort_order);
		
		$data['alumni'] = $results['rows'];
		$data['main_content'] = 'alumni'; 
		$data['sort_order'] = $sort_order;
		$data['sort_by'] = $sort_by;
		
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