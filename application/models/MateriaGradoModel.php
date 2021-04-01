<?php


class MateriaGradoModel extends CI_Model{
    public function get_MateriaGrado(){
        if(!empty($this->input->get("search"))){
          $this->db->like('ID_Materia', $this->input->get("search"));
          $this->db->or_like('Nombre', $this->input->get("search"));
        }
        $query = $this->db->get("materia");
        return $query->result();
    }

    public function get_MateriaGradoId($id){
          $query = $this->db->get_where('materia', array('ID_Grado' => $id));
          return $query->result();
    }

    public function insert_item()
    {
        $data = array(
            'Nombre' => $this->input->post('nombre'),
            'Descripcion' => $this->input->post('descripcion'),
            'ID_Grado' => $this->input->post('id_grado')
        );
        return $this->db->insert('materia', $data);
    }

    public function update_item($id)
    {
        $data=array(
          'Nombre' => $this->input->post('nombre'),
          'Descripcion' => $this->input->post('descripcion'),
          'ID_Grado' => $this->input->post('id_grado')
        );
        if($id==0){
            return $this->db->insert('materia',$data);
        }else{
            $this->db->where('ID_Materia',$id);
            return $this->db->update('materia',$data);
        }
    }


    public function find_item($id)
    {
        return $this->db->get_where('materia', array('ID_Materia' => $id))->row();
    }

    public function delete_item($id)
    {
        return $this->db->delete('materia', array('ID_Materia' => $id));
    }
}
?>
