<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

error_reporting(0);
class Login extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['page'] = 'Login';
		$this->template->load('login/template', 'login/login', $data);
	}

	public function register()
	{
		$data['page'] = 'Register';
		$this->template->load('login/template', 'login/register', $data);
	}

	public function act_login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$pass = md5($password);

		$session     = $this->mlogin->login($email, $pass);
		if ($session) {
			$this->session->set_userdata('session_sop', true);
			$this->session->set_userdata('id', $session['id_anggota']);
			$this->session->set_userdata('email', $session['email']);
			$this->session->set_userdata('name', $session['full_name']);
			$this->session->set_userdata('role', 'Anggota');
			header("Location:" . base_url('home/home'));
		} else {
			header("Location:" . base_url());
		}
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
		$this->form_validation->set_rules('agree_payroll_cut', '<strong>Centang Persetujuan diatas!</strong>', 'required');
		$this->form_validation->set_rules('agree_adart', '<strong>Centang Persetujuan diatas!</strong>', 'required');
		$this->form_validation->set_rules('agree_tnc', '<strong>Centang Persetujuan diatas!</strong>', 'required');
		$this->form_validation->set_message('required', '%s');
	}

	public function addregister()
	{
		$this->validate();
		if ($this->form_validation->run() == FALSE) {
			// $this->alert->alertdanger(validation_errors());
			return false;
		} else {
			$emailcek = $this->mymodel->selectDataone('anggota', array('email' => $_POST['dt']['email']));
			$email = $_POST['dt']['email'];
			$cekstatus = $this->mymodel->selectWithQuery("SELECT * FROM anggota WHERE email='$email' ORDER BY created_at DESC");

			if ($emailcek) {
				if ($cekstatus[0]['verification'] == 'Rejected') {
					$identification_file = "";
					if (!empty($_FILES['identification_file']['name'])) {
						$identification_file = file_get_contents($_FILES["identification_file"]["tmp_name"]);
						$identification_file = base64_encode($identification_file);
					}

					$chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
					$res = "";
					for (;;) {
						for ($i = 0; $i < 7; $i++) {
							$res .= $chars[mt_rand(0, strlen($chars) - 1)];
						}

						$query = $this->db->query("SELECT * FROM anggota WHERE kode='$res'")->result();
						if (count($query) == 0) {
							// echo 'TIDAK ADA';
							break;
						} else {
							// echo 'ADA';
						}
					}

					$dt = $_POST['dt'];

					$phone = '';
					$phonecek = substr($_POST['dt']['phone_number'], 0, 1);
					if($phonecek == '0'){
						$phone = '62' . substr($_POST['dt']['phone_number'], 1, 13);
					}
					else{
						$phone = '62' . $_POST['dt']['phone_number'];
					}
					$dt['phone_number'] = $phone;
					$dt['identification_file'] = $identification_file;
					$dt['kode'] = $res;
					$dt['created_at'] = date('Y-m-d H:i:s');
					$dt['status'] = "ENABLE";
					$this->db->insert('anggota', $dt);

					$name = $_POST['dt']['full_name'];
					$toemail = $_POST['dt']['email'];
					$subjectemail = 'Terima Kasih Telah Mendaftar Bersama Kami!';
					$content = 'Terima Kasih sudah mendaftar ke koperasi. Selanjutnya silahkan menunggu verifikasi dari kami.';
					$content2 = '';
					$button = '';

					$this->sendemail->kirimemail($name, $toemail, $subjectemail, $content, $content2, $button);

					$this->alert->alertsuccess('Pendaftaran Berhasil Mohon untuk membuka email anda untuk proses lebih lanjut!');
				} else {
					echo "<script type='text/javascript'>
					Swal.fire({
                        type: 'error',
                        title: 'Kesalahan!',
                        text: 'Email Tersebut Telah Terdaftar!',
                    })
					</script>";
					return false;
				}
			} else {
				$identification_file = "";
				if (!empty($_FILES['identification_file']['name'])) {
					$identification_file = file_get_contents($_FILES["identification_file"]["tmp_name"]);
					$identification_file = base64_encode($identification_file);
				}

				$chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
				$res = "";
				for (;;) {
					for ($i = 0; $i < 7; $i++) {
						$res .= $chars[mt_rand(0, strlen($chars) - 1)];
					}

					$query = $this->db->query("SELECT * FROM anggota WHERE kode='$res'")->result();
					if (count($query) == 0) {
						// echo 'TIDAK ADA';
						break;
					} else {
						// echo 'ADA';
					}
				}

				$dt = $_POST['dt'];

				$dt['phone_number'] = '62' . $_POST['dt']['phone_number'];
				$dt['identification_file'] = $identification_file;
				$dt['kode'] = $res;
				$dt['created_at'] = date('Y-m-d H:i:s');
				$dt['agree_payroll_cut'] = "TRUE";
				$dt['agree_adart'] = "TRUE";
				$dt['agree_tnc'] = "TRUE";
				$dt['status'] = "ENABLE";
				$this->db->insert('anggota', $dt);

				$name = $_POST['dt']['full_name'];
				$toemail = $_POST['dt']['email'];
				$subjectemail = 'Terima Kasih Telah Mendaftar Bersama Kami!';
				$content = 'Terima Kasih sudah mendaftar ke koperasi. Selanjutnya silahkan menunggu verifikasi dari kami.';
				$content2 = '';
				$button = '';

				$this->sendemail->kirimemail($name, $toemail, $subjectemail, $content, $content2, $button);

				$this->alert->alertsuccess('Pendaftaran Berhasil Mohon untuk membuka email anda untuk proses lebih lanjut!');
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		header('Location: ' . base_url());
	}
}
