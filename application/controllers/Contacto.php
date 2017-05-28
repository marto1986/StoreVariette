<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto extends CI_Controller {

	public function index()
	{
		$this->load->view('productos/headerProductos');
		$this->load->view('logo');
		$this->load->view('productos/navProductos');
		$this->load->view('contacto');
	}

	function insert(){
        
        if($this->input->post('email') == '' || $this->input->post('consulta') == ''){
         $this->session->set_flashdata('envio', 'Mensaje No Enviado. Debe Completar Todos los Datos. Gracias.');
         header("location:" . base_url() . "Contacto");
        }else{

	$nombre = $this->input->post('nombre');
	
       $nombre = $this->input->post('nombre');
       $datos['nombre'] = $nombre;
       $correo = $this->input->post('email');
       $datos['email'] = $correo;
       $datos['consulta'] = $this->input->post('consulta');

    if($nombre == '' || $destinatario = '' || $consulta = ''){
      $this->session->set_flashdata('envio', 'Debe Completar todos los datos. Gracias.');
      header("location:" . base_url() . "Contacto");
    }                  
    $this->contactoModel->insert($nombre, $correo, $consulta);

    $configurar = array(
      'mailtype' => 'html',
      'charset' => 'utf-8',
      'newline' => "\r\n"
    ); 
 
 $this->email->initialize($configurar);

    $this->email->from('info@storevariette.com.ar', 'STOREVARIETTE');
    $this->email->to('info@storevariette.com.ar', 'STOREVARIETTE');
    $this->email->cc('martinmatias@outlook.com', 'STOREVARIETTE');
    $this->email->subject('NUEVA CONSULTA WEB');
    $this->email->message($this->load->view('consulta', $datos, TRUE));
    
        if($this->email->send()){
            $this->session->set_flashdata('envio', 'E-mail Enviado Correctamente');
        }else{
            $this->session->set_flashdata('envio', 'No se a enviado el E-mail');
        }

   $this->email->from('info@storevariette.com.ar', 'STOREVARIETTE');
   $this->email->to($correo, 'STOREVARIETTE');
   $this->email->cc('martinmatias@outlook.com');
   $this->email->subject('CONSULTA WEB - STOREVARIETTE');
   $this->email->message($this->load->view('consultaCliente', $datos, TRUE));
   $this->email->send();

    header("location:" . base_url() . "Contacto");

	}
    }
}