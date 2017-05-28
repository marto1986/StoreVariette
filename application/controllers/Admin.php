<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
          if($this->session->userdata('user') == FALSE || $this->session->userdata('password') == FALSE)
		{
			redirect(base_url().'login');
		}
		
		$this->load->view('admin/header');
		$this->load->view('admin/nav');
		$this->load->view('productos/footer');
	}
}