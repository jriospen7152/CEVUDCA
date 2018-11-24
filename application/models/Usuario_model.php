<?php 

class Usuario_model extends CI_Model {

    public $usuario;
    public $contrasena;
    public $created_at;

    public function insert_usuario($usuario, $contrasena)
    {
        $now = date('Y-m-d H:i:s');

        $this->usuario = $usuario;
        $this->contrasena = $contrasena;
        $this->created_at = $now;

        $this->db->insert('usuarios', $this);
    }
    
    public function obtener_ultimo_usuario_id()
    {
        return $this->db->query('SELECT MAX(id) as id FROM usuarios')->row()->id;
    }

    public function login($usuario, $contrasena){
        $query = $this->db->get_where('usuarios', array('usuario'=>$usuario, 'contrasena'=>md5($contrasena)));
        return $query->row_array();
    }
}