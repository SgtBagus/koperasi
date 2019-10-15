<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Pembayaran extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        $id = $_GET['pro'];
        $anggota = $this->mymodel->selectDataone('anggota', array('kode' => $id));
        $data['email'] = $anggota['email'];

        $data['page'] = 'Pembayaran';
        $this->template->load('login/template', 'login/pembayaran', $data);
    }

    public function send()
    {
        $kode = $_POST['kode'];
        $bukti_pembayaran = "";
        if (!empty($_FILES['bukti_pembayaran']['name'])) {
            $bukti_pembayaran = file_get_contents($_FILES["bukti_pembayaran"]["tmp_name"]);
            $bukti_pembayaran = base64_encode($bukti_pembayaran);
        }

        $dt['bukti_pembayaran'] = $bukti_pembayaran;
        // var_dump($dt);
        // die();
        $this->mymodel->updateData('anggota', $dt, array('kode' => $kode));
        $this->alert->alertsuccess('Upload Berhasil Mohon untuk membuka email anda untuk proses lebih lanjut!');
    }
}
