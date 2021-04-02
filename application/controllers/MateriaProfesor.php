<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MateriaProfesor extends CI_Controller {


   public $MateriaProfesor;


   /**
    * Get All Data from this method.
    *
    * @return Response
   */
   public function __construct() {
      parent::__construct();


      $this->load->library('form_validation');
      $this->load->library('session');
      $this->load->model('MateriaProfesorModel');


      $this->MateriaProfesor = new MateriaProfesorModel;
   }


   /**
    * Display Data this method.
    *
    * @return Response
   */
   public function index($id)
   {
       $data['data'] = $this->MateriaProfesor->get_MateriaProfesorid($id);
       $data['id'] = $id;

       $this->load->view('theme/header');
       //$this->load->view('theme/lateralnav');
       $this->load->view('MateriaProfesor/list',$data);
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
      $item = $this->profesor_materia->find_item($id);

      $this->load->view('theme/header');
      $this->load->view('MateriaProfesor/show',array('item'=>$item));
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
      $this->load->view('MateriaProfesor/create',$data);
      $this->load->view('theme/footer');
   }


   /**
    * Store Data from this method.
    *
    * @return Response
   */
   public function store($id)
   {
     $this->form_validation->set_rules('id_materia', 'ID_Materia', 'required');
     $this->form_validation->set_rules('id_profesor', 'ID_Profesor', 'required');

        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('MateriaProfesor/create/'.$id));
        }else{
           $this->MateriaProfesor->insert_item();
           redirect(base_url('MateriaProfesor/'.$id));
        }
    }


   /**
    * Edit Data from this method.
    *
    * @return Response
   */
   public function edit($id)
   {
       $item = $this->MateriaProfesor->find_item($id);


       $this->load->view('theme/header');
       $this->load->view('MateriaProfesor/edit',array('item'=>$item));
       $this->load->view('theme/footer');
   }


   /**
    * Update Data from this method.
    *
    * @return Response
   */
   public function update($id,$IDprofesor)
   {
     $this->form_validation->set_rules('id_materia', 'ID_Materia', 'required');
     //$this->form_validation->set_rules('id_Profesor', 'ID_Profesor', 'required');


        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('MateriaProfesor/edit/'.$id));
        }else{
          $this->MateriaProfesor->update_item($id);
          redirect(base_url('MateriaProfesor/'.$IDprofesor));
        }
   }


   /**
    * Delete Data from this method.
    *
    * @return Response
   */
   public function delete($id)
   {
       $item = $this->MateriaProfesor->delete_item($id);
       redirect(base_url('MateriaProfesor'));
   }
}
