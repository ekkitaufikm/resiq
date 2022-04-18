<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Request extends CI_Controller {

	public function index()
	{
		check_not_login();
		$this->template->load('admin/template', 'admin/request');
    }
}