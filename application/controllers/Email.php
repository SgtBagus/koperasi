<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Email extends MY_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function index(){

		$this->load->library('email');

		//config email, jangan diganti
		$config = array(
			'protocol'  => 'smtp',
			'smtp_host' => 'ssl://cuanselalu.com',
			'smtp_port' => 465,
			'smtp_user' => 'testing@cuanselalu.com',
			'smtp_pass' => 'testing',
			'charset' => 'iso-8859-1',
			'wordwrap' => TRUE
		);
		$this->email->initialize($config);
		$this->email->set_mailtype("html");
		$this->email->set_newline("\r\n");
		//-------------------->

		$name = 'Testing'; 
		// Nama Yang di kasik email

		$content = 'Mohon Untuk Lakukan Pembayaran Sebesar Terlebih dahulu sebesar <br><center><h1><b> Rp. 50.000,- </b></h1></center><br> dan lakukan konfirmasi Pembayaran melalui <a href="google.com" target="_blank">Whatsapp</a> Terima Kasih!'; 
		//content isi email

		$content2 = ''; 
		//content ke dua jika ada
		
		$button = ''; 
		//button tambahan seperi (class css tidak bisa disini, style nya langsung di htmlnya)

		$pesan = $this->sendemail->template($name, $content, $content2, $button); 
		//ambil template email ada di application/mobal/emailtemplate

		$pesan = $pesan; 

		$toemail = 'arvin.fairuz.af@gmail.com'; //email tujuan
		$fromemail = 'testing@cuanselalu.com'; //dari email mana tidak perlu diganti
		$fromname = 'Bagus Andika'; //dari siapa email nya 
		$subjectemail = 'Subject Kirim email Terima Kasih'; //subjet email itu


		//proses kirim email
		$htmlContent = "<p>$pesan</p>";
		$this->email->to($toemail);
		$this->email->from($fromemail,$fromname);
		$this->email->subject($subjectemail);
		$this->email->message($htmlContent);
		$this->email->send();
		//-------------------->
	}
}