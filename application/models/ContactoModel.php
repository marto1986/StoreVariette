<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactoModel extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function insert($nombre, $correo, $consulta)
    {
        $data = array(
            'nombre' => $nombre,
            'email' => $correo,
            'consulta' => $consulta
            );

        return $this->db->insert('contactos', $data);
    }

	public function mostrar()
    {
        $query = $this->db->get('contactos');
        if($query->num_rows() > 0 )
        {
            return $query->result();
        }else{
        	return FALSE;
        }
    }

    function eliminar($id){
        $this->db->where('id', $id);
        $this->db->delete('contactos');
    }

    function buscar($query){
        $this->db->like('nombre', $query);
        $query = $this->db->get('contactos');
        if($query->num_rows() > 0){
            return $query;
        }else{
            return "false";
        }
    }

    function totalResultados($query){
        $this->db->like('nombre', $query);
        $query = $this->db->get('contactos');

        return $query->num_rows();
    }
}

?>