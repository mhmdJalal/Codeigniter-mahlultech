<?php
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	/**
	 * Function Name
	 *
	 * Function description
	 *
	 * @access	public
	 * @param	type	name
	 * @return	type	
	 */
	 
	if (! function_exists('function_helper'))
	{
		function date_indo($date)
		{
			$month = array(
				'1'	=> 'Januari',
				'2'	=> 'Februari',
				'3'	=> 'Maret',
				'4'	=> 'April',
				'5'	=> 'Mei',
				'6'	=> 'Juni',
				'7'	=> 'Juli',
				'8'	=> 'Agustus',
				'9'	=> 'September',
				'10'	=> 'Oktober',
				'11'	=> 'November',
				'12'	=> 'Desember'
			);

			$explode = explode('-', $date);

			return $explode[2] . ' ' . $month[ (int)$explode[1] ] . ' ' . $explode[0];
		}

		function date_article($date)
		{
			$posted = "";
			$awal  = date_create($date);

		    $akhir = date_create();
		    $diff  = date_diff( $akhir, $awal );
		    $posted = "";
		    if ($diff->h > 0) {
		    	$date = strtotime($blog['date']);
		    	// $posted .= date('D,').date_indo(date('Y-m-d', $date));
		    	$posted .= date('D, d F Y', $date);
		    } else {
		    	$posted .= $diff->h." Jam lalu";
		    }
		}

		function selisih_minggu($date)
		{
			$detik = 24 * 3600;
			$tgl_awal  = date_create($date);
			$tgl_akhir = date_create();

			$minggu = 0;
			
			for ($i=$tgl_awal; $i < $tgl_akhir; $i += $detik)
			{
				if (date("w", $i) == "0"){
					$minggu++;
				}
			}
			
			return $minggu;
		}

		function sendemail($from, $mailto, $subject, $message)
		{
			$ci =& get_instance();
	        $ci->load->library('email');

	  		$config = Array(
		      'protocol' => 'smtp',
		      'smtp_host' => 'ssl://smtp.googlemail.com',
		      'smtp_user' => 'muhamadjalaludin68@gmail.com',
		      'smtp_pass' => 'jalal060801', 
		      'smtp_crypto' => 'SSL',
		      'smtp_port'	=> 465,
		      'mailtype' => 'html',
		      'charset'   => 'utf-8',
		      'wordwrap' => TRUE,
		      'validate'	=> TRUE,
		      'crlf'      => "\r\n",
	          'newline'   => "\r\n"
		    );

	  		$ci->email->initialize($config);
	  		
	  		$ci->email->from($from['email'], $from['name']);
	  		$ci->email->to($mailto);
	  		
	  		$ci->email->subject($subject);
	  		$ci->email->message($message);
	  		
	  		if ($ci->email->send()) {
	  			return $ci->email->send();
	  		} else {
	  			return $ci->email->print_debugger();
	  		}
		}

		function validation($table, $where)
		{
			$ci =& get_instance();
			$ci->db->where($where);
			$query = $ci->db->get($table);
			if ($query->num_rows() > 0) {
				return false;
			} else {
				return true;
			}
		}
	}
 ?>