<?php


class LoginModel extends CI_Model{
    public function get_itemCRUD(){
        if(!empty($this->input->get("search"))){
          $this->db->like('ID_Materia', $this->input->get("search"));
          $this->db->or_like('Nombre', $this->input->get("search"));
        }
        $query = $this->db->get("Materia");
        return $query->result();
    }

}
?>
