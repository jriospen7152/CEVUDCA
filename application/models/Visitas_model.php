<?php 

class Visitas_model extends CI_Model {

    public function agregar_visita()
    {
        $visitas = $this->db->query('SELECT cantidad_visitas FROM visitas where id=1')->row()->cantidad_visitas;
        $this->db->set('cantidad_visitas', $visitas + 1, FALSE);
        $this->db->where('id', 1);
        $this->db->update('visitas');
    }
    
    public function obtener_cantidad_visitas()
    {
        return $this->db->query('SELECT cantidad_visitas FROM visitas where id=1')->row()->cantidad_visitas;
    }

}