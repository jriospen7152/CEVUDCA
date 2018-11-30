<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autenticacion extends CI_Controller {
    function __construct(){
        parent::__construct();  
        $this->load->helper('url');
        $this->load->library('session');
    }

	public function login(){
		$this->load->view('inicio_sesion');
    }

    public function registro(){
        $this->load->helper('url'); 
		$this->load->view('registro');
    }
    
    public function registrar(){
        $usuario =  $this->input->post('usuario');
        $contrasena =  $this->input->post('contrasena');
        $nombre =  $this->input->post('nombre');
        $apellido =  $this->input->post('apellido');
        $edad =  $this->input->post('edad');
        $correo_electronico =  $this->input->post('correo_electronico');
        
        if(empty($usuario) || empty($contrasena) || empty($nombre) || empty($nombre) || empty($apellido) || empty($edad) || empty($correo_electronico)){
            $resultado = array("resultado" => "error", "mensaje" => "Todos los campos son obligatorios!");
            echo json_encode($resultado);
        }else{
            if(!filter_var($correo_electronico, FILTER_VALIDATE_EMAIL)) {
                $resultado = array("resultado" => "error", "mensaje" => "El correo electronico es invalido.");
                echo json_encode($resultado);
                return;
            }
            if(strlen($contrasena) < 8) {
                $resultado = array("resultado" => "error", "mensaje" => "La contraseña debe tener al menos 8 caracteres.");
                echo json_encode($resultado);
                return;
            }

            $this->load->model('Empleado_model', 'empleado', true);
            $this->load->model('Usuario_model', 'usuario', true);
            
            $this->usuario->insert_usuario($usuario, md5($contrasena));
            $usuario_id = $this->usuario->obtener_ultimo_usuario_id();
            
            $this->empleado->insert_empleado($nombre, $apellido, $edad, $correo_electronico, $usuario_id);
            $resultado = array("resultado" => "completado", "mensaje" => "El usuario se registro correctamente!");
            
            echo json_encode($resultado);
        }
    }
    
    public function iniciar_sesion(){
		$this->load->library('session');
 
		$resultado = array('error' => false);
 
		$usuario = $_POST['usuario'];
		$contrasena = $_POST['contrasena'];
        
        $this->load->model('Usuario_model', 'usuario', true);
		$data = $this->usuario->login($usuario, $contrasena);
 
		if($data){
			$this->session->set_userdata('usuario', $data);
			$output['mensaje'] = 'Iniciando sesión, por favor espere...';
		}
		else{
			$output['error'] = true;
			$output['mensaje'] = 'Inicio de sesión invalido. Usuario no encontrado';
		}
 
		echo json_encode($output); 
    }
    
    public function cerrar_sesion(){
		$this->load->library('session');
		$this->session->unset_userdata('usuario');
		redirect('/');
	}
}
