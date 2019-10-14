<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alert extends CI_Controller  {

	protected $CI;

	public function __construct()
	{	
		$this->CI =& get_instance();
	}
	public function alertsuccess($status=null)
	{
		# code...
		echo '<div class="alert alert-success alert-has-icon">';
		echo '<div class="alert-icon"><i class="fa fa-success"></i></div>';
		echo '<div class="alert-body">';
		echo '<div class="alert-title">Success</div>';
		echo '		<ul>';
		echo "			<li>$status</li>";
		echo '		</ul>';
		echo '</div>';
		echo '</div>';
	}

	public function alertdanger($error=null)
	{
		# code...
		echo '<div class="alert alert-danger alert-has-icon">';
		echo '<div class="alert-icon"><i class="fa fa-ban"></i></div>';
		echo '<div class="alert-body">';
		echo '<button class="close" data-dismiss="alert">';
		echo '<span>&times;</span>';
		echo '</button>';
		echo '<div class="alert-title">Perhatian !</div>';
		echo '		<ul>';
		if($error==null){
			echo "			<li>Something Error</li>";
		}else{
			echo "			$error";
		}
		
		echo '		</ul>';
		echo '</div>';
		echo '</div>';
	}

}
