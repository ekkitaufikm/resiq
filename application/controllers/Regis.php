<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regis extends CI_Controller {

	public function register()
	{
		$this->load->view('admin/register');
    }

    public function add(Type $var = null)
	{
		$this->form_validation->set_rules('level','Level','required');
		$this->form_validation->set_rules('username','Username','required|min_length[5]|is_unique[user.username]');
		$this->form_validation->set_rules('password','Password','required|min_length[5]');
		$this->form_validation->set_rules('passconf','Confirm Password ','required|matches[password]',
			array('matches' => 'konfirmasi password tidak sesuai')
		);
		$this->form_validation->set_rules('email','Email','required|min_length[5]');
		$this->form_validation->set_rules('no_hp','No_hp','required|min_length[5]');

		$this->form_validation->set_message('required','%s harus di isi');
		$this->form_validation->set_message('min_length','%s minimal 5 karakter');
		$this->form_validation->set_message('is_unique','%s sudah dipakai, cari username lain');

		$this->form_validation->set_error_delimiters('<span class="help-block">','</span>');
		
		if($this->form_validation->run() == FALSE){
			// $this->load->view('myform');
			$this->template->load('admin/template','admin/register');
		}else{
			// $this->load->view('formsuccess');
			// echo "proses add";
			$post = $this->input->post(null, TRUE);
			$this->user_m->add($post);
			if($this->db->affected_rows() > 0 ){
				echo "<script>
					alert('Data Berhasil disimpan!');
				</script>";
			}
			echo "<script>
					window.location='".site_url('auth/login')."';
				</script>";
		}
	}
}