<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Securityhandler
{
	private $isLoggedin;
	public function __construct($params)
	{
		$CI =& get_instance();
		$CI->load->library('session');
		$CI->load->model('user');

		$param = array(
			'email' => $params['email'],
			'password' => md5($params['password'])
		);
		$auth = $CI->user->findBy($param);

		if($auth != null)
		{
			$CI->session->set_userdata('email',$params['email']);
			$this->isLoggedin = true;
		}
	}

	/**
	* @return booLean
	*/
	public function isLoggedin()
	{
		return $this->isLoggedin;
	}
	public function setIsLoggedin($isLoggedin)
	{
		$this->isLoggedin = $isLoggedin;
	}
	public function logout()
	{
		$CI =& get_instance();
		$CI->session->sess_destroy();
	}
}
