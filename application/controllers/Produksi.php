<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produksi extends CI_Controller {

	public function stok_material()
	{
		check_not_login();
		$this->template->load('admin/template', 'admin/produksi/stok_material');
	}

	public function stok_paving()
	{
		check_not_login();
		$this->template->load('admin/template', 'admin/produksi/stokPaving');
	}

	public function tambahstok_paving()
	{
		check_not_login();
		$this->template->load('admin/template', 'admin/produksi/tambahstok_paving');
	}

	public function pilih_edit()	
	{
		check_not_login();
		$this->layout->load('admin/template', 'admin/produksi/pilih_edit');
	}
	
	public function tambahstok_material1()	
	{
		check_not_login();
		$this->layout->load('admin/template', 'admin/produksi/tambahStock_material1');
	}

	public function tambahstok_material2()	
	{
		check_not_login();
		$this->layout->load('admin/template', 'admin/produksi/tambahStock_material2');
	}

	public function mutasi_material1()	
	{
		check_not_login();
		$this->layout->load('admin/template', 'admin/produksi/stokMutasi_material1');
	}

	public function mutasi_material2()	
	{
		check_not_login();
		$this->layout->load('admin/template', 'admin/produksi/stokMutasi_material2');
	}

	public function produksi_paving()	
	{
		check_not_login();
		$this->layout->load('admin/template', 'admin/produksi/produksi_paving');
	}

	public function detail_produksi()	
	{
		check_not_login();
		$this->layout->load('admin/template', 'admin/produksi/detail_produksi');
	}
}