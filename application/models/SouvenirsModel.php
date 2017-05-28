<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SouvenirsModel extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function insert($nombre, $titulo, $subTitulo, $opcional, $descripcion, $condicion, $colores, $pagos, $envios, $consultas, $email, $whatsapp, $tabla, $collage, $precio, $foto, $foto2, $foto3, $foto4, $foto5)
    {
        $data = array(
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

        return $this->db->insert('souvenirs', $data);
    }

	public function mostrar()
    {
        $query = $this->db->get('souvenirs');
        if($query->num_rows() > 0 )
        {
            return $query->result();
        }else{
        	return "No hay souvenirs cargadas";
        }
    }

    public function obtener($id){
    	$this->db->where('id', $id);
    	$query = $this->db->get('souvenirs');
        if($query->num_rows() > 0 )
        {
            return $query->result();
        }else{
        	return "No hay souvenirs cargadas";
        }
    }

    public function actualizar($id, $nombre, $titulo, $subTitulo, $opcional, $descripcion, $condicion, $colores, $pagos, $envios, $consultas, $email, $whatsapp, $tabla, $collage, $precio, $foto, $foto2, $foto3, $foto4, $foto5){
        $this->db->where('id', $id);
        $data = array(
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

        $this->db->update('souvenirs', $data);
    }

    function eliminar($id){
        $this->db->where('id', $id);
        $this->db->delete('souvenirs');
    }

    function buscar($query){
        $this->db->like('nombre', $query);
        $this->db->or_like('precio', $query);
        $query = $this->db->get('souvenirs');
        if($query->num_rows() > 0){
            return $query;
        }else{
            return "false";
        }
    }

    function totalResultados($query){
        $this->db->like('nombre', $query);
        $this->db->or_like('precio', $query);
        $query = $this->db->get('souvenirs');

        return $query->num_rows();
    }
}

?>