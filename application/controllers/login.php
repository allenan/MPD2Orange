<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of login
 *
 * @author andrewallen
 */
class Login extends CI_Controller{
    
        /*function __construct(){
            parent::__construct();

        } */
	
	function index() {
		$this->is_logged_in();
		//$data['main_content'] = 'login_form';
		$this->load->view('login_form');
	}
	
	function validate_credentials()
	{
            $this->load->model('membership_model');
			$this->load->model('utilities_model');
		$query = $this->membership_model->validate();
		
		if($query) // if the user's credentials validated...
		{
			
                        $data = array(
				'Login' => $this->input->post('Login'),
				'is_logged_in' => true,
				'Privileges' => $this->utilities_model->get_privileges_Login($this->input->post('Login'))
			);
			$this->session->set_userdata($data);
			redirect('cms');
		}
		else // incorrect username or password
		{
			$this->index();
		}
	}
	
	function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
	
	function is_logged_in()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		if(isset($is_logged_in) && $is_logged_in)
		{		
			redirect('cms');
		}
	}
}
?>
