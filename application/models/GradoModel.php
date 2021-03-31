<?php

class GradoModel extends CI_Model{
    public function get_Grado(){
        if(!empty($this->input->get("search"))){
          $this->db->like('ID_Grado', $this->input->get("search"));
          $this->db->or_like('Nombre', $this->input->get("search"));
        }
        $query = $this->db->get("grado");
        return $query->result();
    }

    public function insert_item()
    {
        $data = array(
            'Nombre' => $this->input->post('nombre'),
            'Descripcion' => $this->input->post('descripcion')
        );
        return $this->db->insert('grado', $data);
    }

    public function update_item($id)
    {
        $data=array(
          'Nombre' => $this->input->post('nombre'),
          'Descripcion' => $this->input->post('descripcion'),
        );
        if($id==0){
            return $this->db->insert('grado',$data);
        }else{
            $this->db->where('ID_Grado',$id);
            return $this->db->update('grado',$data);
        }
    }


    public function find_item($id)
    {
        return $this->db->get_where('grado', array('ID_Grado' => $id))->row();
    }

    public function delete_item($id)
    {
        return $this->db->delete('grado', array('ID_Grado' => $id));
    }
}
?>
