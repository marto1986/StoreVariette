<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index(){
		$this->load->view('admin/header');
		$this->load->view('admin/users');
	}

	public function ingresar(){

		$user = $this->input->post('user');
		$password = $this->input->post('password');
		
		$check_user = $this->loginModel->getUser($user, $password);
		if($check_user == TRUE)
		{
		$data = array(
	                'is_logued_in' 	=> 	TRUE,
	                'id' 	        => 	$check_user->id,
	                'user' 		=> 	$check_user->user,
                        'password' 	=> 	$check_user->password
            		);		
		$this->session->set_userdata($data);
		redirect(base_url().'admin');
		}
		else{
			redirect(base_url().'login');
		}
               
}

	function logout(){

		$this->session->sess_destroy();
		header("location:" . base_url() . "login");
	}
}

?>