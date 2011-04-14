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
	
	public function project($proj_id = 0, $alum_id = 0)
	{
		$data['main_content'] = 'project';
		$this->load->model('Image_model');
		$this->load->model('Alumni_model');
		$this->load->model('Project_model');
		

		
		if($alum_id == 0)
		{
			$data['start_val'] = 0;
			if($query4 = $this->Project_model->get_first_member($proj_id))
			{
				$alum_id = $query4->alumniID;
			}
		}
		else
		{
			$data['start_val'] = 4;
		}
		
		
		if($query5 = $this->Alumni_model->get_team_from_proj($proj_id))
		{
		$teamid = $query5->teamid;
		}
		else
		{
		$teamid = 0;
		}
		
		$data['which_alumni'] = $this->Alumni_model->get_team_position($teamid, $alum_id);

		if($query0 = $this->Alumni_model->bio_info_team($teamid))
		{
			$data['all_alum_data'] = $query0;
		}
					
		if($query2 = $this->Image_model->get_image_proj($proj_id))
		{
			$data['proj_img'] = $query2;
		}
		
		if($query3 = $this->Project_model->get_project_info($proj_id))
		{
			$data['proj_info'] = $query3;
		}
		$this->load->view('frontend/includes/template', $data);
	}
	
	public function bio($alum_id)
	{


		
		
		
		$this->load->view('frontend/includes/template', $data);
	}
	
	
}