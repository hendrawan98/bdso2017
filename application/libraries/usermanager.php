<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usermanager{
	public function buildParam($request){
		if(array_key_exists('name', $request) == false){
			redirect('registration');
		}
		if(array_key_exists('phone', $request) == false){
			redirect('registration');
		}
		if(array_key_exists('email', $request) == false){
			redirect('registration');
		}
		if(array_key_exists('line', $request) == false){
			redirect('registration');
		}
		if(array_key_exists('facebook', $request) == false){
			redirect('registration');
		}
		if(array_key_exists('institution', $request) == false){
			redirect('registration');
		}
		if(array_key_exists('accomodation', $request) == false){
			redirect('registration');
		}
		if(array_key_exists('vege', $request) == false){
			redirect('registration');
		}
		if(array_key_exists('education', $request) == false){
			redirect('registration');
		}
		if(array_key_exists('field', $request) == false){
			redirect('registration');
		}

		date_default_timezone_set('Asia/Jakarta');
		$param = array(
			'id'=> '',
			'name'				=> $request['name'],
			'phone' 			=> $request['phone'],
			'email'				=> $request['email'],
			'line'				=> $request['line'],
			'facebook'			=> $request['facebook'],
			'institution'		=> $request['institution'],
			'accomodation'		=> $request['accomodation'],
			'vege'				=> $request['vege'],
			'education'			=> $request['education'],
			'field'				=> $request['field'],
			'timestamp' 		=> date('Y-m-d H:i:s'),
			'invoice'			=> date('YdHis')
		);
		return $param;
	}
}