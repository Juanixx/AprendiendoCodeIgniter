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
		
		function get_by_id($id){
			$this->load->database(); //Para conectar con la base de datos
			$query = $this->db->where('con_id',$id);
			$query = $this->db->get('contactos');
			return $query->result();
			
		}
		
		
		function agregar(){
			$this->load->database();
			
			$data_insertar = $this->input->post();
			unset($data_insertar['btn_enviar']);
			$this->db->insert('contactos',$data_insertar);
			return $this->db->insert_id();
		}
		
		function edit($id){
			$this->load->database();
			
			$data_editar = $this->input->post();
			unset($data_editar['btn_enviar']);
			$this->db->where('con_id',$id);
			$this->db->update('contactos',$data_editar);
		}
		

}
/*Fin de mi archivo m_contactos.php */