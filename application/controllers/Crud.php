<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Crud extends CI_Controller {


   public $crud;


   /**
    * Get All Data from this method.
    *
    * @return Response
   */
   public function __construct() {
      parent::__construct(); 


      $this->load->library('form_validation');
      $this->load->library('session');
      $this->load->model('crudModel');


      $this->crud = new CrudModel;
   }


   /**
    * Display Data this method.
    *
    * @return Response
   */
   public function index()
   {
       $data['data'] = $this->crud->get_itemCRUD();


      // $this->load->view('layouts/header');       
       $this->load->view('crud/list',$data);
       //$this->load->view('layouts/footer');
   }


   /**
    * Read Details this method.
    *
    * @return Response
   */
   public function read($id)
   {
      $item = $this->crud->find_item($id);


     // $this->load->view('layouts/header');
      $this->load->view('crud/read',array('item'=>$item));
      //$this->load->view('layouts/footer');
   }


   /**
    * Create from display on this method.
    *
    * @return Response
   */
   public function create()
   {
      //$this->load->view('layouts/header');
      $this->load->view('crud/create');
      //$this->load->view('layouts/footer');   
   }


   /**
    * Store Data from this method.
    *
    * @return Response
   */
   public function store()
   {
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');


        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('crud/create'));
        }else{
           $this->crud->insert_item();
           redirect(base_url('crud'));
        }
    }


   /**
    * Edit Data from this method.
    *
    * @return Response
   */
   public function edit($id)
   {
       $item = $this->crud->find_item($id);


       //$this->load->view('layouts/header');
       $this->load->view('crud/update',array('item'=>$item));
       //$this->load->view('layouts/footer');
   }


   /**
    * Update Data from this method.
    *
    * @return Response
   */
   public function update($id)
   {
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');


        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('crud/update/'.$id));
        }else{ 
          $this->crud->update_item($id);
          redirect(base_url('crud'));
        }
   }


   /**
    * Delete Data from this method.
    *
    * @return Response
   */
   public function delete($id)
   {
       $item = $this->crud->delete_item($id);
       redirect(base_url('crud'));
   }
}
