<?php
class Mahasiswa extends CI_Controller {
function __construct(){
	parent:: __construct();
	$this->load->library('template');
	$this->load->library('template2');
	$this->load->model('Mahasiswa_model');
}
public function index(){
$data['user'] = $this->Mahasiswa_model->getAll()->result();
$this->template->views('crud/home_mahasiswa',$data);
}
public function Api(){
	$data =$this ->Mahasiswa_model->getAll();
	echo json_encode($data->result_array());
}
public function ApiInsert(){
	$username =$this->input->post('username');
	$password =$this->input->post('password');
	$nama=$this->input->post('nama');
	$grup=$this->input->post('grup');

	$data = array(
		'username' => $username,
		'password' => $password,
		'nama' => $nama,
		'grup' => $grup);
	$this -> Mahasiswa_model->input_data($data,'$tm_user');
	echo json_encode($array);
}
public function ApiDelete(){
	if ($this->input->post('username')){
		$where = array('username'=>$this->input->post('username'));
		if ($this->Mahasiswa_model->hapus_data($where, 'tm_user')){
			$array = array('success'=>true);
		}else{
			$array = array('error'=>true);
		}echo json_encode($array);
	}
}
public function tambah(){
$this->template2->views('crud/tambah_mahasiswa');
}
public function input(){
	$username = $this->input->post('username');
	$password = $this->input->post('pass');
	$nama = $this->input->post('nama');
	$grup = $this->input->post('grup');

	$data = array(
		'username' => $username,
		'password' => $password,
		'nama' => $nama,
		'grup' => $grup
	);
	$this->Mahasiswa_model->input_data($data, 'tm_user');
	redirect('Mahasiswa/index');
}
}
?>