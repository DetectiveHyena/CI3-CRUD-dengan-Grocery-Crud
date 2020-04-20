<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cruds extends CI_Controller {


	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	public function index()
	{
		$data['title'] = 'Halaman Tampil Semua Siswa';

 		 $this->load->view('siswa/header',$data);
		 $this->load->view('siswa/index');
		 $this->load->view('siswa/footer');
	}
}
