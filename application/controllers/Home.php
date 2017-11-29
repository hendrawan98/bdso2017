<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('usermanager');
		$this->load->library('session');
		$this->load->model('usermodel');
	}

	public function index()
	{
		$data['content'] = 'home';
		$this->load->view('base',$data);
	}

	public function about()
	{
		$data['content'] = 'about';
		$this->load->view('base',$data);
	}
	public function registration()
	{
		$data['content'] = 'registration';
		$this->load->view('base',$data);
	}
	public function register()
	{
		$request = $this->input->post();
		$param['institution'] = $this->input->post('institution');
		$param = $this->usermanager->buildParam($request);
		$this->usermodel->insert($param);

		$this->load->library('Debatecheck',$param);

		if($this->debatecheck->isDebate() == true)
		{
			redirect('registration2');
		}
		else
		{
			//windows.alert('login error');
			redirect('registration');
		}
	}
	public function registration2()
	{
		$id = $this->session->userdata('invoice');
		$data['userdata'] = $this->usermodel->findby($id);
		if($this->session->userdata('field') == 'debate')
		{
			$data['content'] = 'payment';
			$this->load->view('base',$data);
		}
		else
		{
			$data['content'] = 'registration2';
			$this->load->view('base',$data);
		}
	}
	public function accomodation()
	{
		$data['content'] = 'accomodation';
		$this->load->view('base',$data);
	}
}
