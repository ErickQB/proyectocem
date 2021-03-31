<?php


class EncargadoModel extends CI_Model{
    public function get_Encargado(){
        if(!empty($this->input->get("search"))){
          $this->db->like('ID_Encargado', $this->input->get("search"));
          $this->db->or_like('Nombre', $this->input->get("search"));
        }
        $query = $this->db->get("encargado");
        return $query->result();
    }

    public function insert_item()
    {
        $data = array(
            'Nombre' => $this->input->post('nombre'),
            'Apellido' => $this->input->post('apellido'),
            'Correo' => $this->input->post('correo'),
            'Num_Telefono' => $this->input->post('num_telefono'),
            'Observaciones' => $this->input->post('observaciones')
        );
        return $this->db->insert('Encargado', $data);
    }

    public function update_item($id)
    {
        $data=array(
          'Nombre' => $this->input->post('nombre'),
          'Apellido' => $this->input->post('apellido'),
          'Correo' => $this->input->post('correo'),
          'Num_Telefono' => $this->input->post('num_telefono'),
          'Observaciones' => $this->input->post('observaciones')
        );
        if($id==0){
            return $this->db->insert('Encargado',$data);
        }else{
            $this->db->where('ID_Encargado',$id);
            return $this->db->update('Encargado',$data);
        }
    }


    public function find_item($id)
    {
        return $this->db->get_where('encargado', array('ID_Encargado' => $id))->row();
    }

    public function delete_item($id)
    {
        return $this->db->delete('encargado', array('ID_Encargado' => $id));
    }
}
?>
