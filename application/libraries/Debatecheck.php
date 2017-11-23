<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Debatecheck
{
	private $isDebate;
	public function __construct($params)
	{
		$CI =& get_instance();
		$CI->load->library('session');
		$CI->load->model('usermodel');

		$param = array(
			'invoice' => $params['invoice']
		);
		$auth = $CI->usermodel->findBy($param);

		if($auth != null)
		{
			$CI->session->set_userdata('invoice',$params['invoice']);
			$CI->session->set_userdata('field',$params['field']);
			$this->isDebate = true;
		}
	}

	/**
	* @return booLean
	*/
	public function isDebate()
	{
		return $this->isDebate;
	}
	public function setIsDebate($isDebate)
	{
		$this->isDebate = $isDebate;
	}
	public function logout()
	{
		$CI =& get_instance();
		$CI->session->sess_destroy();
	}
}
