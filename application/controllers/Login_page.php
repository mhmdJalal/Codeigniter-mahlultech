<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_page extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if ($this->session->userdata('login') == true) {
			redirect('Dashboard','refresh');
		} else {
			$data['title'] = "Login Admin";
			$this->load->view('template/header', $data);
			$this->load->view('admin/v_login');
			$this->load->view('template/footer');
		}
		
	}

	function login()
	{
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

		$query = $this->M_crud->get_where("user", array("username" => $username, "password" => $password));

		if ($query->num_rows() > 0) {
			$data = $query->row_array();
			$role = $this->M_crud->get_where("role", array('id' => $data['idrole']))->row();

			$array = array(
				'id'	=> $data['id'],
				'name' 	=> $data['username'],
				'role'	=> $role->nama,
				'login'	=> true
			);
			
			$this->session->set_userdata( $array );
			// echo "<script>alert('Berhasil Masuk!!')</script>";
			redirect('Dashboard','refresh');
		} else {
			echo "<script>alert('Anda tidak terdaftar!!')</script>";
			redirect('login_page','refresh');
		}
		
	}

	function logout()
	{
		$this->session->sess_destroy();
		session_unset();
		redirect('login_page','refresh');
	}

}

/* End of file Login_page.php */
/* Location: ./application/controllers/Login_page.php */