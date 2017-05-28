<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Toallas extends CI_Controller {

	function index(){
		$data = array(
			'toallas' => $this->toallasModel->mostrar()
		);

		$this->load->view('admin/header');
		$this->load->view('admin/nav');
		$this->load->view('admin/toallas/toallas', $data);
	}

	function toallon(){
		$data = array(
			'toallas' => $this->toallasModel->mostrar()
		);

		$this->load->view('admin/header');
		$this->load->view('admin/nav');
		$this->load->view('admin/toallas/toallon', $data);
	}

	public function nuevo(){

		$data = array(
			'toallas' => $this->toallasModel->mostrar()
		);

		$this->load->view('admin/header');
		$this->load->view('admin/nav');
		$this->load->view('admin/toallas/nuevo');
	}

	public function nuevoToallon(){

		$data = array(
			'toallas' => $this->toallasModel->mostrar()
		);

		$this->load->view('admin/header');
		$this->load->view('admin/nav');
		$this->load->view('admin/toallas/nuevoToallon');
	}

	function insert(){

		$this->load->library('upload');
	        
	        if(!empty($_FILES['foto']['name'])){
		        $config['upload_path'] = './img/toallas/';
		        $config['allowed_types'] = 'gif|jpg|png|bmp';

		        $this->upload->initialize($config);
		        if ($this->upload->do_upload('foto')){
                	$file_info = $this->upload->data();
                }
	        }

	        if(!empty($_FILES['foto2']['name'])){
		        $config['upload_path'] = './img/toallas/';
		        $config['allowed_types'] = 'gif|jpg|png|bmp';

		        $this->upload->initialize($config);
		        if ($this->upload->do_upload('foto2')){
                	$file_info2 = $this->upload->data();
                }
	        }

	        if(!empty($_FILES['foto3']['name'])){
		        $config['upload_path'] = './img/toallas/';
		        $config['allowed_types'] = 'gif|jpg|png|bmp';

		        $this->upload->initialize($config);
		        if ($this->upload->do_upload('foto3')){
                	$file_info3 = $this->upload->data();
                }
	        }

	        if(!empty($_FILES['foto4']['name'])){
		        $config['upload_path'] = './img/toallas/';
		        $config['allowed_types'] = 'gif|jpg|png|bmp';

		        $this->upload->initialize($config);
		        if ($this->upload->do_upload('foto4')){
                	$file_info4 = $this->upload->data();
                }
	        }

	        if(!empty($_FILES['foto5']['name'])){
		        $config['upload_path'] = './img/toallas/';
		        $config['allowed_types'] = 'gif|jpg|png|bmp';

		        $this->upload->initialize($config);
		        if ($this->upload->do_upload('foto5')){
                	$file_info5 = $this->upload->data();
                }
	        }
		
		$nombre = $this->input->post('nombre');
		$titulo = $this->input->post('titulo');
		$subTitulo = $this->input->post('subTitulo');
		$opcional = $this->input->post('opcional');
		$descripcion = $this->input->post('descripcion');
	    $condicion = $this->input->post('condicion');
	    $colores = $this->input->post('colores');
	    $pagos = $this->input->post('pagos');
	    $envios = $this->input->post('envios');
	    $consultas = $this->input->post('consultas');
	    $email = $this->input->post('email');
	    $whatsapp = $this->input->post('whatsapp');
	    $tabla = $this->input->post('tabla');
	    $collage = $this->input->post('collage');
	    $precio = $this->input->post('precio');
	    $toalla = $this->input->post('toalla');
	    $toallon = $this->input->post('toallon');
	    if(empty($file_info['file_name'])){
	    	$foto = $this->input->post('foto');
	    }else{
	    	$foto = $file_info['file_name'];
	    }
	    if(empty($file_info2['file_name'])){
	    	$foto2 = $this->input->post('foto2');
	    }else{
	    	$foto2 = $file_info2['file_name'];
	    }
	    if(empty($file_info3['file_name'])){
	    	$foto3 = $this->input->post('foto3');
	    }else{
	    	$foto3 = $file_info3['file_name'];
	    }
	    if(empty($file_info4['file_name'])){
	    	$foto4 = $this->input->post('foto4');
	    }else{
	    	$foto4 = $file_info4['file_name'];
	    }
	    if(empty($file_info5['file_name'])){
	    	$foto5 = $this->input->post('foto5');
	    }else{
	    	$foto5 = $file_info5['file_name'];
	    }

	    $this->toallasModel->insert($nombre, $titulo, $subTitulo, $opcional, $descripcion, $condicion, $colores, $pagos, $envios, $consultas, $email, $whatsapp, $tabla, $collage, $precio, $toalla, $toallon, $foto, $foto2, $foto3, $foto4, $foto5);
	        
	    header("location:" . base_url() . "toallas");
	}


	function insertToallon(){

		$this->load->library('upload');
	        
	        if(!empty($_FILES['foto']['name'])){
		        $config['upload_path'] = './img/toallas/';
		        $config['allowed_types'] = 'gif|jpg|png|bmp';

		        $this->upload->initialize($config);
		        if ($this->upload->do_upload('foto')){
                	$file_info = $this->upload->data();
                }
	        }

	        if(!empty($_FILES['foto2']['name'])){
		        $config['upload_path'] = './img/toallas/';
		        $config['allowed_types'] = 'gif|jpg|png|bmp';

		        $this->upload->initialize($config);
		        if ($this->upload->do_upload('foto2')){
                	$file_info2 = $this->upload->data();
                }
	        }

	        if(!empty($_FILES['foto3']['name'])){
		        $config['upload_path'] = './img/toallas/';
		        $config['allowed_types'] = 'gif|jpg|png|bmp';

		        $this->upload->initialize($config);
		        if ($this->upload->do_upload('foto3')){
                	$file_info3 = $this->upload->data();
                }
	        }

	        if(!empty($_FILES['foto4']['name'])){
		        $config['upload_path'] = './img/toallas/';
		        $config['allowed_types'] = 'gif|jpg|png|bmp';

		        $this->upload->initialize($config);
		        if ($this->upload->do_upload('foto4')){
                	$file_info4 = $this->upload->data();
                }
	        }

	        if(!empty($_FILES['foto5']['name'])){
		        $config['upload_path'] = './img/toallas/';
		        $config['allowed_types'] = 'gif|jpg|png|bmp';

		        $this->upload->initialize($config);
		        if ($this->upload->do_upload('foto5')){
                	$file_info5 = $this->upload->data();
                }
	        }
		
		$nombre = $this->input->post('nombre');
		$titulo = $this->input->post('titulo');
		$subTitulo = $this->input->post('subTitulo');
		$opcional = $this->input->post('opcional');
		$descripcion = $this->input->post('descripcion');
	    $condicion = $this->input->post('condicion');
	    $colores = $this->input->post('colores');
	    $pagos = $this->input->post('pagos');
	    $envios = $this->input->post('envios');
	    $consultas = $this->input->post('consultas');
	    $email = $this->input->post('email');
	    $whatsapp = $this->input->post('whatsapp');
	    $tabla = $this->input->post('tabla');
	    $collage = $this->input->post('collage');
	    $precio = $this->input->post('precio');
	    $toalla = $this->input->post('toalla');
	    $toallon = $this->input->post('toallon');
	    if(empty($file_info['file_name'])){
	    	$foto = $this->input->post('foto');
	    }else{
	    	$foto = $file_info['file_name'];
	    }
	    if(empty($file_info2['file_name'])){
	    	$foto2 = $this->input->post('foto2');
	    }else{
	    	$foto2 = $file_info2['file_name'];
	    }
	    if(empty($file_info3['file_name'])){
	    	$foto3 = $this->input->post('foto3');
	    }else{
	    	$foto3 = $file_info3['file_name'];
	    }
	    if(empty($file_info4['file_name'])){
	    	$foto4 = $this->input->post('foto4');
	    }else{
	    	$foto4 = $file_info4['file_name'];
	    }
	    if(empty($file_info5['file_name'])){
	    	$foto5 = $this->input->post('foto5');
	    }else{
	    	$foto5 = $file_info5['file_name'];
	    }

	    $this->toallasModel->insert($nombre, $titulo, $subTitulo, $opcional, $descripcion, $condicion, $colores, $pagos, $envios, $consultas, $email, $whatsapp, $tabla, $collage, $precio, $toalla, $toallon, $foto, $foto2, $foto3, $foto4, $foto5);
	        
	    header("location:" . base_url() . "toallas/toallon");
	}

	//Función para mostrar todos los valores de cada elemento.
	function editar(){
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


		$this->load->view('admin/header');
		$this->load->view('admin/nav');
		$this->load->view('admin/toallas/editar', $data);
	}

	function editarToallon(){
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


		$this->load->view('admin/header');
		$this->load->view('admin/nav');
		$this->load->view('admin/toallas/editarToallon', $data);
	}


	//Función para editar todos los valores de cada elemento.
	function actualizar(){
		$id = $this->uri->segment(3);

		$this->load->library('upload');
	        
	        if(!empty($_FILES['foto']['name'])){
		        $config['upload_path'] = './img/toallas/';
		        $config['allowed_types'] = 'gif|jpg|png|bmp';

		        $this->upload->initialize($config);
		        if ($this->upload->do_upload('foto')){
                	$file_info = $this->upload->data();
                }
	        }

	        if(!empty($_FILES['foto2']['name'])){
		        $config['upload_path'] = './img/toallas/';
		        $config['allowed_types'] = 'gif|jpg|png|bmp';

		        $this->upload->initialize($config);
		        if ($this->upload->do_upload('foto2')){
                	$file_info2 = $this->upload->data();
                }
	        }

	        if(!empty($_FILES['foto3']['name'])){
		        $config['upload_path'] = './img/toallas/';
		        $config['allowed_types'] = 'gif|jpg|png|bmp';

		        $this->upload->initialize($config);
		        if ($this->upload->do_upload('foto3')){
                	$file_info3 = $this->upload->data();
                }
	        }

	        if(!empty($_FILES['foto4']['name'])){
		        $config['upload_path'] = './img/toallas/';
		        $config['allowed_types'] = 'gif|jpg|png|bmp';

		        $this->upload->initialize($config);
		        if ($this->upload->do_upload('foto4')){
                	$file_info4 = $this->upload->data();
                }
	        }

	        if(!empty($_FILES['foto5']['name'])){
		        $config['upload_path'] = './img/toallas/';
		        $config['allowed_types'] = 'gif|jpg|png|bmp';

		        $this->upload->initialize($config);
		        if ($this->upload->do_upload('foto5')){
                	$file_info5 = $this->upload->data();
                }
	        }

		$nombre = $this->input->post('nombre');
		$titulo = $this->input->post('titulo');
		$subTitulo = $this->input->post('subTitulo');
		$opcional = $this->input->post('opcional');
		$descripcion = $this->input->post('descripcion');
	    $condicion = $this->input->post('condicion');
	    $colores = $this->input->post('colores');
	    $pagos = $this->input->post('pagos');
	    $envios = $this->input->post('envios');
	    $consultas = $this->input->post('consultas');
	    $email = $this->input->post('email');
	    $whatsapp = $this->input->post('whatsapp');
	    $tabla = $this->input->post('tabla');
	    $collage = $this->input->post('collage');
	    $precio = $this->input->post('precio');
	    $toalla = $this->input->post('toalla');
	    $toallon = $this->input->post('toallon');
	    if(empty($file_info['file_name'])){
	    	$foto = $this->input->post('foto');
	    }else{
	    	$foto = $file_info['file_name'];
	    }
	    if(empty($file_info2['file_name'])){
	    	$foto2 = $this->input->post('foto2');
	    }else{
	    	$foto2 = $file_info2['file_name'];
	    }
	    if(empty($file_info3['file_name'])){
	    	$foto3 = $this->input->post('foto3');
	    }else{
	    	$foto3 = $file_info3['file_name'];
	    }
	    if(empty($file_info4['file_name'])){
	    	$foto4 = $this->input->post('foto4');
	    }else{
	    	$foto4 = $file_info4['file_name'];
	    }
	    if(empty($file_info5['file_name'])){
	    	$foto5 = $this->input->post('foto5');
	    }else{
	    	$foto5 = $file_info5['file_name'];
	    }
		
	    $this->toallasModel->actualizar($id, $nombre, $titulo, $subTitulo, $opcional, $descripcion, $condicion, $colores, $pagos, $envios, $consultas, $email, $whatsapp, $tabla, $collage, $precio, $toalla, $toallon, $foto, $foto2, $foto3, $foto4, $foto5);
	        
		header("location:" . base_url() . "toallas");
	}

	function actualizarToallon(){
		$id = $this->uri->segment(3);

		$this->load->library('upload');
	        
	        if(!empty($_FILES['foto']['name'])){
		        $config['upload_path'] = './img/toallas/';
		        $config['allowed_types'] = 'gif|jpg|png|bmp';

		        $this->upload->initialize($config);
		        if ($this->upload->do_upload('foto')){
                	$file_info = $this->upload->data();
                }
	        }

	        if(!empty($_FILES['foto2']['name'])){
		        $config['upload_path'] = './img/toallas/';
		        $config['allowed_types'] = 'gif|jpg|png|bmp';

		        $this->upload->initialize($config);
		        if ($this->upload->do_upload('foto2')){
                	$file_info2 = $this->upload->data();
                }
	        }

	        if(!empty($_FILES['foto3']['name'])){
		        $config['upload_path'] = './img/toallas/';
		        $config['allowed_types'] = 'gif|jpg|png|bmp';

		        $this->upload->initialize($config);
		        if ($this->upload->do_upload('foto3')){
                	$file_info3 = $this->upload->data();
                }
	        }

	        if(!empty($_FILES['foto4']['name'])){
		        $config['upload_path'] = './img/toallas/';
		        $config['allowed_types'] = 'gif|jpg|png|bmp';

		        $this->upload->initialize($config);
		        if ($this->upload->do_upload('foto4')){
                	$file_info4 = $this->upload->data();
                }
	        }

	        if(!empty($_FILES['foto5']['name'])){
		        $config['upload_path'] = './img/toallas/';
		        $config['allowed_types'] = 'gif|jpg|png|bmp';

		        $this->upload->initialize($config);
		        if ($this->upload->do_upload('foto5')){
                	$file_info5 = $this->upload->data();
                }
	        }

		$nombre = $this->input->post('nombre');
		$titulo = $this->input->post('titulo');
		$subTitulo = $this->input->post('subTitulo');
		$opcional = $this->input->post('opcional');
		$descripcion = $this->input->post('descripcion');
	    $condicion = $this->input->post('condicion');
	    $colores = $this->input->post('colores');
	    $pagos = $this->input->post('pagos');
	    $envios = $this->input->post('envios');
	    $consultas = $this->input->post('consultas');
	    $email = $this->input->post('email');
	    $whatsapp = $this->input->post('whatsapp');
	    $tabla = $this->input->post('tabla');
	    $collage = $this->input->post('collage');
	    $precio = $this->input->post('precio');
	    $toalla = $this->input->post('toalla');
	    $toallon = $this->input->post('toallon');
	    if(empty($file_info['file_name'])){
	    	$foto = $this->input->post('foto');
	    }else{
	    	$foto = $file_info['file_name'];
	    }
	    if(empty($file_info2['file_name'])){
	    	$foto2 = $this->input->post('foto2');
	    }else{
	    	$foto2 = $file_info2['file_name'];
	    }
	    if(empty($file_info3['file_name'])){
	    	$foto3 = $this->input->post('foto3');
	    }else{
	    	$foto3 = $file_info3['file_name'];
	    }
	    if(empty($file_info4['file_name'])){
	    	$foto4 = $this->input->post('foto4');
	    }else{
	    	$foto4 = $file_info4['file_name'];
	    }
	    if(empty($file_info5['file_name'])){
	    	$foto5 = $this->input->post('foto5');
	    }else{
	    	$foto5 = $file_info5['file_name'];
	    }
		
	    $this->toallasModel->actualizar($id, $nombre, $titulo, $subTitulo, $opcional, $descripcion, $condicion, $colores, $pagos, $envios, $consultas, $email, $whatsapp, $tabla, $collage, $precio, $toalla, $toallon, $foto, $foto2, $foto3, $foto4, $foto5);
	        
		header("location:" . base_url() . "toallas/toallon");
	}

	function eliminar(){
		$id = $this->uri->segment(3);
		$this->toallasModel->eliminar($id);
		$this->load->helper('url');
		$this->load->view('admin/header');
		header("location:" . base_url().'toallas');
	}

	function eliminarToallon(){
		$id = $this->uri->segment(3);
		$this->toallasModel->eliminar($id);
		$this->load->helper('url');
		$this->load->view('admin/header');
		header("location:" . base_url().'toallas/toallon');
	}

	function buscar(){
		$data = array();
		$query = $this->input->get('query', TRUE);

		if($query){
			$result = $this->toallasModel->buscar(trim($query));
			$total = $this->toallasModel->totalResultados(trim($query));
			if($result != FALSE){
				$data = array(
					'result' => $result,
					'total' => $total
				);
			}else{
				$data = array('result' => "", 
							  'total' => 0
							 );
			}
		}else{
			$data = array('result' => "",
						  'total' => 0
						 );
		}

		$this->load->view('admin/header');
		$this->load->view('admin/buscarVista', $data);
	}
}

?>