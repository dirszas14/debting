<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
		if ($this->session->has_userdata('role')) {
			if ($this->session->userdata('role') == "admin") {
				redirect('admin');
			}else if($this->session->userdata('role') == "debitur"){
				redirect('debitur');
			}
		}else{
			$this->load->view('login/loginform');	
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
			$data_session = array(
								'username'=>$result['username'],
								'id_debitur'=>$result['id_debitur'],
								'role'=>$result['role']
							);
			$this->session->set_userdata($data_session);
			if ($result['role'] == 'admin') {
				redirect('admin');
			}else if($result['role'] == 'debitur'){
				redirect('debitur');
			}
		}else{
			$this->session->set_flashdata('info', 'true');
			redirect('login');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
	
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */

