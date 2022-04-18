<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

	public function stok()
	{
		check_not_login();
		$this->template->load('admin/template', 'admin/supplier/stok_plastik');
    }
    
    public function jual()	
	{
		check_not_login();
		$this->layout->load('admin/template', 'admin/supplier/permintaan_jual');
	}

	public function tambahstok_plastik1()	
	{
		check_not_login();
		$this->layout->load('admin/template', 'admin/supplier/tambahStock_plastik1');
	}

	public function tambahstok_plastik2()	
	{
		check_not_login();
		$this->layout->load('admin/template', 'admin/supplier/tambahStock_plastik2');
	}

	public function mutasi_plastik1()	
	{
		check_not_login();
		$this->layout->load('admin/template', 'admin/supplier/stokMutasi_plastik1');
	}

	public function mutasi_plastik2()	
	{
		check_not_login();
		$this->layout->load('admin/template', 'admin/supplier/stokMutasi_plastik2');
	}
}