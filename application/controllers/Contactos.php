<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactos extends CI_Controller {

        public function index()
        {
                //echo 'Hola mundo! 2';
                
                /**Para pasar una variable a la vista desde el controlador
                La información se pasa en forma de arrays, data es la más común o más usada
                */
                /*$data['nombre']='Ana';
                $data['nombre2']='Juancho';
                */
                
                /**Desde el controlador se manda llamar la vista, como en el
                * siguiente ejemplo	
                La variable se manda seguida de una coma y la vista lo interpreta
                $this->load->view('view_list_contactos',$data);*/
                
                
                /*Ahora se mandará llamar el modelo
				*/
				$this->load->model('M_contactos');
				
				//Ahora se mandará llamar una función del modelo
				$data['listado'] = $this->M_contactos->get_todos();
				
				/**
				Para saber si el array está vacío o contiene información
				* $listado = $this->M_contactos->get_todos();
				* if(empty($listado)){
					echo "Sin Contactos";
				}else{
					echo "Con Contactos";
				}
				*/
				/*Ahora se manda la información de la base de datos a la vista
				*/
				$this->load->view('view_list_contactos',$data);
				
                
                
        }
        public function agregar(){
			$this->load->helper('form');
			$this->load->library('form_validation');
			
			
			/**Para indicar que se van a recibir datos de la vista,
			primero se valida si hay información entrante con in if, de 
			lo contrario se muestra la vista
			*/
			if($this->input->post()){
				/**Aquí se definen las reglas de validación*/
				/**Para hacer más validaciones se usa el símbolo: '|' 
				*/
				
				$this->form_validation->set_rules('con_email','Email','required|valid_email');
				$this->form_validation->set_rules('con_nombre','Nombre','required|min_length[3]');
				$this->form_validation->set_rules('con_edad','Edad','required|integer');
				
				$this->form_validation->set_rules('con_telefono','Telefono','trim');
				$this->form_validation->set_rules('con_estatus','Estatus','trim');
				/**Ahora, para que las validaciones se cumplan, se pasa a ejecutar
				* la validación 
				*/
				if($this->form_validation->run()==TRUE){
					//echo "Información recibida <br/>";
					/**Para imprimir los valores que esta recibiendo post
					* se usa la función print_r
					*/
					//print_r($this->input->post());
				
					/**Ahora se manda llamar la función agregar del modelo
					*/
					$this->load->model('M_contactos');
					$id_insertado=$this->M_contactos->agregar();
					echo "El ID creado es: ".$id_insertado;
				}else{
					$this->load->view('view_form_contactos');
				}		
				
				}else{
					/**
			* Ahora se manda llamar la vista del formulario
			*/
			$this->load->view('view_form_contactos');
					}
				
			}
			
			public function modificar($id = NULL){
				
				if($id==NULL OR !is_numeric($id)){
					echo "Error con el ID";
					return;
				}
				
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->load->model('M_contactos');
			
			$data['datos_contacto']=$this->M_contactos->get_by_id($id);
			
			if(empty($data['datos_contacto'])){
				echo 'El ID es Invalido';
			}else{
				echo "Pasar a la vista";
			}
			
			
			//print_r($data['datos_contacto']);
			
			}
			
			
		
}

/*Fin de mi archivo Contactos.php */