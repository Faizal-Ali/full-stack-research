<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clink extends CI_Controller {

	public function index(){
		echo 'welcome';
	}
	
	public function tambah(){
		echo json_encode($_POST);
	}
}
