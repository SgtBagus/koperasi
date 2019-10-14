<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Password extends MY_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function index(){

		$id = $_GET['pro'];
		$email = md5($id);

		$dt['email'] = $email;

		$this->mymodel->updateData('anggota', $dt, array('email' => $email));
		$data['page'] = 'Ubah Password';
		$this->template->load('login/template','login/password', $data);
	}
	
}