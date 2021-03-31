<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Profesor extends CI_Controller {


   public $Profesor;


   /**
    * Get All Data from this method.
    *
    * @return Response
   */
   public function __construct() {
      parent::__construct();


      $this->load->library('form_validation');
      $this->load->library('session');
      $this->load->model('ProfesorModel');


      $this->Profesor = new ProfesorModel;
   }


   /**
    * Display Data this method.
    *
    * @return Response
   */
   public function index()
   {
       $data['data'] = $this->Profesor->get_Profesor();


       $this->load->view('theme/header');
       //$this->load->view('theme/lateralnav');
       $this->load->view('Profesor/list',$data);
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
      $item = $this->Profesor->find_item($id);

      $this->load->view('theme/header');
      $this->load->view('Profesor/show',array('item'=>$item));
      $this->load->view('theme/footer');
   }


   /**
    * Create from display on this method.
    *
    * @return Response
   */
   public function create()
   {
      $this->load->view('theme/header');
      $this->load->view('Profesor/create');
      $this->load->view('theme/footer');
   }


   /**
    * Store Data from this method.
    *
    * @return Response
   */
   public function store()
   {
       $this->form_validation->set_rules('nombre', 'Nombre', 'required');
       $this->form_validation->set_rules('apellido', 'Apellido', 'required');
       $this->form_validation->set_rules('correo', 'Correo', 'required');
      //  $this->form_validation->set_rules('id_Profesor', 'ID_Profesor', 'required');

        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('Profesor/create'));
        }else{
           $this->Profesor->insert_item();
           redirect(base_url('Profesor'));
        }
    }


   /**
    * Edit Data from this method.
    *
    * @return Response
   */
   public function edit($id)
   {
       $item = $this->Profesor->find_item($id);


       $this->load->view('theme/header');
       $this->load->view('Profesor/edit',array('item'=>$item));
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
    //  $this->form_validation->set_rules('id_Profesor', 'ID_Profesor', 'required');


        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('Profesor/edit/'.$id));
        }else{
          $this->Profesor->update_item($id);
          redirect(base_url('Profesor'));
        }
   }


   /**
    * Delete Data from this method.
    *
    * @return Response
   */
   public function delete($id)
   {
       $item = $this->Profesor->delete_item($id);
       redirect(base_url('Profesor'));
   }
}
