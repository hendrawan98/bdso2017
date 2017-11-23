<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('usermanager');
		$this->load->library('session');
		$this->load->model('user');
	}
	public function loginPage()
	{
		if($this->session->userdata('email') == null)
		{
			$data['content'] = 'login';
			$this->load->view('base',$data);	
		}else
		{
			redirect('adminpage');
		}
	}

	public function login()
	{
		$params['email'] = $this->input->post('email');
		$params['password'] = $this->input->post('password');

		$this->load->library('SecurityHandler',$params);

		if($this->securityhandler->isLoggedin() == true)
		{
			redirect('home');
		}
		else
		{
			//windows.alert('login error');
			redirect('login');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('home');
	}

	public function adminpage()
	{
		$data['participant'] = $this->user->findpart();
		$data['content'] = 'adminpage';
		$this->load->view('base',$data);
	}
}