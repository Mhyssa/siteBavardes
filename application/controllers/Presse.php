<?php

    defined('BASEPATH') or exit('No direct script access allowed');

    class Presse extends CI_Controller{

        public function __construct(){
            parent :: __construct();

            $this->load->model('Presse_Model');

            $this->load->helper('form');
            $this->load->library('form_validation');

        $this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn'); 

        } // __construct ends here





        public function index(){


            $data = array();


            $data['ma_pages'] = "index_presse";
            $data['presse'] = $this->Presse_Model->getRowsPresse();


            $this->load->view('templates/header', $data);
            $this->load->view('presse/index', $data);
            $this->load->view('templates/footer');

        } // index ends here




















        //Admin Space





        public function ad_index(){


        if($this->isUserLoggedIn){ 


            $data = array();


                if($this->session->userdata('success_msg')){
                    $data['success_msg'] = $this->session->userdata('success_msg');
                    $this->session->unset_userdata('success_msg');
                }

                if($this->session->userdata('error_msg')){
                    $data['error_msg'] = $this->session->userdata('error_msg');
                    $this->session->unset_userdata('error_msg');
                }


            $data['ma_pages'] = "ad_index_presse";
            $data['presse'] = $this->Presse_Model->getRowsPresse();


            $this->load->view('templates/adheader', $data);
            $this->load->view('ad_presse/ad_index', $data);
            $this->load->view('templates/adfooter');

        } else {
            redirect('users/login');
        }


        } // ad_index ends here





        public function add_presse(){

        if($this->isUserLoggedIn){ 



            $data = $formArray = array();
            $error = '';

                //If create request is submitted
                if($this->input->post('presse_add')){
                    
                    //Form field validation rules
                    $this->form_validation->set_rules('presse_name', 'nom', 'required');
                    $this->form_validation->set_rules('presse_cat', 'catégorie', 'required');  
                    $this->form_validation->set_rules('presse_link', 'lien', 'required'); 

                    // Prepare gallery data 
                    $formArray = array( 
                        'presse_name' => $this->input->post('presse_name',TRUE),
                        'presse_cat' => $this->input->post('presse_cat',TRUE),
                        'presse_link' => $this->input->post('presse_link',TRUE)
                    );


                    if($this->form_validation->run() == true){ 

                        if(empty($error)){ 
                            // Insert data 
                            $insert = $this->Presse_Model->insert($formArray); 
                            
                            if($insert){ 
                                $this->session->set_userdata('success_msg', 'Ajout - Réussie.'); 
                                redirect('presse/ad_index'); 
                            }else{ 
                                $error = 'Quelques problèmes sont survenus, veuillez réessayer.'; 
                            } 
                        } 
                    
                    $data['error_msg'] = $error;

                    } 

                }


            $data['ma_pages'] = 'add_presse';
            $data['presse'] = $formArray;


            $this->load->view('templates/adheader', $data);
            $this->load->view('ad_presse/add', $data);
            $this->load->view('templates/adfooter');

        } else {
            redirect('users/login');
        }


      
        } // add_presse ends here





        public function edit_presse($id){

        if($this->isUserLoggedIn){ 


            $data = $formArray = array(); 
             
            // Get data 
            $con = array('presse_id' => $id); 
            $formArray = $this->Presse_Model->getRowsPresse($con); 
             
       
                // If update request is submitted 
                if($this->input->post('presse_edit')){ 
                    // Form field validation rules 
                    $this->form_validation->set_rules('presse_name', 'nom', 'required');
                    $this->form_validation->set_rules('presse_cat', 'catégorie', 'required');  
                    $this->form_validation->set_rules('presse_link', 'lien', 'required');
                    
        
                    
                    // Prepare gallery data 
                    $formArray = array( 
                        'presse_name' => $this->input->post('presse_name',TRUE),
                        'presse_cat' => $this->input->post('presse_cat',TRUE),
                        'presse_link' => $this->input->post('presse_link',TRUE)
        
                    ); 
                    
                    // Validate submitted form data 
                    if($this->form_validation->run() == true){ 

                        if(empty($error)){ 
                            // Update data 
                            $update = $this->Presse_Model->update($formArray, $id); 
                            
                            if($update){ 
                                $this->session->set_userdata('success_msg', 'Mise à jour - Réussie.'); 
                                redirect('presse/ad_index'); 
                            }else{ 
                                $error = 'Quelques problèmes sont survenus, veuillez réessayer.'; 
                            } 
                        } 
                        
                        $data['error_msg'] = $error; 
                    } 
                } 
       
                  
    
            $data['ma_pages'] = 'edit_presse'; 
            $data['presse'] = $formArray; 

            
            // Load the edit page view 
            $this->load->view('templates/adheader', $data); 
            $this->load->view('ad_presse/edit', $data); 
            $this->load->view('templates/adfooter');  

        } else {
            redirect('users/login');
        }


        } // edit_presse ends here





        public function ad_view_presse($id){

        if($this->isUserLoggedIn){ 


            $data = array();

                if(!empty($id)){

                    $con = array('presse_id'=>$id);
                    $data['ma_pages'] = 'ad_view_presse';
                    $data['presse'] = $this->Presse_Model->getRowsPresse($con);

                } else {
                    
                    redirect('presse/ad_index');

                }
            
            $this->load->view('templates/adheader', $data);
            $this->load->view('ad_presse/ad_view', $data);
            $this->load->view('templates/adfooter');

        } else {
            redirect('users/login');
        }


        }





        public function delete_presse($id){

        if($this->isUserLoggedIn){ 


            if($id){

                $con = array('presse_id'=>$id);
                $formArray = $this->Presse_Model->getRowsPresse($con);

                $delete = $this->Presse_Model->delete($id);

                if($delete){

                    $this->session->userdata('success_msg', 'Suppression - Réussie.');
                    redirect('presse/ad_index');

                } else {
                    
                    $this->session->userdata('error_msg', 'Veuillez réessayer');

                }
            }


        } else {
            redirect('users/login');
        }



        } // delete_presse ends here




    } // controller ends here

?>