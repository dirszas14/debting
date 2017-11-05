<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/aside');
		$this->load->model('admin_model');
		$data['fetch_data']=$this->admin_model->fetch_data();
		$this->load->view('admin/dashboard_v',$data);
		$this->load->view('layout/footer');
	}
	public function login(){
		$this->load->view('admin/login');
	}

	public function datadebitur()
	{
		
		$this->load->view('layout/header');
		$this->load->view('layout/aside');
		$this->load->model('admin_model');
		$data['fetch_data']=$this->admin_model->fetch_data();
		$this->load->view('admin/datadebitur_v',$data);
		$this->load->view('layout/footer');
	}

	public function registerdebitur()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/aside');
		$this->load->view('admin/registerdebitur_v');
		$this->load->view('layout/footer');
	}

	public function konfirmasipembayaran()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/aside');
		$this->load->view('admin/konfirmasipembayaran_v');
		$this->load->view('layout/footer');
	}

	public function inputpembayaran()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/aside');
		$this->load->view('admin/datadebiturbayar_v');
		$this->load->view('layout/footer');
	}

	public function bayarcicilan()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/aside');
		$this->load->view('admin/formpembayaran_v');
		$this->load->view('layout/footer');
	}
	public function form_validation(){
	$data['kodeunik'] = $this->admin_model->kode_otomatis();
	
	$this->load->library('form_validation');
	$this->form_validation->set_rules("username", "Username","required");
	$this->form_validation->set_rules("nama", "Nama","required");
	$this->form_validation->set_rules("nama_barang", "Nama Barang","required");
	$this->form_validation->set_rules("alamat", "Alamat","required");
	$this->form_validation->set_rules("harga_barang", "Harga Barang","required");
	$this->form_validation->set_rules("nik", "NIK","required");
	$this->form_validation->set_rules("jatuh_tempo", "Jatuh Tempo","required");
	$this->form_validation->set_rules("notelp", "Nomor Telepon","required");
	$this->form_validation->set_rules("cicilan_min", "Cicilan Minimal","required");
	$this->form_validation->set_rules("email", "E-Mail","required");
	$this->form_validation->set_rules("pekerjaan", "Pekerjaan","required");
	

	if ($this->form_validation->run()) {
		$this->load->model("admin_model");

		//nama database =>nama form 'name'
		$data = array(
			"id_debitur" 	=>$this->input->post("iddebitur"),
			"username"		=>$this->input->post("username"),
			"password"		=>$this->input->post("notelp"),
			"nama"			=>$this->input->post("nama"),
			"nama_barang"	=>$this->input->post("nama_barang"),
			"alamat"		=>$this->input->post("alamat"),
			"harga_barang"	=>$this->input->post("harga_barang"),
			"nik"			=>$this->input->post("nik"),
			"jatuh_tempo"	=>$this->input->post("jatuh_tempo"),
			"no_telp"		=>$this->input->post("notelp"),
			"cicilan_min"	=>$this->input->post("cicilan_min"),
			"email"			=>$this->input->post("email"),
			"pekerjaan"		=>$this->input->post("pekerjaan")
			);
		$this->admin_model->insert_data($data);
		redirect(base_url()."admin/inserted");
	}
	else{
		$this->registerdebitur();
	}

}

	public function inserted(){
	$this->registerdebitur();
}



}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */
