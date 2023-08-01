<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Simple_login
{
	protected $CI;

	public function __construct()
	{
		$this->CI = &get_instance();
		$this->CI->load->model('Global_model');
	}

	// fungsi login pegawai
	public function Login($username = '', $password = '')
	{
		$user_login = $this->CI->Global_model->login($username, $password);
		// print_r($user_login);
		// die;
		if ($user_login) {
			$id_user			= $user_login->id_user;
			$username 			= $user_login->username;
			$nama_lengkap		= $user_login->nama_user;
			$id_level				= $user_login->id_level;
			$email				= $user_login->email_user;
			$status_user				= $user_login->status_user;
			$pic_user				= $user_login->pic_user;

			// $login_ruangan		= $this->CI->Global_model->login_akses($id_user, $KdRuangan);

			// if ($login_ruangan) {

			$data_session = array(
				'id_user'	 	=> $id_user,
				'username'	 		=> $username,
				'nama_lengkap'	 	=> $nama_lengkap,
				'id_level'	 			=> $id_level,
				'status_user'	 		=> $status_user,
				'pic_user'	 		=> $pic_user,
				'email'	 		=> $email,
			);

			$this->CI->session->set_userdata($data_session);
			$this->CI->session->set_flashdata('sukses', 'Login Success, Welcome At SIMAIN !!!');
			redirect(base_url('dashboard'));
			// } else {
			// 	$this->CI->session->set_flashdata('danger', 'OPSSS!! Belum Bisa Akses');
			// 	redirect(base_url('login'));
			// }
		} else {
			$this->CI->session->set_flashdata('warning', 'oppss!! Wrong password or username');
			redirect(base_url('login'));
		}
	}


	//CEK LOGIN
	public function check_login()
	{
		if ($this->CI->session->userdata('username') == NULL && $this->CI->session->userdata('id_level') == NULL && $this->CI->session->userdata('id_user') == NULL) {
			// jika data session username tidak ditemukan
			$this->CI->session->set_flashdata('warning', 'oppss!! Login Ulang Sesi Telah Berakhir');
			redirect(base_url('login'));
		}
	}



	//LOGOUT 
	public function Logout()
	{
		$data_session = array('id_user', 'username', 'nama_lengkap', 'id_level', 'status_user', 'email', 'pic_user');
		$this->CI->session->unset_userdata($data_session);
		$this->CI->session->set_flashdata('sukses', 'Thanks, Please login to access this Application');
		redirect(base_url('login'));
	}
}

/* End of file Simple_login.php */
/* Location: ./application/libraries/Simple_login.php */