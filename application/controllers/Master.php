<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class master extends CI_Controller {

	public function dashboard()
	{
		check_not_login();
		$this->template->load('admin/template', 'admin/master/dashboard');
    }

    public function jenis_plastik()
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

    public function material_produksi()
	{
		check_not_login();
		$this->template->load('admin/template', 'admin/master/material_produksi');
    }

    public function kekuatan_paving()
	{
		check_not_login();
		$this->template->load('admin/template', 'admin/master/kekuatan_paving');
	}
	
	public function tambah_kekuatan()
	{
		check_not_login();
		$this->template->load('admin/template', 'admin/master/tambah_kekuatan');
	}
	
	public function tambah_material()
	{
		check_not_login();
		$this->template->load('admin/template', 'admin/master/tambah_material');
	}
	
	public function tambah_bentuk()
	{
		check_not_login();
		$this->template->load('admin/template', 'admin/master/tambah_bentuk');
	}
	

    public function bentuk_paving()
	{
		check_not_login();
		$this->template->load('admin/template', 'admin/master/bentuk_paving');
    }
}