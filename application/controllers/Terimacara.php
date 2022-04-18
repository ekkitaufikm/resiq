<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Terimacara extends CI_Controller {

	function __construct() {
		parent::__construct();
		check_not_login();
		$this->load->model('terimacara_m');
	}

	public function index()
	{
		$this->template->load('admin/template', 'admin/terimacara/terimacara');
	}
	
	public function add()
	{
		$tambah_responden = new stdClass();
		$tambah_responden -> user_id = null;
		$tambah_responden -> nama = null;
		$data = array(
			'page' => 'add',
			'row' => $tambah_responden
		);
		$this->template->load('admin/template', 'admin/terimacara/terimacara_create', $data);
	}
}