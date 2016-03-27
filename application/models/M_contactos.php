<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_contactos extends CI_Model {

        /*public function __construct()
        {
                parent::__construct();
        }*/
        
        function get_todos(){
			$this->load->database(); //Para conectar con la base de datos
			$query = $this->db->get('contactos');  // Produces: SELECT * FROM mytable
			return $query->result();
			
		}
		
		function agregar(){
			$this->load->database();
			
			$data_insertar = $this->input->post();
			unset($data_insertar['btn_enviar']);
			$this->db->insert('contactos',$data_insertar);
			return $this->db->insert_id();
		}
		

}
/*Fin de mi archivo m_contactos.php */