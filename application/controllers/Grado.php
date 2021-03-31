<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Grado extends CI_Controller {


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
      $this->load->model('GradoModel');


      $this->Grado = new GradoModel;
   }


   /**
    * Display Data this method.
    *
    * @return Response
   */
   public function index()
   {
       $data['data'] = $this->Grado->get_Grado();


       $this->load->view('theme/header');
       //$this->load->view('theme/lateralnav');
       $this->load->view('Grado/list',$data);
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
      $item = $this->Grado->find_item($id);

      $this->load->view('theme/header');
      $this->load->view('Grado/show',array('item'=>$item));
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
      $this->load->view('Grado/create');
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
        $this->form_validation->set_rules('descripcion', 'Descripcion', 'required');
        //$this->form_validation->set_rules('id_grado', 'ID_Grado', 'required');

        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('Grado/Create'));
        }else{
           $this->Grado->insert_item();
           redirect(base_url('Grado'));
        }
    }


   /**
    * Edit Data from this method.
    *
    * @return Response
   */
   public function edit($id)
   {
       $item = $this->Grado->find_item($id);


       $this->load->view('theme/header');
       $this->load->view('Grado/edit',array('item'=>$item));
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
     $this->form_validation->set_rules('descripcion', 'Descripcion', 'required');
     //$this->form_validation->set_rules('id_grado', 'ID_Grado', 'required');


        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('Grado/edit/'.$id));
        }else{
          $this->Grado->update_item($id);
          redirect(base_url('Grado'));
        }
   }


   /**
    * Delete Data from this method.
    *
    * @return Response
   */
   public function delete($id)
   {
       $item = $this->Grado->delete_item($id);
       redirect(base_url('Grado'));
   }
}
