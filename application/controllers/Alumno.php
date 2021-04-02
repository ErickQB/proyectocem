<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Alumno extends CI_Controller {


   public $Alumno;


   /**
    * Get All Data from this method.
    *
    * @return Response
   */
   public function __construct() {
      parent::__construct();


      $this->load->library('form_validation');
      $this->load->library('session');
      $this->load->model('AlumnoModel');


      $this->Alumno = new AlumnoModel;
   }


   /**
    * Display Data this method.
    *
    * @return Response
   */
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


   /**
    * Show Details this method.
    *
    * @return Response
   */
   public function show($id)
   {
      $item = $this->Alumno->find_item($id);

      $this->load->view('theme/header');
      $this->load->view('Alumno/show',array('item'=>$item));
      $this->load->view('theme/footer');
   }


   /**
    * Create from display on this method.
    *
    * @return Response
   */
   public function create($id)
   {
      $data['id'] = $id;
      $this->load->view('theme/header');
      $this->load->view('Alumno/create',$data);
      $this->load->view('theme/footer');
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


   /**
    * Edit Data from this method.
    *
    * @return Response
   */
   public function edit($id)
   {
       $item = $this->Alumno->find_item($id);


       $this->load->view('theme/header');
       $this->load->view('Alumno/edit',array('item'=>$item));
       $this->load->view('theme/footer');
   }


   /**
    * Update Data from this method.
    *
    * @return Response
   */
   public function update($id)
   {
     $this->form_validation->set_rules('nombre', 'Nombre', 'required');
     $this->form_validation->set_rules('apellido', 'Apellido', 'required');
     $this->form_validation->set_rules('correo', 'Correo', 'required');


        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('Alumno/edit/'.$id));
        }else{
          $this->Alumno->update_item($id);
          redirect(base_url('Alumno'));
        }
   }


   /**
    * Delete Data from this method.
    *
    * @return Response
   */
   public function delete($id)
   {
       $item = $this->Alumno->delete_item($id);
       redirect(base_url('Alumno'));
   }
}
