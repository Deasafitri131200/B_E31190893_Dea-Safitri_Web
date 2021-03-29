<?php
class Mahasiswa_model extends CI_Model{
	public function get_data(){
		$data_mahasiswa = [["nama"=>"Kim jefry","prodi"=>"MIF"],
			["nama"=>"Ahmad Kurniawan","prodi"=>"TKK"],
			["nama"=>"Budi Sadarsono","prodi"=>"TIF"]];
			$this->load->view("view_mahasiswa",$data);
	}
}
?>