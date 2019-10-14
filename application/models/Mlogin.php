<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mlogin extends CI_Model {
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }
  
  public function login($email, $pass){
    $user = $this->mymodel->selectDataone('anggota', array('email'=>$email, 'password' => $pass));
    return $user;
  }
  
}  

?>
