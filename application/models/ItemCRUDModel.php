<?php


class ItemCRUDModel extends CI_Model{
    public function get_itemCRUD(){
        if(!empty($this->input->get("search"))){
          $this->db->like('ID_Materia', $this->input->get("search"));
          $this->db->or_like('Nombre', $this->input->get("search"));
        }
        $query = $this->db->get("Materia");
        return $query->result();
    }

    public function insert_item()
    {
        $data = array(
            'ID_Materia' => $this->input->post('ID_Materia'),
            'Nombre' => $this->input->post('Nombre')
        );
        return $this->db->insert('items', $data);
    }

    public function update_item($id)
    {
        $data=array(
          'ID_Materia' => $this->input->post('ID_Materia'),
          'Nombre' => $this->input->post('Nombre')
        );
        if($id==0){
            return $this->db->insert('items',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('items',$data);
        }
    }


    public function find_item($id)
    {
        return $this->db->get_where('items', array('ID_Materia' => $id))->row();
    }

    public function delete_item($id)
    {
        return $this->db->delete('items', array('ID_Materia' => $id));
    }
}
?>
