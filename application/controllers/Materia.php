<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Materia extends CI_Controller {


  public $Materia;
   public $Grado;


   /**
    * Get All Data from this method.
    *
    * @return Response
   */
   public function __construct() {
      parent::__construct();


      $this->load->library('form_validation');
      $this->load->library('session');
      $this->load->model('MateriaModel');


      $this->Materia = new MateriaModel;
   }

/*
   public function index($id)
   {
       $data['data'] = $this->Alumno->get_AlumnoID($id);
       $data['id'] = $id;
       $this->load->view('theme/header');
       //$this->load->view('theme/lateralnav');
       $this->load->view('Alumno/list',$data);
       $this->load->view('theme/footer');
       $this->load->helper('url');
   }


*/

   /**
    * Create from display on this method.
    *
    * @return Response
   */
   public function create($id)
   {
      $this->load->model('GradoModel');
      $this->Grado = new GradoModel;
      $data['id'] = $id;
      $data['dataGrado'] = $this->Grado->get_Grado();
      $this->load->model('MateriaGradoModel');
      $this->Materia = new MateriaGradoModel;
      $data['dataMateria'] = $this->Materia->get_MateriaGrado();
      $this->load->view('theme/header');
      $this->load->view('Materia/create',$data);
      //$this->load->view('theme/footer');
   }


   /**
    * Store Data from this method.
    *
    * @return Response
   */
   public function store($id)
   {
        $this->form_validation->set_rules('nombre', 'Nombre', 'required');
        $this->form_validation->set_rules('apellido', 'Apellido', 'required');
        $this->form_validation->set_rules('correo', 'Correo', 'required');

        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('Alumno/create'.$id));
        }else{
           $this->Alumno->insert_item();
           redirect(base_url('Alumno/'.$id));
        }
    }


}
