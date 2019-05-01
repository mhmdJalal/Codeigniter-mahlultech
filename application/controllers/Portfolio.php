<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
  }

  function index($offset = 0)
  {
    $data['title'] = "Mahlul Tech | Technology is solution";
    $data['halaman'] = false;

    // $config['base_url'] = base_url('portfolio/index');
    // $config['total_rows'] = $this->M_crud->get_data("portpolio")->num_rows();
    // $config['per_page'] = 6;
    // $config['uri_segment']=3;

    // //Tambahan untuk styling
    // $config['full_tag_open'] = "<ul class='pagination'>";
    // $config['full_tag_close'] ="</ul>";

    // $config['num_tag_open'] = '<li>';
    // $config['num_tag_close'] = '</li>';

    // $config['cur_tag_open'] = "<li class='disabled'><li class='active teal lighten-2'><a href=''>";
    // $config['cur_tag_close'] = "</a></li>";

    // $config['next_tag_open'] = "<li>";
    // $config['next_tagl_close'] = "</li>";

    // $config['prev_tag_open'] = "<li>";
    // $config['prev_tagl_close'] = "</li>";

    // $config['first_tag_open'] = "<li>";
    // $config['first_tagl_close'] = "</li>";

    // $config['last_tag_open'] = "<li>";
    // $config['last_tagl_close'] = "</li>";
    
    // $this->pagination->initialize($config);
    
    $data['portpolio'] = $this->M_crud->get_data("portpolio")->result_array();
    $data['mobile'] = $this->M_crud->get_where("portpolio", array('kategori' => 'Android'));
    $data['website'] = $this->M_crud->get_where("portpolio", array('kategori' => 'Website'));
    $data['design'] = $this->M_crud->get_where("portpolio", array('kategori' => 'Design'));

    $this->load->view('template/header', $data);
    $this->load->view('template/navbar', $data);
    $this->load->view('portfolio/v_mainportfolio');
    $this->load->view('template/footbar');
    $this->load->view('template/footer');
  }

}
