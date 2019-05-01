<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
  }

  function index()
  {
    $data['title'] = "Mahlul Tech | Technology is solution";
    $data['halaman'] = false;

    $this->load->view('template/header', $data);
    $this->load->view('template/navbar', $data);
    $this->load->view('about/v_mainabout');
    $this->load->view('template/footbar');
    $this->load->view('template/footer');
  }

}
