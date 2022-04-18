<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ECommerce extends CI_Controller {

	public function produk()
	{
		check_not_login();
		$this->template->load('admin/template', 'admin/ecomerce/produk');
	}

	public function informasi_harga()
	{
		check_not_login();
		$this->template->load('admin/template', 'admin/ecomerce/informasi_harga');
	}

	public function edit_informasi1()
	{
		check_not_login();
		$this->template->load('admin/template', 'admin/ecomerce/edit_informasi1');
	}

	public function pembeli()	
	{
		check_not_login();
		$this->layout->load('admin/template', 'admin/ecomerce/ecom_pembeli');
	}

	public function tambahproduk()	
	{
		check_not_login();
		$this->layout->load('admin/template', 'admin/ecomerce/tambahproduk');
	}

	public function tambah_informasi()	
	{
		check_not_login();
		$this->layout->load('admin/template', 'admin/ecomerce/tambah_informasi');
	}
}