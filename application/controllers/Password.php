<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Password extends MY_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function index(){

		$id = $_GET['pro'];
		$anggota = $this->mymodel->selectDataone('anggota', array('kode' => $id));
		$data['email'] = $anggota['email'];

		$data['page'] = 'Ubah Password';
		$this->template->load('login/template','login/password', $data);
	}

	public function changepassword($id){

		$dt['password'] = md5($_POST['password']);
		$dt['verification'] = 'Verified';

		$this->mymodel->updateData('anggota', $dt, array('kode' => $id));
		// var_dump($this->mymodel->updateData('anggota', $dt, array('kode' => $id)));
		// die();
		header("Location:". base_url());
	}
	
}