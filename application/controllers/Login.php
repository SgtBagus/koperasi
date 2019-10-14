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

	public function validate()
	{
		$this->form_validation->set_error_delimiters('<li>', '</li>');
		$this->form_validation->set_rules('dt[full_name]', '<strong>Nama Lengkap</strong> Tidak Boleh Kosong', 'required');
		$this->form_validation->set_rules('dt[email]', '<strong>Alamat Email</strong> Tidak Boleh Kosong', 'required');
		$this->form_validation->set_rules('dt[phone_number]', '<strong>Nomor Hp</strong> Tidak Boleh Kosong', 'required');
		$this->form_validation->set_rules('dt[birth_date]', '<strong>Tanggal Lahir</strong> Tidak Boleh Kosong', 'required');
		$this->form_validation->set_rules('dt[birth_place]', '<strong>Tempat Lahir</strong> Tidak Boleh Kosong', 'required');
		$this->form_validation->set_rules('dt[sex]', '<strong>Jenis Kelamin</strong> Mohon Dipilih', 'required');
		$this->form_validation->set_rules('dt[marital_status]', '<strong>Jenis Kelamin</strong> Mohon Dipilih', 'required');
		$this->form_validation->set_rules('dt[family_status]', '<strong>Status Keluarga</strong> Mohon Dipilih', 'required');
		$this->form_validation->set_rules('dt[religion]', '<strong>Agama</strong> Mohon Dipilih', 'required');
		$this->form_validation->set_rules('dt[nationality]', '<strong>Kewarganegaraan</strong> Mohon Dipilih', 'required');
		$this->form_validation->set_rules('dt[npwpid]', '<strong>No NPWP</strong> Tidak Boleh Kosong', 'required');
		$this->form_validation->set_rules('dt[identification_id]', '<strong>Id Identitas</strong> Tidak Boleh Kosong', 'required');

		$supported_file = array(
			'jpg', 'jpeg', 'png'
		);

		$src_file_name = $_FILES['identification_file']['name'];

		if ($src_file_name) {
			$ext = strtolower(pathinfo($src_file_name, PATHINFO_EXTENSION));

			if (!in_array($ext, $supported_file)) {
				$this->form_validation->set_message('dt[gambar]', '<strong>Gambar Proyek</strong> Harus berformat PNG, JPG, JPEG', 'required');
			}
		}

		$this->form_validation->set_rules('dt[ktp_province_id]', '<strong>Alamat KTP Provinsi</strong> Mohon Dipilih', 'required');
		$this->form_validation->set_rules('dt[ktp_city_id]', '<strong>Alamat KTP Kota/Kabupaten</strong> Mohon Dipilih', 'required');
		$this->form_validation->set_rules('dt[ktp_district_id]', '<strong>Alamat KTP Kecamatan</strong> Mohon Dipilih', 'required');
		$this->form_validation->set_rules('dt[ktp_zip_code_id]', '<strong>Alamat KTP Kode Pos</strong> Tidak Boleh Kosong', 'required');
		$this->form_validation->set_rules('dt[ktp_address]', '<strong>Alamat KTP</strong> Tidak Boleh Kosong', 'required');
		$this->form_validation->set_rules('dt[domicile_province_id]', '<strong>Alamat Domisili Provinsi</strong> Mohon Dipilih', 'required');
		$this->form_validation->set_rules('dt[domicile_city_id]', '<strong>Alamat Domisili Kota/Kabupaten</strong> Mohon Dipilih', 'required');
		$this->form_validation->set_rules('dt[domicile_district_id]', '<strong>Alamat Domisili Kecamatan</strong> Mohon Dipilih', 'required');
		$this->form_validation->set_rules('dt[domicile_zip_code_id]', '<strong>Alamat Domisili Kode Pos</strong> Tidak Boleh Kosong', 'required');
		$this->form_validation->set_rules('dt[domicile_address]', '<strong>Alamat Domisili</strong> Tidak Boleh Kosong', 'required');
		$this->form_validation->set_rules('dt[employer_name]', '<strong>Nama Perusahaan</strong> Mohon Dipilih', 'required');
		$this->form_validation->set_rules('dt[employer_address]', '<strong>Alamat Perusahaan</strong> Tidak Boleh Kosong', 'required');
		$this->form_validation->set_rules('dt[employer_phone]', '<strong>No Telp Perusahaan</strong> Tidak Boleh Kosong', 'required');
		$this->form_validation->set_rules('dt[employer_industry]', '<strong>Industri Perusahaan</strong> Tidak Boleh Kosong', 'required');
		$this->form_validation->set_rules('dt[placement_location]', '<strong>Penempatan Kerja Perusahaan</strong> Tidak Boleh Kosong', 'required');
		$this->form_validation->set_rules('dt[employee_dept]', '<strong>Departemen Perusahaan</strong> Tidak Boleh Kosong', 'required');
		$this->form_validation->set_message('required', '%s');
	}

	public function addregister(){
		$this->validate();
		if ($this->form_validation->run() == FALSE) {
			$this->alert->alertdanger(validation_errors());
		} else {
			$identification_file = "";
			if(!empty($_FILES['identification_file']['name'])){
				$identification_file = file_get_contents($_FILES["identification_file"]["tmp_name"]);
				$identification_file = base64_encode($identification_file);
			}
			$dt = $_POST['dt'];

			$dt['identification_file'] = $identification_file;
			$dt['created_at'] = date('Y-m-d H:i:s');
			$dt['status'] = "ENABLE";
			$this->db->insert('anggota', $dt);  
			
            $this->alert->alertsuccess('Success Send Data');
		}

	}
}
