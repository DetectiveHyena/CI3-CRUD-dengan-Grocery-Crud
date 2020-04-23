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
		$data['title'] = 'Contoh CRUD dengan GROCERY CRUD';

 		 $this->load->view('siswa/header',$data);
		 $this->load->view('siswa/index');
		 $this->load->view('siswa/footer');
	}


	/*public function indexs()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}
*/
	public function siswa()
	{
		$crud = new grocery_CRUD();
		$crud->set_theme('bootstrap');
		$crud->set_table('siswa');
		$output = $this->grocery_crud->render();

		$this->_example_output($output);
		//$this->load->view('siswas',$output);
	}

	public function _example_output($output = null)
	{
		$this->load->view('siswas',(array)$output);
	}


}
