<?php 

class Empleado_model extends CI_Model {

    public $nombre;
    public $apellido;
    public $edad;
    public $correo_electronico;
    public $usuario_id;
    public $created_at;

    public function insert_empleado($nombre, $apellido, $edad, $correo_electronico, $usuario_id)
    {
        $now = date('Y-m-d H:i:s');

        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
        $this->correo_electronico = $correo_electronico;
        $this->usuario_id = $usuario_id;
        $this->created_at = $now;

        $this->db->insert('empleados', $this);
    }
}