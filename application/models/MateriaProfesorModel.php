<?php


class MateriaProfesorModel extends CI_Model{
    public function get_Profesor(){
        if(!empty($this->input->get("search"))){
          $this->db->like('ID_ProfesorMateria', $this->input->get("search"));
          $this->db->or_like('ID_Materia', $this->input->get("search"));
          $this->db->or_like('ID_Profesor', $this->input->get("search"));
          // agregar informacion de base de datos

        }
        $query = $this->db->get("MateriaProfesor");
        return $query->result();
    }

    public function get_MateriaProfesorid($id){
          $query = $this->db->get_where('profesor_materia', array('ID_Profesor' => $id));
          return $query->result();
    }



    public function insert_item()
    {
        $data = array(
            'ID_Materia' => $this->input->post('id_materia'),
            'ID_Profesor' => $this->input->post('id_profesor'),

        );
        return $this->db->insert('  profesor_materia', $data);
    }

    public function update_item($id)
    {
        $data=array(
          'ID_Materia' => $this->input->post('id_materia'),
          'ID_Profesor' => $this->input->post('id_profesor')
        );
        if($id==0){
            return $this->db->insert('profesor_materia',$data);
        }else{
            $this->db->where('ID_ProfesorMateria',$id);
            return $this->db->update('profesor_materia',$data);
        }
    }


    public function find_item($id)
    {
        return $this->db->get_where('profesor_materia', array('ID_ProfesorMateria' => $id))->row();
    }

    public function delete_item($id)
    {
        return $this->db->delete('profesor_materia', array('ID_ProfesorMateria' => $id));
    }
}
?>
