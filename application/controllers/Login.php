<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {


   public $Login;


   /**
    * Get All Data from this method.
    *
    * @return Response
   */
   public function __construct() {
      parent::__construct();


      $this->load->library('form_validation');
      $this->load->library('session');
      $this->load->model('LoginModel');


      $this->Login = new LoginModel;
   }


   /**
    * Display Data this method.
    *
    * @return Response
   */
   public function index()
   {
       //$data['data'] = $this->itemCRUD->get_itemCRUD();


       //$this->load->view('theme/header');
       //$this->load->view('theme/lateralnav');
       $this->load->view('Login/index');
       $this->load->helper('url');
   }





}
