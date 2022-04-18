<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class jenisplastik extends CI_Controller {

	function __construct() {
		parent::__construct();
		check_not_login();
		$this->load->model('jenisplastik_m');
	}

	public function index()
	{
		check_not_login();
		$this->template->load('admin/template', 'admin/master/plastik_jenis');
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
		$this->template->load('admin/template', 'admin/master/plastikjenis_create', $data);
	}
}