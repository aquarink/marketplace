<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProdukController extends CI_Controller { 

	function __construct() 
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->helper('form');

		$this->load->library('session');
		$this->load->library('user_agent');
		$this->load->library('form_validation');

		// $this->load->model('Menu_Model');
	}

	public function index()
	{
		echo "Forbhident access : 404";
	}

	public function tambah()
	{
		$data = array(
						// title/page
			'title' => 'Tambah Produk',
						// folder/file
			'page' => 'produk/tambah'
		);
		$this->load->view('templates/back/back-template', $data);
	}
}
