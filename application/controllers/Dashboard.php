<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->login = $this->session->userdata('login');
	}

	public function index()
	{
		if ($this->login == false) {
			redirect('login_page','refresh');
		} else {
			$data['artikel'] = $this->M_crud->get_data("blogs")->num_rows();
			$data['subscriber'] = $this->M_crud->get_where("subscriber", array('aktif' => '1'))->num_rows();

			$this->load->view('template/header_admin');
			$this->load->view('template/navbar_admin');
			$this->load->view('admin/v_home', $data);
			$this->load->view('template/footer_admin');
		}
		
	}

	// -------------------------------- PORTPOLIO ----------------------------------------
	public function portpolio($edit = null, $id = null)
	{
		if ($this->login == false) {
			redirect('login_page','refresh');
		} else {
			if (is_null($edit)) {
				// $data['portpolio'] = $this->M_crud->get_data("portpolio");
				$data['edit'] = false;

				$config['base_url'] = base_url('dashboard/portpolio');
			    $config['total_rows'] = $this->M_crud->get_data("portpolio")->num_rows();
			    $config['per_page'] = 6;
			    $config['uri_segment']=3;

			    //Tambahan untuk styling
			    $config['full_tag_open'] = "<ul class='pagination'>";
			    $config['full_tag_close'] ="</ul>";

			    $config['num_tag_open'] = '<li>';
			    $config['num_tag_close'] = '</li>';

			    $config['cur_tag_open'] = "<li class='disabled'><li class='active teal lighten-2'><a href=''>";
			    $config['cur_tag_close'] = "</a></li>";

			    $config['next_tag_open'] = "<li>";
			    $config['next_tagl_close'] = "</li>";

			    $config['prev_tag_open'] = "<li>";
			    $config['prev_tagl_close'] = "</li>";

			    $config['first_tag_open'] = "<li>";
			    $config['first_tagl_close'] = "</li>";

			    $config['last_tag_open'] = "<li>";
			    $config['last_tagl_close'] = "</li>";
			    
			    $this->pagination->initialize($config);

			    $get_data = $this->M_crud->get_portpolio("portpolio", $config['per_page'], '0');
    			$data['portpolio'] = $get_data;

				$this->load->view('template/header_admin');
				$this->load->view('template/navbar_admin');
				$this->load->view('admin/v_portpolio', $data);
				$this->load->view('template/footer_admin');
			}else{
				$data['edit_portpolio'] = $this->M_crud->get_where("portpolio", array('id' => $id))->row_array();
				$data['edit'] = true;

				$this->load->view('template/header_admin');
				$this->load->view('template/navbar_admin');
				$this->load->view('admin/v_portpolio', $data);
				$this->load->view('template/footer_admin');
			}
		}
	}

	public function addportp()
	{
		$nmfile = $this->M_crud->auto_code("image", "port", "portpolio");
		$config['upload_path'] = './assets/img/portpolio/';
		$config['allowed_types'] = 'jpg';
		$config['file_name'] = $nmfile;
		$config['max_width']  = '1200';
		$config['min_width']  = '1200';
		$config['max_height']  = '675';
		$config['min_height']  = '675';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('image')){
			$error = array("error" => $this->upload->display_errors());
			$this->session->set_flashdata('message', "<div class='alert alert-warning alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>".$error['error']."</div>");
			redirect('Dashboard/portpolio','refresh');
		}
		else{
			$image = array('upload_data' => $this->upload->data());
		}

		$data = array(
			'id' => '', 
			'nama' => htmlspecialchars($this->input->post('name')) , 
			'keterangan' => $this->input->post('description'), 
			'image' => $nmfile
		);

		if ($this->M_crud->save("portpolio", $data)) {
			redirect('Dashboard/portpolio','refresh');
		} else {
			echo "<script>alert('failed')</script>";
			redirect('Dashboard/portpolio','refresh');
		}
	}

	public function deleteport($id)
	{
		$query = $this->M_crud->get_where("portpolio", array('id' => $id))->row();
		$path = 'assets/img/portpolio/'.$query->image.".jpg";
		unlink($path);
		if ($this->M_crud->delete("portpolio", array("id" => $id))) {
			redirect('Dashboard/portpolio','refresh');
		}
	}

	public function updateport($id)
	{
		$field = array(
			'nama' 			=> $this->input->post('nama'), 
			'keterangan'	=> $this->input->post('description')
		);

		if ($this->M_crud->update("portpolio", $field, array('id' => $id))) {
			redirect('dashboard/portpolio','refresh');
		}
	}

	public function updateimage($id)
	{
		$nmfile = $this->M_crud->auto_code("image", "port", "portpolio");
		$query = $this->M_crud->get_where("portpolio", array('id' => $id))->row();

		$config['upload_path'] = 'assets/img/portpolio/';
		$config['allowed_types'] = 'jpg';
		$config['file_name'] = $nmfile;
		$config['max_width']  = '1200';
		$config['min_width']  = '1200';
		$config['max_height']  = '675';
		$config['min_height']  = '675';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('cover')){
			$error = array("error" => $this->upload->display_errors());
			$this->session->set_flashdata('message', "<div class='alert alert-warning alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>".$error['error']."</div>");
			redirect('Dashboard/portpolio/edit/'.$id,'refresh');
        	return false;
		}
		else{
			$path = "assets/img/portpolio/".$query->image.".jpg";
			unlink($path);
			$data = array('upload_data' => $this->upload->data());
		}

		if ($this->M_crud->update("portpolio", array("image" => $nmfile), array('id' => $id))) {
			$this->session->set_flashdata('message', "<div class='alert alert-warning alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Berhasil Diperbarui</div>");
			redirect('dashboard/portpolio/edit/'.$id,'refresh');
		}
	}
	// -------------------------------- #END# PORTPOLIO ----------------------------------------

	// -------------------------------- ARTICLE ----------------------------------------
	public function newarticle()
	{
		if ($this->login == false) {
			redirect('login_page','refresh');
		} else {

			$this->load->view('template/header_admin');
			$this->load->view('template/navbar_admin');
			$this->load->view('admin/v_addarticle');
			$this->load->view('template/footer_admin');
		}
	}

	public function article($edit = null, $id = null)
	{
		if ($this->login == false) {
			redirect('login_page','refresh');
		} else {
			if (is_null($edit)) {
				$data['article'] = $this->M_crud->get_data("blogs");
				$data['featured'] = $this->M_crud->get_data("q_blog_featured");
				$data['popular'] = $this->M_crud->get_popular("blogs", "view");
				$data['edit'] = false;

				$this->load->view('template/header_admin');
				$this->load->view('template/navbar_admin');
				$this->load->view('admin/v_article', $data);
				$this->load->view('template/footer_admin');
			}else{
				$data['edit_article'] = $this->M_crud->get_where("blogs", array('id' => $id))->row_array();
				$data['edit'] = true;

				$this->load->view('template/header_admin');
				$this->load->view('template/navbar_admin');
				$this->load->view('admin/v_article', $data);
				$this->load->view('template/footer_admin');
			}
		}
	}

	public function detailarticle($id = null)
	{
		if ($this->login == false) {
			redirect('login_page','refresh');
		} else {
			if (is_null($id)) {
				redirect('page_error','refresh');
			} else {
				$data['detail'] = $this->M_crud->get_where("blogs", array('url' => $id))->row_array();

				$this->load->view('template/header_admin');
				$this->load->view('template/navbar_admin');
				$this->load->view('admin/v_detailartc', $data);
				$this->load->view('template/footer_admin');
			}
		}
	}

	public function addartc()
	{
		date_default_timezone_set('asia/jakarta');
		$current_date = date('y-m-d H:i:s');

		$nmfile = $this->M_crud->blog_image();
		$config['upload_path'] = './assets/img/blog/';
		$config['allowed_types'] = 'jpg';
		$config['file_name'] = $nmfile;
		$config['max_width']  = '1200';
		$config['min_width']  = '1200';
		$config['max_height']  = '675';
		$config['min_height']  = '675';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('cover')){
			$error = $this->upload->display_errors();
			$this->session->set_flashdata('message', "<div class='alert alert-warning alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>".$error."</div>");
			redirect('Dashboard/newarticle','refresh');
		}
		else{
			$data = array('upload_data' => $this->upload->data());
		}

		$data = array(
			'id' 		=> '', 
			'title'		=> $this->input->post('title'),
			'content' 	=> $this->input->post('description'),
			'url' 		=> $this->input->post('url'), 
			'cover' 	=> $nmfile,
			'author'	=> $this->input->post('author'),
			'date'		=> $current_date,
			'status'	=> $this->input->post('status')
		);

		if ($this->M_crud->save("blogs", $data)) {
			$this->session->set_flashdata('message', "<div class='alert alert-info alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Artikel Berhasil ditambahkan</div>");
			redirect('Dashboard/newarticle','refresh');
		} else {
			echo "<script>alert('Failed')</script>";
			redirect('Dashboard/article','refresh');
		}
	}

	public function deleteartc($id)
	{
		$query = $this->M_crud->get_where("blogs", array('id' => $id))->row();
		$path = 'assets/img/blog/'.$query->cover.".jpg";
		unlink($path);
		if ($this->M_crud->delete("blogs", array("id" => $id))) {
			redirect('dashboard/article','refresh');
		}
	}

	public function updateartc($id)
	{
		$field = array(
			'title'		=> $this->input->post('title'),
			'content' 	=> $this->input->post('description'),
			'url' 		=> $this->input->post('url'), 
			'author'	=> $this->input->post('author'),
			'status'	=> $this->input->post('status')
		);

		if ($this->M_crud->update("blogs", $field, array('id' => $id))) {
			redirect('dashboard/article','refresh');
		}
	}

	public function updatecover($id)
	{
		$nmfile = $this->M_crud->blog_image();
		$query = $this->M_crud->get_where("blogs", array('id' => $id))->row();

		$config['upload_path'] = 'assets/img/blog/';
		$config['allowed_types'] = 'jpg';
		$config['file_name'] = $nmfile;
		$config['max_width']  = '1200';
		$config['min_width']  = '1200';
		$config['max_height']  = '675';
		$config['min_height']  = '675';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('cover')){
			$error = $this->upload->display_errors();
			echo "<script>alert('$error')</script>";
			redirect('Dashboard/article','refresh');
        	return false;
		}
		else{
			$path = "assets/img/blog/".$query->cover.".jpg";
			unlink($path);
			$data = array('upload_data' => $this->upload->data());
		}

		if ($this->M_crud->update("blogs", array("cover" => $nmfile), array('id' => $id))) {
			redirect('dashboard/article','refresh');
		}
	}
	// -------------------------------- #END# ARTICLE ----------------------------------------

	// -------------------------------- FEEDBACK ----------------------------------------
	public function feedback()
	{
		if ($this->login == false) {
			redirect('login_page','refresh');
		} else {
			$data['feed_masalah'] = $this->M_crud->get_data("q_feedback_masalah");
			$data['feed_saran'] = $this->M_crud->get_data("q_feedback_saran");

			$this->load->view('template/header_admin');
			$this->load->view('template/navbar_admin');
			$this->load->view('admin/v_feedback', $data);
			$this->load->view('template/footer_admin');
		}
	}

	public function deletefeedback($id)
  	{
	    if ($this->M_crud->delete("feedback", array('id' => $id))) {
	      redirect('Dashboard/feedback','refresh');
	    }
  	}
	// -------------------------------- #END# FEEDBACK ----------------------------------------

  	// -------------------------------- SUBSCRIBER ----------------------------------------
  	public function subscribe()
  	{
  		if ($this->login == false) {
			redirect('login_page','refresh');
		} else {
			$data['subscribe_aktif'] = $this->M_crud->get_where("subscriber", array('aktif' => '1'));
			$data['subscribe_pasif'] = $this->M_crud->get_where("subscriber", array('aktif' => '0'));

			$this->load->view('template/header_admin');
			$this->load->view('template/navbar_admin');
			$this->load->view('admin/v_subscriber', $data);
			$this->load->view('template/footer_admin');
		}
  	}

  	public function deletesubscribe($id)
  	{
	    if ($this->M_crud->delete("subscriber", array('id' => $id))) {
	      redirect('Dashboard/subscribe','refresh');
	    }
  	}
  	// -------------------------------- #END# SUBSCRIBER ----------------------------------------

  	// -------------------------------- Email ----------------------------------------
  	public function email()
  	{
  		if ($this->login == false) {
			redirect('login_page','refresh');
		} else {
			$this->load->view('template/header_admin');
			$this->load->view('template/navbar_admin');
			$this->load->view('admin/v_email');
			$this->load->view('template/footer_admin');
		}
  	}

  	public function sendmail()
  	{
  		$from = array(
  			'email' => "muhamadjalaludin68@gmail.com", 
  			'name'	=> "Mahlul Tech"
  		);
  		$mailto = "";
  		$data['email'] = $this->M_crud->get_where("subscriber", array('aktif' => '1'))->result();
  		foreach ($data['email'] as $row) {
  			$mailto .= $row->email.', ';
  		}
  		$subject = $this->input->post('subject');
  		$message = $this->input->post('message');

  		if (sendemail($from, $mailto, $subject, $message)) {
  			$this->session->set_flashdata('message', "<div class='alert alert-info alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Berhasil Dikirim</div>");
			redirect('Dashboard/email','refresh');
  		} else {
  			$this->session->set_flashdata('message', "<div class='alert alert-info alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Gagal mengirim email</div>");
			redirect('Dashboard/email','refresh');
  		}
  	}
  	// -------------------------------- #END# Email ----------------------------------------

  	// -------------------------------- MANAGEMEN USER ----------------------------------------
  	public function manageuser()
  	{
  		if ($this->login == false) {
  			redirect('login_page','refresh');
  		} else {
  			$data['role'] = $this->M_crud->get_data("role");
  			$data['user'] = $this->M_crud->get_data("q_user");

  			$this->load->view('template/header_admin');
			$this->load->view('template/navbar_admin');
			$this->load->view('admin/v_user', $data);
			$this->load->view('template/footer_admin');
  		}
  	}

  	public function adduser()
  	{
  		if (validation("user", array('username' => $this->input->post('username')))) {
  			$username = $this->input->post('username');
  			$password = md5($this->input->post('password'));
	  		$field = array(
	  			'username' 	=> $username,
	  			'password' 	=> $password,
	  			'idrole'	=> $this->input->post('role')
	  		);

	  		if ($this->M_crud->save("user", $field)) {
	  			$this->session->set_flashdata('message', "<div class='alert alert-info alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Berhasil menambahkan user</div>");
				redirect('Dashboard/manageuser','refresh');
	  		} else {
	  			$this->session->set_flashdata('message', "<div class='alert alert-warning alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>User gagal ditambahkan</div>");
				redirect('Dashboard/manageuser','refresh');
	  		}
  		} else {
  			$this->session->set_flashdata('message', "<div class='alert alert-warning alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Username yang anda masukkan sudah ada</div>");
			redirect('Dashboard/manageuser','refresh');
  		}
  	}

  	public function deluser($id)
  	{
  		if ($this->M_crud->delete("user", array('id' => $id))) {
  			$this->session->set_flashdata('message', "<div class='alert alert-info alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Berhasil Dihapus</div>");
			redirect('Dashboard/manageuser','refresh');
  		} else {
  			$this->session->set_flashdata('message', "<div class='alert alert-info alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Gagal Dihapus</div>");
			redirect('Dashboard/manageuser','refresh');
  		}
  	}

  	public function managerole($edit = null, $id = null)
  	{
  		if ($this->login == false) {
  			redirect('login_page','refresh');
  		} else {
  			if ($edit == "edit") {
  				$data['edit_role'] = $this->M_crud->get_where("role", array('md5(id)' => $id))->row();
  				$data['role'] = $this->M_crud->get_data("role");
  				$data['edit'] = true;

	  			$this->load->view('template/header_admin');
				$this->load->view('template/navbar_admin');
				$this->load->view('admin/v_role', $data);
				$this->load->view('template/footer_admin');
  			} else {
  				$data['role'] = $this->M_crud->get_data("role");
  				$data['edit'] = false;

	  			$this->load->view('template/header_admin');
				$this->load->view('template/navbar_admin');
				$this->load->view('admin/v_role', $data);
				$this->load->view('template/footer_admin');
  			}
  			
  		}
  	}

  	public function addrole()
  	{
  		if (validation("role", array('nama' => $this->input->post('name')))) {
  			$name = $this->input->post('name');
	  		$field = array(
	  			'nama' 	=> $name,
	  		);

	  		if ($this->M_crud->save("role", $field)) {
	  			$this->session->set_flashdata('message', "<div class='alert alert-info alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Berhasil menambahkan role</div>");
				redirect('Dashboard/managerole','refresh');
	  		} else {
	  			$this->session->set_flashdata('message', "<div class='alert alert-warning alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Role gagal ditambahkan</div>");
				redirect('Dashboard/managerole','refresh');
	  		}
  		} else {
  			$this->session->set_flashdata('message', "<div class='alert alert-warning alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Role yang anda masukkan sudah ada</div>");
			redirect('Dashboard/managerole','refresh');
  		}
  	}

  	public function delrole($id)
  	{
  		if ($this->M_crud->delete("role", array('id' => $id))) {
  			$this->session->set_flashdata('message', "<div class='alert alert-info alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Berhasil Dihapus</div>");
			redirect('Dashboard/managerole','refresh');
  		} else {
  			$this->session->set_flashdata('message', "<div class='alert alert-info alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Gagal Dihapus</div>");
			redirect('Dashboard/managerole','refresh');
  		}
  	}

  	public function updaterole($id)
	{
		$field = array(
			'nama' 			=> $this->input->post('name')
		);

		if ($this->M_crud->update("role", $field, array('md5(id)' => $id))) {
			$this->session->set_flashdata('message', "<div class='alert alert-info alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Berhasil Di ubah</div>");
			redirect('Dashboard/managerole','refresh');
  		} else {
  			$this->session->set_flashdata('message', "<div class='alert alert-warning alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Gagal Di ubah</div>");
			redirect('Dashboard/managerole','refresh');
  		}
	}
  	// -------------------------------- #END# MANAGEMEN USER ----------------------------------------

  	// -------------------------------- PROFILE ----------------------------------------
  	public function profile()
  	{
  		if ($this->login == false) {
  			redirect('login_page','refresh');
  		} else {
  			$this->load->view('template/header_admin');
			$this->load->view('template/navbar_admin');
			$this->load->view('admin/v_profile');
			$this->load->view('template/footer_admin');
  		}
  	}

  	public function updatepass($id)
  	{
  		$oldpass = md5($this->input->post('oldpass'));
  		$newpass = md5($this->input->post('newpass'));
  		$this->db->where(array('md5(id)' => $id, 'password' => $oldpass));
  		$query = $this->db->get("user");

  		if ($query->num_rows() > 0) {
  			if ($this->M_crud->update("user", array('password' => $newpass), array('md5(id)' => $id))) {	
  				$this->session->set_flashdata('message', "<div class='alert alert-info alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Berhasil Di ubah</div>");
			redirect('Dashboard/profile','refresh');
  			} else {
  				$this->session->set_flashdata('message', "<div class='alert alert-warning alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Gagal Di ubah</div>");
			redirect('Dashboard/profile','refresh');
  			}
  			
  		}else{
  			$this->session->set_flashdata('message', "<div class='alert alert-warning alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Password lama yang anda masukkan salah</div>");
			redirect('Dashboard/profile','refresh');
  		}
  	}
  	// -------------------------------- #END# PROFILE ----------------------------------------
}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */