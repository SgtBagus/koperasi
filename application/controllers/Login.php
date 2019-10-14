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

	public function addregister(){

		$identification_file = "";
		if(!empty($_FILES['identification_file']['name'])){
			$identification_file = file_get_contents($_FILES["identification_file"]["tmp_name"]);
			$identification_file = base64_encode($identification_file);
		}
		$dt = $_POST['dt'];
		
		$dt['identification_file'] = $identification_file;
		// $dt['created_by'] = '';
		$dt['created_at'] = date('Y-m-d H:i:s');
		$dt['status'] = "ENABLE";

		// var_dump($dt);
		// die();
		$this->db->insert('anggota', $dt);  
		
	}
}