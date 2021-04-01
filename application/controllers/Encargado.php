<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Encargado extends CI_Controller {


   public $Encargado;


   /**
    * Get All Data from this method.
    *
    * @return Response
   */
   public function __construct() {
      parent::__construct();


      $this->load->library('form_validation');
      $this->load->library('session');
      $this->load->model('EncargadoModel');


      $this->Encargado = new EncargadoModel;
   }


   /**
    * Display Data this method.
    *
    * @return Response
   */
   public function index()
   {
     
       $data['data'] = $this->Encargado->get_Encargado();


       $this->load->view('theme/header');
       //$this->load->view('theme/lateralnav');
       $this->load->view('Encargado/list',$data);
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
      $item = $this->Encargado->find_item($id);

      $this->load->view('theme/header');
      $this->load->view('Encargado/show',array('item'=>$item));
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
      $this->load->view('Encargado/create');
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

        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('Encargado/create'));
        }else{
           $this->Encargado->insert_item();
           redirect(base_url('Encargado'));
        }
    }


   /**
    * Edit Data from this method.
    *
    * @return Response
   */
   public function edit($id)
   {
       $item = $this->Encargado->find_item($id);


       $this->load->view('theme/header');
       $this->load->view('Encargado/edit',array('item'=>$item));
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
       $this->form_validation->set_rules('num_telefono', 'Num_Telefono', 'required');
      $this->form_validation->set_rules('observaciones', 'Observaciones', 'required');
     //$this->form_validation->set_rules('id_encargado', 'ID_Encargado', 'required');


        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('Encargado/edit/'.$id));
        }else{
          $this->Encargado->update_item($id);
          redirect(base_url('Encargado'));
        }
   }


   /**
    * Delete Data from this method.
    *
    * @return Response
   */
   public function delete($id)
   {
       $item = $this->Encargado->delete_item($id);
       redirect(base_url('Encargado'));
   }
}
