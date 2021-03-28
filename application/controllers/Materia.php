<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materia extends CI_Controller {
  public function index() {
    $this->load->model('Materia_model');
    $reviews = $this->Materia_model->get_reviews();
    $data['Nombre'] = $reviews['Nombre'];
    $data['Descripcion'] = $reviews['Descripcion'];
    $this->load->view('Materia/index.html', $data);
  }

 public function mat()
  {
    $this->load->model('Materia_model','UM',true);
    $datos['Materia'] = $this->UM->getAll();
    $this->load->view('Materia/All.php',$datos);
  }

  public function show($id) {
    $this->load->model('Materia_model');
    $reviews = $this->Materia_model->get_reviews($id);
    $data['ID_Materia'] = $reviews['ID_Materia'];
    $data['Nombre'] = $reviews['Nombre'];
    $this->load->view('Materia/Busqueda', $data);
  }

   /*function index(){
      //cargo el helper de url, con funciones para trabajo con URL del sitio
      $this->load->helper('url');

      //cargo el modelo de artículos
      $this->load->model('Materia_model');

      //pido los ultimos artículos al modelo
      $mostrarMaterias = $this->Materia_model->mostrar_todo();

      //creo el array con datos de configuración para la vista
      $datos_vista = array('rs_materia' => $mostrarMaterias);

      //cargo la vista pasando los datos de configuacion
      $this->load->view('Materia/index.html');

   }*/
}
?>
