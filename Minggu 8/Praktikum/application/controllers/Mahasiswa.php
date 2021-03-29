<?php
defined('BASEPATH') oR exit('No direct script access allowed');
class Mahasiswa extends CI_Controller{
	function_construct(){
		parent::_Construct();
		$this->load->model('Mahasiswa_Model');
	}

	public function index(){
		$data['Mahasiswa']=$this->Mahasiswa_model->get_data();
		$this->load->view('view_mahasiswa'.$data);
	}

	public function profil(){
		echo""ini adalah method profil pada controller Mahasiswa";
	}

}
