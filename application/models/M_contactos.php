<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_contactos extends CI_Model {
	/**
	* El construct es lo primero que se ejecuta al cargar la clase
	*/
        public function __construct()
        {
                parent::__construct();
                $this->load->database(); /*Para conectar con la base de datos,
                si se carga desde el construct se evita cargarla repetidamente
                cada vez que se vaya a usar*/
        }
        
        function get_todos(){
			$query = $this->db->get('contactos');  // Produces: SELECT * FROM mytable
			return $query->result();
			
		}
		
		function get_by_id($id){
			$query = $this->db->where('con_id',$id);
			$query = $this->db->get('contactos');
			return $query->result();
			
		}
		
		
		function agregar(){
			$data_insertar = $this->input->post();
			unset($data_insertar['btn_enviar']);
			$this->db->insert('contactos',$data_insertar);
			return $this->db->insert_id();
		}
		
		function edit($id){
			$data_editar = $this->input->post();
			unset($data_editar['btn_enviar']);
			$this->db->where('con_id',$id);
			$this->db->update('contactos',$data_editar);
		}
		
		function elim($id){
			$this->db->where('con_id',$id);
			$this->db->delete('contactos');
		}
		

}
/*Fin de mi archivo m_contactos.php */