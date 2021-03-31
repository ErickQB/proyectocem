<?php


class ProfesorModel extends CI_Model{
    public function get_Profesor(){
        if(!empty($this->input->get("search"))){
          $this->db->like('ID_Profesor', $this->input->get("search"));
          $this->db->or_like('Correo', $this->input->get("search"));
          $this->db->or_like('Nombre', $this->input->get("search"));
          $this->db->or_like('Apellido', $this->input->get("search"));
          // agregar informacion de base de datos

        }
        $query = $this->db->get("Profesor");
        return $query->result();
    }

    public function insert_item()
    {
        $data = array(
            'Correo' => $this->input->post('correo'),
            'Nombre' => $this->input->post('nombre'),
            'Apellido' => $this->input->post('apellido')
        );
        return $this->db->insert('Profesor', $data);
    }

    public function update_item($id)
    {
        $data=array(
          'Nombre' => $this->input->post('nombre'),
          'Correo' => $this->input->post('correo'),
          'Apellido' => $this->input->post('apellido')


        );
        if($id==0){
            return $this->db->insert('Profesor',$data);
        }else{
            $this->db->where('ID_Profesor',$id);
            return $this->db->update('Profesor',$data);
        }
    }


    public function find_item($id)
    {
        return $this->db->get_where('Profesor', array('ID_Profesor' => $id))->row();
    }

    public function delete_item($id)
    {
        return $this->db->delete('Profesor', array('ID_Profesor' => $id));
    }
}
?>
