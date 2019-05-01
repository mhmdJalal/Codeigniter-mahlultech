<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
  }

  function index($offset = 0)
  {
    date_default_timezone_set('Asia/Jakarta');
    $data['title'] = "Mahlul Tech | Technology is solution";
    $data['halaman'] = false;
    $query = $this->M_crud->get_data("q_blog_featured", 4, 0);
    $data['blogs_featured']    = $query->result_array();

    $config['base_url'] = base_url('blog/index');
    $config['total_rows'] = $this->M_crud->get_data("blogs")->num_rows();
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

    $get_data = $this->M_crud->get_data("blogs", $config['per_page'], $offset);
    $data['blogs'] = $get_data->result_array();
    $data['popular'] = $this->M_crud->get_popular("blogs", "view");
    if ($get_data->num_rows() == 0) {
      $this->load->view('errors/v_search_no_result');
    } else {
      $this->load->view('template/header', $data);
      $this->load->view('template/navbar', $data);
      $this->load->view('blogs/v_mainblog', $data);
      $this->load->view('template/footbar');
      $this->load->view('template/footer');
    }
  }

  function detail($url = null)
  {
    $query = $this->M_crud->get_where("blogs", array("url" => $url));
    $data['detail'] = $query->row_array();
    $data['halaman'] = false;

    if (is_null($url)) {
      $this->load->view('errors/v_error');
    } else {
      if ($query->num_rows() == 0) {
        $this->load->view('errors/v_error');
      } else {
        $data['title'] = $data['detail']['title'];

        $this->M_crud->pageviewer(array('url' => $url));

        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('blogs/v_detailblog', $data);
        $this->load->view('template/footbar');
        $this->load->view('template/footer');
      }
      
    }
    
  }

}
