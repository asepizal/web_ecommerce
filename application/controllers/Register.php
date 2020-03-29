<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends MY_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$is_login	= $this->session->userdata('is_login');

		if ($is_login) {
			redirect(base_url());
			return;
		}
	}

	public function index()
	{
		if (!$_POST) {
			$input	= (object) $this->register->getDefaultValues();
		} else {
			// returns all POST items with XSS filter
			$input 	= (object) $this->input->post(null, true);
		}

		// fungsi validate berada pada class MY_model
		// jika fungsi validate gagal maka akan masuk ke halaman registrasi lagi 
		if (!$this->register->validate()) {
			$data['title']	= 'Register';
			$data['input']	= $input;
			$data['pages']	= 'pages/auth/register';
			$this->viewTemplates($data);
			return;
		}

		if ($this->register->run($input)) {
			$this->session->set_flashdata('success', 'Berhasil melakukan registrasi!');
			redirect(base_url());
		} else {
			$this->session->set_flashdata('error', 'Oops! Terjadi suatu kesalahan!');
			redirect(base_url('/register'));
		}
	}
	

}

/* End of file Register.php */
