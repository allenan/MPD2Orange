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
		$this->load->model('Project_model');
		
		$data['years'] = $this->Project_model->get_project_years();
		$data['projs'] = $this->Project_model->get_projects_with_image();
		
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
	
	public function project($proj_id = 0)
	{
		$data['main_content'] = 'project';
		 $this->load->model('Image_model');
					
		if($query = $this->Image_model->get_image_proj($proj_id))
		{
			$data['proj_img'] = $query;
		}
		
		$this->load->view('frontend/includes/template', $data);
	}
	
	public function bio($alum_id)
	{
		$data['main_content'] = 'bio';
        $this->load->model('Image_model');
		$this->load->model('Alumni_model');
		
		if($query0 = $this->Alumni_model->bio_info($alum_id))
		{
			$data['alum_data'] = $query0;
		}
					
		if($query = $this->Image_model->get_image_alum($alum_id))
		{
			$data['alum_img'] = $query;
		}
		if($query1= $this->Image_model->get_team_pictures($alum_id))
		{
			$data['team_imgs'] = $query1;
		}
		
		
		
		$this->load->view('frontend/includes/template', $data);
	}
	
	
}