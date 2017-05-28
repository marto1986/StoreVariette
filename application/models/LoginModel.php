<?php
	
	class LoginModel extends CI_Model{

		function getUser($user, $password){
			$this->db->where('user', $user);
			$this->db->where('password', $password);
                        $this -> db -> limit(1);
        	        $query = $this->db->get('usuarios');
			
			if($query->num_rows() == 1)
		        {
			    return $query->row();
		        }else{
			     $this->session->set_flashdata('usuario_incorrecto','Los datos introducidos son incorrectos');
			     redirect(base_url().'login','refresh');
		       }
		}
	}

?>