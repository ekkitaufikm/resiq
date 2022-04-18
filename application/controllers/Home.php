<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		check_not_login();
		$this->layout->load('landing/layout/mainlayout', 'landing/index');
	}
}
