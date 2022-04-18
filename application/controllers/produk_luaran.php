<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class produk_luaran extends CI_Controller{

	public function paving()	
	{
		check_not_login();
		$this->layout->load('landing/layout/mainlayout', 'landing/paving');
	}

	public function kerajinan()	
	{
		check_not_login();
		$this->layout->load('landing/layout/mainlayout', 'landing/kerajinan');
    }

}