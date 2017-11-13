<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (isset($_GET['logout']) == 'signout') {
			$this->session->sess_destroy();
			redirect('login');
		}else{
			if ($this->session->has_userdata('role')) {
				if ($this->session->userdata('role') == "admin") {
					redirect('admin');
				}else if($this->session->userdata('role') == "debitur"){
					redirect('debitur');
				}
			}
		}
		
	}

	public function index()
	{
		$this->load->view('login/loginform_v');	
	}

	public function resetuser()
	{
		$this->form_validation->set_rules('password', 'password', 'trim|required|min_length[8]|alpha_numeric');
		$this->form_validation->set_rules('confirmpassword','confirmpassword','trim|required|matches[password]');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('login/resetform_v');
		} else {
			$id_debitur = $this->session->userdata('id_debitur');
			$this->admin_model->reset_password_debitur($id_debitur);
		}
	}

	public function validationlogin()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
					'username'=>$username,
					'password'=>$password
				);
		$cek = $this->login_model->ceklogin('tb_debitur',$where)->num_rows();
		if ($cek > 0) {
			$result = $this->db->get_where('tb_debitur',$where)->row_array();
			if ($result['no_telp'] == $result['password']) {
				$data_session = array(
								'username'=>$result['username'],
								'id_debitur'=>$result['id_debitur'],
								'nama'=>$result['nama'],
								'role'=>$result['role']
				);
				redirect('login/resetuser');
			}else{
				$data_session = array(
								'username'=>$result['username'],
								'id_debitur'=>$result['id_debitur'],
								'nama'=>$result['nama'],
								'role'=>$result['role']
							);
				$this->session->set_userdata($data_session);
				if ($result['role'] == 'admin') {
					redirect('admin');
				}else if($result['role'] == 'debitur'){
					redirect('debitur');
				}
			}
		}else{
			$this->session->set_flashdata('info', 'true');
			redirect('login');
		}
	}

	
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */

