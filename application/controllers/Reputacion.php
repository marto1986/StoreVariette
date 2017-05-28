<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reputacion extends CI_Controller {

	public function index()
	{
		$this->load->view('productos/headerProductos');
		$this->load->view('logo');
		$this->load->view('productos/navProductos');
		$this->load->view('reputacion');
		$this->load->view('footer');
	}
}