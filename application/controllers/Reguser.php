<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reguser extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
	{
		parent::__construct();
		$this->load->model('User_Model');
	}
	 public function index()
	{
		$this->load->view('register');
	}
	function form($role)
	{
		if ($role=='tns20000')
		{
			$this->load->view('reg_page');
		}
		elseif ($role=='tns30000')
		{
			$this->load->view('reg_page');
		}
		elseif ($role=='tns40000')
		{
			$this->load->view('reg_page');
		}
	}



	public function register()
	{
		$this->form_validation->set_rules('username', 'username','trim|required|min_length[1]|max_length[255]|is_unique[mst_user.username]');
		$this->form_validation->set_rules('password', 'password','trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('email', 'email','trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('flg_aprv', 'flg_aprv','trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('role_id', 'role_id','trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('flg_used', 'flg_used','trim|required|min_length[1]|max_length[255]');
		if ($this->form_validation->run()==true)
	   	{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$email = $this->input->post('email');
			$this->auth->register($username,$password,$email);
			redirect('login');
		}
		else
		{
			$this->session->set_flashdata('error', validation_errors());
			redirect('reg_page');
		}
	}
	
}