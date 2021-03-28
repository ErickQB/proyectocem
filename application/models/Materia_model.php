<?php
class Materia_model extends CI_Model {

   function __construct(){
      //parent::Model();
      //parent::__construct();
      $this->load->database();
   }

   public function get_reviews($id) {
     if ($id != FALSE) {
       $query = $this->db->get_where('materia', array('ID_Materia' => $id));
       return $query->row_array();
     }else {
       return FALSE;
     }

    }

    public function getAll()
    {
      $result = $this->db->get('materia');
      return $result->result_array();;
    }

   function mostrar_todo(){
      $ssql = "select * from materia";
      return null;
   }
}
?>
