<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Email extends MY_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function index(){

		$this->load->library('email');

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

		$name = 'Testing';
		$content = 'Mohon Untuk Lakukan Pembayaran Sebesar Terlebih dahulu sebesar <br><center><h1><b> Rp. 50.000,- </b></h1></center><br> dan lakukan konfirmasi Pembayaran melalui <a href="google.com" target="_blank">Whatsapp</a> Terima Kasih!';
		$content2 = '';
		$button = '';

		$pesan = $this->emailtemplate->template($name, $content, $content2, $button);
		
		$pesan = $pesan;
		$htmlContent = "<p>$pesan</p>";
		$this->email->to('procw57@gmail.com');
		$this->email->from("testing@cuanselalu.com","Testing Kirim Email");
		$this->email->subject('Subject Kirim email Terima Kasih');
		$this->email->message($htmlContent);
		$this->email->send();
	}

	public function view(){
		$this->load->view('email');
	}
}