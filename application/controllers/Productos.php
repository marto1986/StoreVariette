<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {

	public function index()
	{
		$this->load->view('productos/headerProductos');
		$this->load->view('logo');
		$this->load->view('productos/navProductos');
		$this->load->view('productos/productos');
		$this->load->view('productos/footer');
	}

	function batas(){
		$data = array(
			'batas' => $this->batasModel->mostrar()
		);

		$this->load->view('productos/headerProductos');
		$this->load->view('logo');
		$this->load->view('productos/navProductos');
		$this->load->view('productos/batas/batas', $data);
		$this->load->view('productos/footer');
	}

	function batasBebes(){
		$data = array(
			'batas' => $this->batasModel->mostrar()
		);

		$this->load->view('productos/headerProductos');
		$this->load->view('logo');
		$this->load->view('productos/navProductos');
		$this->load->view('productos/batas/bebes', $data);
		$this->load->view('productos/footer');
	}

	function batasAdultos(){
		$data = array(
			'batas' => $this->batasModel->mostrar()
		);

		$this->load->view('productos/headerProductos');
		$this->load->view('logo');
		$this->load->view('productos/navProductos');
		$this->load->view('productos/batas/adultos', $data);
		$this->load->view('productos/footer');
	}

	function pantuflas(){
		$data = array(
			'pantufla' => $this->pantuflasModel->mostrar()
		);

		$this->load->view('productos/headerProductos');
		$this->load->view('logo');
		$this->load->view('productos/navProductos');
		$this->load->view('productos/pantuflas/pantuflas', $data);
		$this->load->view('productos/footer');
	}

	function chinelas(){
		$data = array(
			'chinela' => $this->chinelasModel->mostrar()
		);

		$this->load->view('productos/headerProductos');
		$this->load->view('logo');
		$this->load->view('productos/navProductos');
		$this->load->view('productos/chinelas/chinelas', $data);
		$this->load->view('productos/footer');
	}

	function toallas(){
		$data = array(
			'toallas' => $this->toallasModel->mostrar()
		);

		$this->load->view('productos/headerProductos');
		$this->load->view('logo');
		$this->load->view('productos/navProductos');
		$this->load->view('productos/toallas/toallas', $data);
		$this->load->view('productos/footer');
	}

	function toallon(){
		$data = array(
			'toallas' => $this->toallasModel->mostrar()
		);

		$this->load->view('productos/headerProductos');
		$this->load->view('logo');
		$this->load->view('productos/navProductos');
		$this->load->view('productos/toallas/toallon', $data);
		$this->load->view('productos/footer');
	}

	function souvenirs(){
		$data = array(
			'souvenirs' => $this->souvenirsModel->mostrar()
		);

		$this->load->view('productos/headerProductos');
		$this->load->view('logo');
		$this->load->view('productos/navProductos');
		$this->load->view('productos/souvenirs/souvenirs', $data);
		$this->load->view('productos/footer');
	}

	function viewBebes(){
		$id = $this->uri->segment(3);
		$datos = $this->batasModel->obtener($id);
		
		if($datos != false){
			foreach($datos as $row){
				$nombre = $row->nombre;
				$titulo = $row->titulo;
				$subTitulo = $row->subTitulo;
				$opcional = $row->opcional;
				$descripcion = $row->descripcion;
				$condicion = $row->condicion;
				$colores = $row->colores;
				$pagos = $row->pagos;
				$envios = $row->envios;
				$consultas = $row->consultas;
				$email = $row->email;
				$whatsapp = $row->whatsapp;
				$tabla = $row->tabla;
				$collage = $row->collage;
				$precio = $row->precio;
				$bebes = $row->bebes;
				$ninos = $row->ninos;
				$adultos = $row->adultos;
				$foto = $row->foto;
				$foto2 = $row->foto2;
				$foto3 = $row->foto3;
				$foto4 = $row->foto4;
				$foto5 = $row->foto5;
			}

			$data = array(
				'id' => $id,
				'nombre' => $nombre,
				'titulo' => $titulo,
	            'subTitulo' => $subTitulo,
	            'opcional' => $opcional,
	            'descripcion' => $descripcion,
	            'condicion' => $condicion,
	            'colores' => $colores,
	            'pagos' => $pagos,
	            'envios' => $envios,
	            'consultas' => $consultas,
	            'email' => $email,
	            'whatsapp' => $whatsapp,
	            'tabla' => $tabla,
	            'collage' => $collage,
				'precio' => $precio,
				'bebes' => $bebes,
				'ninos' => $ninos,
				'adultos' => $adultos,
				'foto' => $foto,
				'foto2' => $foto2,
				'foto3' => $foto3,
				'foto4' => $foto4,
				'foto5' => $foto5
				);
			}else{
				return false;
			}

		$this->load->view('productos/headerProductos');
		$this->load->view('logo');
		$this->load->view('productos/navProductos');
		$this->load->view('productos/batas/verBebes', $data);
		$this->load->view('productos/footer');
	}

	function viewAdultos(){
		$id = $this->uri->segment(3);
		$datos = $this->batasModel->obtener($id);
		
		if($datos != false){
			foreach($datos as $row){
				$nombre = $row->nombre;
				$titulo = $row->titulo;
				$subTitulo = $row->subTitulo;
				$opcional = $row->opcional;
				$descripcion = $row->descripcion;
				$condicion = $row->condicion;
				$colores = $row->colores;
				$pagos = $row->pagos;
				$envios = $row->envios;
				$consultas = $row->consultas;
				$email = $row->email;
				$whatsapp = $row->whatsapp;
				$tabla = $row->tabla;
				$collage = $row->collage;
				$precio = $row->precio;
				$bebes = $row->bebes;
				$ninos = $row->ninos;
				$adultos = $row->adultos;
				$foto = $row->foto;
				$foto2 = $row->foto2;
				$foto3 = $row->foto3;
				$foto4 = $row->foto4;
				$foto5 = $row->foto5;
			}

			$data = array(
				'id' => $id,
				'nombre' => $nombre,
				'titulo' => $titulo,
	            'subTitulo' => $subTitulo,
	            'opcional' => $opcional,
	            'descripcion' => $descripcion,
	            'condicion' => $condicion,
	            'colores' => $colores,
	            'pagos' => $pagos,
	            'envios' => $envios,
	            'consultas' => $consultas,
	            'email' => $email,
	            'whatsapp' => $whatsapp,
	            'tabla' => $tabla,
	            'collage' => $collage,
				'precio' => $precio,
				'bebes' => $bebes,
				'ninos' => $ninos,
				'adultos' => $adultos,
				'foto' => $foto,
				'foto2' => $foto2,
				'foto3' => $foto3,
				'foto4' => $foto4,
				'foto5' => $foto5
				);
			}else{
				return false;
			}

		$this->load->view('productos/headerProductos');
		$this->load->view('logo');
		$this->load->view('productos/navProductos');
		$this->load->view('productos/batas/verAdultos', $data);
		$this->load->view('productos/footer');
	}

	function viewBatas(){
		$id = $this->uri->segment(3);
		$datos = $this->batasModel->obtener($id);
		
		if($datos != false){
			foreach($datos as $row){
				$nombre = $row->nombre;
				$titulo = $row->titulo;
				$subTitulo = $row->subTitulo;
				$opcional = $row->opcional;
				$descripcion = $row->descripcion;
				$condicion = $row->condicion;
				$colores = $row->colores;
				$pagos = $row->pagos;
				$envios = $row->envios;
				$consultas = $row->consultas;
				$email = $row->email;
				$whatsapp = $row->whatsapp;
				$tabla = $row->tabla;
				$collage = $row->collage;
				$precio = $row->precio;
				$bebes = $row->bebes;
				$ninos = $row->ninos;
				$adultos = $row->adultos;
				$foto = $row->foto;
				$foto2 = $row->foto2;
				$foto3 = $row->foto3;
				$foto4 = $row->foto4;
				$foto5 = $row->foto5;
			}

			$data = array(
				'id' => $id,
				'nombre' => $nombre,
				'titulo' => $titulo,
	            'subTitulo' => $subTitulo,
	            'opcional' => $opcional,
	            'descripcion' => $descripcion,
	            'condicion' => $condicion,
	            'colores' => $colores,
	            'pagos' => $pagos,
	            'envios' => $envios,
	            'consultas' => $consultas,
	            'email' => $email,
	            'whatsapp' => $whatsapp,
	            'tabla' => $tabla,
	            'collage' => $collage,
				'precio' => $precio,
				'bebes' => $bebes,
				'ninos' => $ninos,
				'adultos' => $adultos,
				'foto' => $foto,
				'foto2' => $foto2,
				'foto3' => $foto3,
				'foto4' => $foto4,
				'foto5' => $foto5
				);
			}else{
				return false;
			}

		$this->load->view('productos/headerProductos');
		$this->load->view('logo');
		$this->load->view('productos/navProductos');
		$this->load->view('productos/batas/verNinos', $data);
		$this->load->view('productos/footer');
	}

	function viewPantuflas(){
		$id = $this->uri->segment(3);
		$datos = $this->pantuflasModel->obtener($id);
		
		if($datos != false){
			foreach($datos as $row){
				$nombre = $row->nombre;
				$titulo = $row->titulo;
				$subTitulo = $row->subTitulo;
				$opcional = $row->opcional;
				$descripcion = $row->descripcion;
				$condicion = $row->condicion;
				$colores = $row->colores;
				$pagos = $row->pagos;
				$envios = $row->envios;
				$consultas = $row->consultas;
				$email = $row->email;
				$whatsapp = $row->whatsapp;
				$tabla = $row->tabla;
				$collage = $row->collage;
				$precio = $row->precio;
				$articulo = $row->articulo;
				$foto = $row->foto;
				$foto2 = $row->foto2;
				$foto3 = $row->foto3;
				$foto4 = $row->foto4;
				$foto5 = $row->foto5;
			}

			$data = array(
				'id' => $id,
				'nombre' => $nombre,
				'titulo' => $titulo,
	            'subTitulo' => $subTitulo,
	            'opcional' => $opcional,
	            'descripcion' => $descripcion,
	            'condicion' => $condicion,
	            'colores' => $colores,
	            'pagos' => $pagos,
	            'envios' => $envios,
	            'consultas' => $consultas,
	            'email' => $email,
	            'whatsapp' => $whatsapp,
	            'tabla' => $tabla,
	            'collage' => $collage,
				'precio' => $precio,
				'articulo' => $articulo,
				'foto' => $foto,
				'foto2' => $foto2,
				'foto3' => $foto3,
				'foto4' => $foto4,
				'foto5' => $foto5
				);
			}else{
				return false;
			}

		$this->load->view('productos/headerProductos');
		$this->load->view('logo');
		$this->load->view('productos/navProductos');
		$this->load->view('productos/pantuflas/verPantuflas', $data);
		$this->load->view('productos/footer');
	}

	function viewChinelas(){
		$id = $this->uri->segment(3);
		$datos = $this->chinelasModel->obtener($id);
		
		if($datos != false){
			foreach($datos as $row){
				$nombre = $row->nombre;
				$titulo = $row->titulo;
				$subTitulo = $row->subTitulo;
				$opcional = $row->opcional;
				$descripcion = $row->descripcion;
				$condicion = $row->condicion;
				$colores = $row->colores;
				$pagos = $row->pagos;
				$envios = $row->envios;
				$consultas = $row->consultas;
				$email = $row->email;
				$whatsapp = $row->whatsapp;
				$tabla = $row->tabla;
				$collage = $row->collage;
				$precio = $row->precio;
				$articulo = $row->articulo;
				$foto = $row->foto;
				$foto2 = $row->foto2;
				$foto3 = $row->foto3;
				$foto4 = $row->foto4;
				$foto5 = $row->foto5;
			}

			$data = array(
				'id' => $id,
				'nombre' => $nombre,
				'titulo' => $titulo,
	            'subTitulo' => $subTitulo,
	            'opcional' => $opcional,
	            'descripcion' => $descripcion,
	            'condicion' => $condicion,
	            'colores' => $colores,
	            'pagos' => $pagos,
	            'envios' => $envios,
	            'consultas' => $consultas,
	            'email' => $email,
	            'whatsapp' => $whatsapp,
	            'tabla' => $tabla,
	            'collage' => $collage,
				'precio' => $precio,
				'articulo' => $articulo,
				'foto' => $foto,
				'foto2' => $foto2,
				'foto3' => $foto3,
				'foto4' => $foto4,
				'foto5' => $foto5
				);
			}else{
				return false;
			}

		$this->load->view('productos/headerProductos');
		$this->load->view('logo');
		$this->load->view('productos/navProductos');
		$this->load->view('productos/chinelas/verChinelas', $data);
		$this->load->view('productos/footer');
	}

	function viewToallas(){
		$id = $this->uri->segment(3);
		$datos = $this->toallasModel->obtener($id);
		
		if($datos != false){
			foreach($datos as $row){
				$nombre = $row->nombre;
				$titulo = $row->titulo;
				$subTitulo = $row->subTitulo;
				$opcional = $row->opcional;
				$descripcion = $row->descripcion;
				$condicion = $row->condicion;
				$colores = $row->colores;
				$pagos = $row->pagos;
				$envios = $row->envios;
				$consultas = $row->consultas;
				$email = $row->email;
				$whatsapp = $row->whatsapp;
				$tabla = $row->tabla;
				$collage = $row->collage;
				$precio = $row->precio;
				$toalla = $row->toalla;
				$toallon = $row->toallon;
				$foto = $row->foto;
				$foto2 = $row->foto2;
				$foto3 = $row->foto3;
				$foto4 = $row->foto4;
				$foto5 = $row->foto5;
			}

			$data = array(
				'id' => $id,
				'nombre' => $nombre,
				'titulo' => $titulo,
	            'subTitulo' => $subTitulo,
	            'opcional' => $opcional,
	            'descripcion' => $descripcion,
	            'condicion' => $condicion,
	            'colores' => $colores,
	            'pagos' => $pagos,
	            'envios' => $envios,
	            'consultas' => $consultas,
	            'email' => $email,
	            'whatsapp' => $whatsapp,
	            'tabla' => $tabla,
	            'collage' => $collage,
				'precio' => $precio,
				'toalla' => $toalla,
				'toallon' => $toallon,
				'foto' => $foto,
				'foto2' => $foto2,
				'foto3' => $foto3,
				'foto4' => $foto4,
				'foto5' => $foto5
				);
			}else{
				return false;
			}


		$this->load->view('productos/headerProductos');
		$this->load->view('logo');
		$this->load->view('productos/navProductos');
		$this->load->view('productos/toallas/verToallas', $data);
		$this->load->view('productos/footer');
	}

	function viewToallon(){
		$id = $this->uri->segment(3);
		$datos = $this->toallasModel->obtener($id);
		
		if($datos != false){
			foreach($datos as $row){
				$nombre = $row->nombre;
				$titulo = $row->titulo;
				$subTitulo = $row->subTitulo;
				$opcional = $row->opcional;
				$descripcion = $row->descripcion;
				$condicion = $row->condicion;
				$colores = $row->colores;
				$pagos = $row->pagos;
				$envios = $row->envios;
				$consultas = $row->consultas;
				$email = $row->email;
				$whatsapp = $row->whatsapp;
				$tabla = $row->tabla;
				$collage = $row->collage;
				$precio = $row->precio;
				$toalla = $row->toalla;
				$toallon = $row->toallon;
				$foto = $row->foto;
				$foto2 = $row->foto2;
				$foto3 = $row->foto3;
				$foto4 = $row->foto4;
				$foto5 = $row->foto5;
			}

			$data = array(
				'id' => $id,
				'nombre' => $nombre,
				'titulo' => $titulo,
	            'subTitulo' => $subTitulo,
	            'opcional' => $opcional,
	            'descripcion' => $descripcion,
	            'condicion' => $condicion,
	            'colores' => $colores,
	            'pagos' => $pagos,
	            'envios' => $envios,
	            'consultas' => $consultas,
	            'email' => $email,
	            'whatsapp' => $whatsapp,
	            'tabla' => $tabla,
	            'collage' => $collage,
				'precio' => $precio,
				'toalla' => $toalla,
				'toallon' => $toallon,
				'foto' => $foto,
				'foto2' => $foto2,
				'foto3' => $foto3,
				'foto4' => $foto4,
				'foto5' => $foto5
				);
			}else{
				return false;
			}


		$this->load->view('productos/headerProductos');
		$this->load->view('logo');
		$this->load->view('productos/navProductos');
		$this->load->view('productos/toallas/verToallon', $data);
		$this->load->view('productos/footer');
	}

	function viewSouvenirs(){
		$id = $this->uri->segment(3);
		$datos = $this->souvenirsModel->obtener($id);
		
		if($datos != false){
			foreach($datos as $row){
				$nombre = $row->nombre;
				$titulo = $row->titulo;
				$subTitulo = $row->subTitulo;
				$opcional = $row->opcional;
				$descripcion = $row->descripcion;
				$condicion = $row->condicion;
				$colores = $row->colores;
				$pagos = $row->pagos;
				$envios = $row->envios;
				$consultas = $row->consultas;
				$email = $row->email;
				$whatsapp = $row->whatsapp;
				$tabla = $row->tabla;
				$collage = $row->collage;
				$precio = $row->precio;
				$foto = $row->foto;
				$foto2 = $row->foto2;
				$foto3 = $row->foto3;
				$foto4 = $row->foto4;
				$foto5 = $row->foto5;
			}

			$data = array(
				'id' => $id,
				'nombre' => $nombre,
				'titulo' => $titulo,
	            'subTitulo' => $subTitulo,
	            'opcional' => $opcional,
	            'descripcion' => $descripcion,
	            'condicion' => $condicion,
	            'colores' => $colores,
	            'pagos' => $pagos,
	            'envios' => $envios,
	            'consultas' => $consultas,
	            'email' => $email,
	            'whatsapp' => $whatsapp,
	            'tabla' => $tabla,
	            'collage' => $collage,
				'precio' => $precio,
				'foto' => $foto,
				'foto2' => $foto2,
				'foto3' => $foto3,
				'foto4' => $foto4,
				'foto5' => $foto5
				);
			}else{
				return false;
			}
			
			$this->load->view('productos/headerProductos');
		$this->load->view('logo');
		$this->load->view('productos/navProductos');
		$this->load->view('productos/souvenirs/verSouvenirs', $data);
		$this->load->view('productos/footer');
	}
}
