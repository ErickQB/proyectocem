<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MateriaGrado extends CI_Controller {


   public $MateriaGrado;


   /**
    * Get All Data from this method.
    *
    * @return Response
   */
   public function __construct() {
      parent::__construct();


      $this->load->library('form_validation');
      $this->load->library('session');
      $this->load->model('MateriaGradoModel');


      $this->MateriaGrado = new MateriaGradoModel;
   }


   /**
    * Display Data this method.
    *
    * @return Response
   */
   public function index($idMateria)
   {

      $data['id'] = $idMateria;
      $data['data'] = $this->MateriaGrado->get_MateriaGradoId($idMateria);

       $this->load->view('theme/header');
       //$this->load->view('theme/lateralnav');
       $this->load->view('MateriaGrado/list',$data);
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
      $item = $this->MateriaGrado->find_item($id);

      $this->load->view('theme/header');
      $this->load->view('MateriaGrado/show',array('item'=>$item));
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
      $this->load->view('MateriaGrado/create',$data);
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
        $this->form_validation->set_rules('descripcion', 'Descripcion', 'required');
        $this->form_validation->set_rules('id_grado', 'ID_Grado', 'required');

        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('MateriaGrado/create/'.$id));
        }else{
           $this->MateriaGrado->insert_item();
           redirect(base_url('MateriaGrado/'.$id));
        }
    }


   /**
    * Edit Data from this method.
    *
    * @return Response
   */
   public function edit($id)
   {
       $item = $this->MateriaGrado->find_item($id);


       $this->load->view('theme/header');
       $this->load->view('MateriaGrado/edit',array('item'=>$item));
       $this->load->view('theme/footer');
   }


   /**
    * Update Data from this method.
    *
    * @return Response
   */
   public function update($id,$IDGrado)
   {
     $this->form_validation->set_rules('nombre', 'Nombre', 'required');
     $this->form_validation->set_rules('descripcion', 'Descripcion', 'required');
     //$this->form_validation->set_rules('id_grado', 'ID_Grado', 'required');


        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('MateriaGrado/edit/'.$id));
        }else{
          $this->MateriaGrado->update_item($id);
          redirect(base_url('MateriaGrado/'.$IDGrado));
        }
   }


   /**
    * Delete Data from this method.
    *
    * @return Response
   */
   public function delete($id)
   {
       $item = $this->MateriaGrado->delete_item($id);
       redirect(base_url('MateriaGrado'));
   }
}
