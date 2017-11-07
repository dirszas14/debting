<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$data['fetch_data']=$this->admin_model->fetch_data_debitur();
		
		$this->load->view('layout/header');
		$this->load->view('layout/aside');
		$this->load->view('admin/dashboard_v',$data);
		$this->load->view('layout/footer');
	}

	public function login(){
		$this->load->view('admin/login');
	}

	public function datadebitur()
	{
		$data['fetch_data']=$this->admin_model->fetch_data_debitur();
		
		$this->load->view('layout/header');
		$this->load->view('layout/aside');
		$this->load->view('admin/datadebitur_v',$data);
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


	public function registerdebitur(){
		
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


		if($this->form_validation->run() == FALSE) {
			$data['kddebitur'] = $this->admin_model->getkodedebitur('debitur');
			$this->load->view('layout/header');
			$this->load->view('layout/aside');
			$this->load->view('admin/registerdebitur_v',$data);
			$this->load->view('layout/footer');
		} else {
			$this->admin_model->insert_data_debitur();
			redirect('admin','refresh');
		}
	}
	
}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */
