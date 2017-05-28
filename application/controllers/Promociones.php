<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promociones extends CI_Controller {

	public function index()
	{
		$this->load->view('productos/headerProductos');
		$this->load->view('logo');
		$this->load->view('productos/navProductos');
		$this->load->view('promociones');
		$this->load->view('footer');
	}
}