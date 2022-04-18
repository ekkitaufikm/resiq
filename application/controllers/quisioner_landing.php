<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class quisioner_landing extends CI_Controller {

    public function quisioner()
	{
		check_not_login();
		$this->template->load('landing/layout/mainlayout','landing/quisioner');
    }
	public function pemulung()
	{
		check_not_login();
		$this->template->load('landing/layout/mainlayout','landing/quisioner/pemulung');
    }
    public function pengepul()
	{
		check_not_login();
		$this->template->load('landing/layout/mainlayout','landing/quisioner/pengepul');
    }
    public function rumahtangga()
	{
		check_not_login();
		$this->template->load('landing/layout/mainlayout','landing/quisioner/rumahtangga');
	}
}
