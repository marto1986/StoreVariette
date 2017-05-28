<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Catalogo extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->model('catalogoModel');
    }

    function comprar(){
        $CI = &get_instance();
        $CI->config->load("mercadopago", TRUE);
        $config = $CI->config->item('mercadopago');
        $this->load->library('Mercadopago', $config);
    }
    
    function lista_productos(){
        $datos['titulo'] = 'Listado de Productos';
        $datos['contenido'] = 'lista_productos';
        $this->load->view('productos/headerProductos');
        $this->load->view('logo');
        $this->load->view('productos/navProductos');
        $this->load->view('productos/carro', $datos);
        $this->load->view('productos/footer');
    }

function enviar(){
       
        $opciones = array();
        if($this->input->post('opciones')){
            $opciones = $this->input->post('opciones');
        }

        $data = array(
                'id' => $this->input->post('id'),
                'qty' => $this->input->post('cantidad'),
                'price' => $this->input->post('precio'),
                'name' => $this->input->post('nombre'),
                'options' => $opciones 
            );

        $this->cart->insert($data);
        $this->load->view('productos/headerProductos');
        $this->load->view('logo');
        $this->load->view('productos/navProductos');
        $this->load->view('productos/finalizarCompra');
        $this->load->view('productos/footer');
}

function enviarCompra(){

        $id = array();
        if($this->input->post('id')){
            $id = $this->input->post('id');
        }

    $cantidad = array();
        if($this->input->post('qty')){
            $cantidad = $this->input->post('qty');
        }

    $subtotal = array();
        if($this->input->post('subtotal')){
            $subtotal = $this->input->post('subtotal');
        }

    $total = array();
        if($this->input->post('total')){
            $total = $this->input->post('total');
        }

    $precio = array();
        if($this->input->post('price')){
            $precio = $this->input->post('price');
        }

    $nombre = array();
        if($this->input->post('nombre')){
            $nombre = $this->input->post('nombre');
        }

    $detalle1 = array();
        if($this->input->post('detalle1')){
            $detalle1 = $this->input->post('detalle1');
        }

    $detalle2 = array();
        if($this->input->post('detalle2')){
            $detalle2 = $this->input->post('detalle2');
        }

	        $datos['nomape'] = $this->input->post('nomape');
                $datos['tel'] = $this->input->post('tel');
                $correo = $this->input->post('correo');
                $datos['correo'] = $correo;
                $datos['id'] = $id;
                $datos['cantidad'] = $cantidad;
                $datos['subtotal'] = $subtotal;
                $datos['total'] = $total;
                $datos['precio'] = $precio;
                $datos['nombre'] = $nombre;
                $datos['detalle1'] = $detalle1;
                $datos['detalle2'] = $detalle2;

    $configurar = array(
      'mailtype' => 'html',
      'charset' => 'utf-8',
      'newline' => "\r\n"
    ); 
 
 $this->email->initialize($configurar);
    
    $this->email->from('info@storevariette.com.ar', 'STOREVARIETTE');
    $this->email->to('martinmatias@outlook.com', 'STOREVARIETTE');
    $this->email->to('info@storevariette.com.ar', 'STOREVARIETTE');
    $this->email->subject('COMPRA WEB');
    $this->email->message($this->load->view('compra', $datos, TRUE));

 if($this->email->send()){
            $this->session->set_flashdata('envio', 'ORDEN DE COMPRA ENVíADA CORRECTAMENTE');
        }else{
            $this->session->set_flashdata('envio', 'NO SE PUDO ENVIAR');
        }
    
   $this->email->from('info@storevariette.com.ar', 'STOREVARIETTE');
   $this->email->to($correo, 'STOREVARIETTE');
   $this->email->subject('COMPRA WEB');
   $this->email->message($this->load->view('compraCliente', $datos, TRUE));
   $this->email->send();

    header("location:" . base_url() . "catalogo/enviar");
}

    function agregar(){
     
        $opciones = array();
        if($this->input->post('opciones')){
            $opciones = $this->input->post('opciones');
        }

        $data = array(
                'id' => $this->input->post('id'),
                'qty' => $this->input->post('cantidad'),
                'price' => $this->input->post('precio'),
                'name' => $this->input->post('nombre'),
                'options' => $opciones 
            );

        $this->cart->insert($data);
        header("location:" . base_url() . "catalogo/carrito");
    }

    function carrito(){
        $this->load->view('productos/headerProductos');
        $this->load->view('logo');
        $this->load->view('productos/navProductos');
        $this->load->view('productos/carrito');
        $this->load->view('productos/footer');
    }

    function mostrar(){

        $datos['titulo'] = 'Listado de Productos';
        $datos['contenido'] = 'carrito';

        $this->load->view('');
    }

    function vaciar(){
        
        $this->cart->destroy();
        header("location:" . base_url() . "catalogo/carrito");
    }

    function actualizar(){
        
        $data = $this->input->post();
        $this->cart->update($data);
        header("location:" . base_url() . "catalogo/carrito");
    }

    function eliminarProducto($rowid) 
    {
        //para eliminar un producto en especifico lo que hacemos es conseguir su id
        //y actualizarlo poniendo qty que es la cantidad a 0
        $producto = array(
            'rowid' => $rowid,
            'qty' => 0
        );
        //después simplemente utilizamos la función update de la librería cart
        //para actualizar el carrito pasando el array a actualizar
        $this->cart->update($producto);
        
        $this->session->set_flashdata('productoEliminado', 'El producto fue eliminado correctamente');
        header("location:" . base_url() . "catalogo/carrito");
    }

}