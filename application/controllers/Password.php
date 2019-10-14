<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Password extends MY_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['page'] = 'Ubah Password';
		$this->template->load('login/template','login/password', $data);
	}
	
}