<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends MY_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['page'] = 'Login';
        $this->template->load('login/template','login/login', $data);
	}
	
	public function register(){
		$data['page'] = 'Register';
        $this->template->load('login/template','login/register', $data); 
	}
}