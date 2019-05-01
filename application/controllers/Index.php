<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
  }

  function index()
  {
    $data['title'] = "Mahlul Tech | Technology is a solution";
    $data['halaman'] = true;

    $this->load->view('template/header', $data);
    $this->load->view('template/navbar', $data);
    $this->load->view('pages/v_main_page');
    $this->load->view('template/footbar');
    $this->load->view('template/footer');
  }

  public function subscribe()
  {
    date_default_timezone_set('asia/jakarta');
    $current_date = date('Y-m-d H:i:s');
    $email = $this->input->post('email');
    $dt_email = $this->M_crud->get_where("subscriber", array('email' => $email))->num_rows();

    $subject = "Verify Your Email Address";
    $message = "Dear Subscriber,<br /><br />
                Please click on the below activation link to verify your email address.<br /><br />".
                base_url('index/verify/').md5($email) ."<br /><br /><br />
                Thanks<br /><br /><br />
                Mahlul Tech";
    $from = array(
      'email' => "muhamadjalaludin68@gmail.com", 
      'name'  => "Mahlul Tech"
    );

    $field = array(
      'email'   => $email,
      'date'    => $current_date
    );

    if ($dt_email > 0) {
      echo "<script>alert('Email yang Anda masukkan sudah terdaftar sebagai subscriber')</script>";
      redirect('','refresh');
    } else {
      if ($this->M_crud->save("subscriber", $field)) {
        if (sendemail($from, $email, $subject, $message)) {
          echo "<script>alert('Silakan cek email anda untuk proses verifikasi')</script>";
          redirect('','refresh');
        } else {
          redirect('','refresh');
        } 
      }
    }
    
  }

  public function verify($hash = null) {
    if (is_null($hash)) {
      redirect('','refresh');
    } else {
      if ($this->M_crud->verify(array('md5(email)' => $hash))) {
        // $this->session->set_flashdata("message", "Email sukses diverifikasi!");
        echo "<script>alert('Email Anda berhasil diverifikasi')</script>";
        redirect('','refresh');
      } else {
        // $this->session->set_flashdata("message", "Email gagal terverifikasi");
        echo "<script>alert('Email Anda gagal diverifikasi')</script>";
        redirect('','refresh');
      }
    }
    
  }

}
