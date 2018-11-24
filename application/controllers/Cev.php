<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cev extends CI_Controller {
	function __construct(){
        parent::__construct();  
        $this->load->helper('url');
        $this->load->library('session');
	}
	
	public function index()
	{
		$this->load->model('Visitas_model', 'visitas', true);    
		$this->visitas->agregar_visita();
		
		$cantidad_visitas = $this->visitas->obtener_cantidad_visitas();
		
		$this->load->library('session');
		$data = array('cantidad_visitas' => $cantidad_visitas);
		$this->load->view('index', $data);
	}
	
	public function proyectos()
	{
		$this->load->library('session');
		$this->load->view('proyectos');
	}
	
	public function recursos()
	{
		$this->load->library('session');
		$this->load->view('recursos');
	}

	public function sobrecev()
	{
		$this->load->library('session');
		$this->load->view('sobrecev');
	}

	public function contactanos()
	{
		$this->load->library('session');
		$this->load->view('contactanos');
	}

	public function servicio()
	{
		$this->load->library('session');
		$this->load->view('servicios');
	}
}
