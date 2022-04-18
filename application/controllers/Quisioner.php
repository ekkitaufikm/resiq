<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quisioner extends CI_Controller {

	function __construct() {
		parent::__construct();
		check_not_login();
		$this->load->model('quisioner_m');
	}

	public function index()
	{
		check_not_login();
		$this->template->load('admin/template', 'admin/quisioner');
	}

	public function answer()
	{
		check_not_login();
		$this->template->load('admin/template', 'admin/quisioner/answer');
	}

	public function pertanyaan1()
	{
		check_not_login();
		$this->template->load('admin/template', 'admin/quisioner/pertanyaan1');
	}

	public function pertanyaan2()
	{
		check_not_login();
		$this->template->load('admin/template', 'admin/quisioner/pertanyaan2');
	}

	public function pertanyaan3()
	{
		check_not_login();
		$this->template->load('admin/template', 'admin/quisioner/pertanyaan3');
	}

	public function edit_responden1()
	{
		check_not_login();
		$this->template->load('admin/template', 'admin/quisioner/edit_responden1');
	}

	public function edit_responden2()
	{
		check_not_login();
		$this->template->load('admin/template', 'admin/quisioner/edit_responden2');
	}

	public function edit_responden3()
	{
		check_not_login();
		$this->template->load('admin/template', 'admin/quisioner/edit_responden3');
	}

	public function penjawab1()
	{
		check_not_login();
		$this->template->load('admin/template', 'admin/quisioner/penjawab1');
	}

	public function penjawab2()
	{
		check_not_login();
		$this->template->load('admin/template', 'admin/quisioner/penjawab2');
	}

	public function penjawab3()
	{
		check_not_login();
		$this->template->load('admin/template', 'admin/quisioner/penjawab3');
	}

	public function add()
	{
		$tambah_responden = new stdClass();
		$tambah_responden -> idUJenis = null;
		$tambah_responden -> nama_responden = null;
		$tambah_responden -> jumlah_pertanyaan = null;
		$tambah_responden -> jumlah_pengisi = null;
		$data = array(
			'page' => 'add',
			'row' => $tambah_responden
		);
		$this->template->load('admin/template', 'admin/quisioner/quisioner_create', $data);
	}

	public function edit($id)
	{
		$query = $this->supplier_m->get($id);
		if ($query->num_rows() > 0) {
			$supplier = $query->row();
			$data = array(
				'page' => 'edit',
				'row' => $tambah_responden
			);
			$this->template->load('admin/template', 'admin/quisioner/quisioner_create', $data);
		}else {
			echo "<script> alert('Data tidak ditemukan');";
			echo "window.location='".site_url('quisioner')."'; </script>";
		}
	}

	public function process(Type $var = null)
	{
		$post=$this->input->post(null,TRUE);
		if (isset($_POST['add'])) {
			$this->quesioner_m->add($post);
		}else if (isset($_POST['edit'])) {
			$this->quesioner_m->edit($post);
		}
		if($this->db->affected_rows() > 0 ){
			echo "<script> alert('Data Berhasil disimpan!'); </script>";
		}
		echo "<script> window.location='".site_url('quisioner')."'; </script>";
	}

	public function del($id)
	{
		$this->quesioner_m->del($id);
		$error = $this->db->error();
		if ($error['code'] != 0) {
			echo "<script> alert('Data tidak dapat dihapus! (data sudah ber relasi)'); </script>";
		}else if($this->db->affected_rows() > 0 ){
			echo "<script> alert('Data Berhasil dihapus!'); </script>";
		}
		echo "<script> window.location='".site_url('quisioner')."'; </script>";
	}
}
