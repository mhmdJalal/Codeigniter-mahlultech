<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_crud extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function auto_code($field, $as, $table, $kd = "portpolio-"){
		$kode = $kd;
		$this->db->select_max($field, $as);
		$query = $this->db->get($table);
		$row = $query->row_array();
		$auto_kd = $row[$as];
		$auto_kd1 = (int) substr($auto_kd, 10, 4);
		$auto_codes = $auto_kd1 + 1;
		$max_auto_code = $kode.sprintf("%04s", $auto_codes);
		return $max_auto_code;
	}

	public function blog_image($field = "cover", $as = "cover", $table = "blogs", $kd = "news-"){
		$kode = $kd;
		$this->db->select_max($field);
		$query = $this->db->get($table);
		$row = $query->row_array();
		$auto_kd = $row[$as];
		$auto_kd1 = (int) substr($auto_kd, 5, 4);
		$auto_codes = $auto_kd1 + 1;
		$max_auto_code = $kode.sprintf("%04s", $auto_codes);
		return $max_auto_code;
	}

	public function feedback_image($field = "foto", $as = "foto", $table = "feedback", $kd = "feedback-"){
		$kode = $kd;
		$this->db->select_max($field);
		$query = $this->db->get($table);
		$row = $query->row_array();
		$auto_kd = $row[$as];
		$auto_kd1 = (int) substr($auto_kd, 9, 4);
		$auto_codes = $auto_kd1 + 1;
		$max_auto_code = $kode.sprintf("%04s", $auto_codes);
		return $max_auto_code;
	}

	public function save($table, $data)
	{
		return $this->db->insert($table, $data);
	}
	
	public function delete($table, $where)
	{
		$this->db->where($where);
		return $this->db->delete($table);
	}

	public function update($table, $data, $where)
	{
		$this->db->where($where);
		return $this->db->update($table, $data);
	}

	function get_blog($table){
		$filter = $this->input->get('search');
		$this->db->like('title', $filter);
		return $this->db->get($table);
	}

	public function get_data($table,  $limit = null, $offset = null, $where = null)
	{
		if (is_null($limit) && is_null($offset) && is_null($where)) {
			// $this->db->order_by('date', 'desc');
			return $this->db->get($table);
		} else if (is_null($where)) {
			$filter = $this->input->get('search');
			$this->db->order_by('date', 'desc');
			$this->db->like('title', $filter);
			$this->db->limit($limit, $offset);
			return $this->db->get($table);
		} else {
			// $this->db->order_by('date', 'desc');
			$this->db->where($where);
			$this->db->limit($limit, $offset);
			return $this->db->get($table);
		}
	}

	public function get_portpolio($table,  $limit = null, $offset = null)
	{
		$this->db->limit($limit, $offset);
		return $this->db->get($table);
	}

	public function get_where($table, $where)
	{
		$this->db->where($where);
		return $this->db->get($table);
	}

	public function get_popular($table)
	{
		$this->db->order_by('view', 'desc');
		return $this->db->get($table, '3');
	}

	public function pageviewer($where)
	{
		$this->db->where($where);
		$query = $this->db->get('blogs');
		foreach ($query->result() as $row){
			$view = $row->view +1;
			$data['view'] = $view;
		}
		$this->db->where($where);
		$this->db->update('blogs', $data);
	}

	public function verify($where)
	{
		$field = array('aktif' => '1');
		$this->db->where($where);
		return $this->db->update("subscriber", $field);
	}

	public function validation($table, $where)
	{
		$this->db->where($where);
		$query = $this->db->get($table);
		if ($query->num_rows() > 0) {
			return false;
		} else {
			return true;
		}
	}
}

/* End of file M_crud.php */
/* Location: ./application/models/M_crud.php */