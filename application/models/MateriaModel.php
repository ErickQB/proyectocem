<?php
class MateriaModel extends CI_Model{
    public function get_Alumno(){
        if(!empty($this->input->get("search"))){
          $this->db->like('ID_Alumno', $this->input->get("search"));
          $this->db->or_like('Alumno', $this->input->get("search"));
        }
        $query = $this->db->get("Alumno");
        return $query->result();
    }

    public function get_AlumnoID($id){
      $query = $this->db->get_where('Alumno', array('ID_Encargado' => $id));
      return $query->result();
    }

    public function insert_item()
    {
        $data = array(
            'Nombre' => $this->input->post('nombre'),
            'Apellido' => $this->input->post('apellido'),
            'Correo' => $this->input->post('correo'),
            'ID_Encargado' => $this->input->post('id_encargado')
        );
        return $this->db->insert('Alumno', $data);
    }

    public function update_item($id)
    {
        $data=array(
          'Nombre' => $this->input->post('nombre'),
          'Apellido' => $this->input->post('apellido'),
          'Correo' => $this->input->post('correo')
        );
        if($id==0){
            return $this->db->insert('Alumno',$data);
        }else{
            $this->db->where('ID_Alumno',$id);
            return $this->db->update('Alumno',$data);
        }
    }


    public function find_item($id)
    {
        return $this->db->get_where('Alumno', array('ID_Alumno' => $id))->row();
    }

    public function delete_item($id)
    {
        return $this->db->delete('Alumno', array('ID_Alumno' => $id));
    }
}
?>
