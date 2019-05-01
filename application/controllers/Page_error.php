<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page_error extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('errors/v_error');
	}

}

/* End of file Error.php */
/* Location: ./application/controllers/Error.php */