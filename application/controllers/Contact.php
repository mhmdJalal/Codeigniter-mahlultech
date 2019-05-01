<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller{

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
    $this->load->view('contact/v_maincontact');
    $this->load->view('template/footbar');
    $this->load->view('template/footer');
  }

  public function send_email()
    {
      $from = array(
        'email' => $this->input->post('email'),
        'name'  => $this->input->post('name')
      );
      $mailto = "muhamadjalaludin68@gmail.com";
      $subject = "[Customer] ".$this->input->post('subject');
      $message = $this->input->post('message');
      
      if (sendemail($from, $mailto, $subject, $message)) {
        $this->session->set_flashdata('message', "<span class='teal-text'>Pesan berhasil dikirim</span>");
        redirect('contact','refresh');
      } else {
        $this->session->set_flashdata('message', "<span class='teal-text'>Terjadi kesalahan! pastikan data yang anda input sudah benar!</span>");
        redirect('contact','refresh');
      }
    }

  public function send_feedback()
  {
    date_default_timezone_set('asia/jakarta');
    $current_date = date('Y-m-d H:i:s');

    $nmfile = $this->M_crud->feedback_image();
    $config['upload_path'] = './assets/img/feedback/';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $config['file_name'] = $nmfile;
    
    $this->load->library('upload', $config);
    
    if ( ! $this->upload->do_upload('foto')){
      $error = $this->upload->display_errors();
      echo "<script>alert('$error')</script>";
      redirect('','refresh');
    }
    else{
      $image = array('upload_data' => $this->upload->data());
    }

    $field = array(
      'id'    => '', 
      'idkategori'  => $this->input->post('kategori'),
      'email' => $this->input->post('email'),
      'isi'   => $this->input->post('message'),
      'foto'  => $nmfile,
      'date'  => $current_date
    );

    if ($this->M_crud->save("feedback", $field)) {
      echo "<script>alert('Terima Kasih atas masukkan Anda')</script>";
      redirect('','refresh');
    }else{
      echo "<script>alert('Gagal mengirim pesan feedback')</script>";
      redirect('','refresh');
    }
  }

}
