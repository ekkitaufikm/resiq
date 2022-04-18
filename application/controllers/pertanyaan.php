<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pertanyaan extends CI_Controller{

	public function rumahtangga()	
	{
		check_not_login();
		$this->layout->load('landing/layout/mainlayout', 'landing/quisioner/rumahtangga');
	}

	public function pemulung()	
	{
		check_not_login();
		$this->layout->load('landing/layout/mainlayout', 'landing/quisioner/pemulung');
    }
    
	public function pengepul()	
	{
		check_not_login();
		$this->layout->load('landing/layout/mainlayout', 'landing/quisioner/pengepul');
	}

}