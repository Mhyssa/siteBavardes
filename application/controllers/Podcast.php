<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Podcast extends CI_Controller{





    public function __construct(){

        parent :: __construct();

        $this->load->model('Podcast_Model');

        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn'); 


    } // __construct ends here





    public function index(){


        $data = array();


        $data['ma_pages'] = "index_podcasts";
        $data['pod'] = $this->Podcast_Model->getRowsPodcast();


        $this->load->view('templates/header', $data);
        $this->load->view('podcast/index', $data);
        $this->load->view('templates/footer');

    } // index ends here




















    //ADMIN SPACE






    public function ad_index(){

        if($this->isUserLoggedIn){ 

        $data = array();

            if($this->session->userdata('success_msg')){
                $data['success_msg'] = $this->session->userdata('success_msg');
                $this->session->unset_userdata('success_msg');
            }

            if($this->session->userdata('error_msg')){
                $data['error_msg'] = $this->session->userdate('error_msg');
                $this->session->unset_userdata('error_msg');
            }
         
        $data['ma_pages'] = 'ad_index_podcasts';
        $data['pod'] = $this->Podcast_Model->getRowsPodcast();

        $this->load->view('templates/adheader', $data);
        $this->load->view('ad_podcast/ad_index');
        $this->load->view('templates/adfooter');

    } else {
        redirect('users/login');
    }

    } // index ends here





    public function add_podcast(){

        if($this->isUserLoggedIn){ 


        $data = $formArray = array();
        $error = '';

            //If create request is submitted
            if($this->input->post('podcast_add')){
                
                //Form field validation rules
                $this->form_validation->set_rules('podcast_name', 'nom', 'required');
                $this->form_validation->set_rules('podcast_link', 'lien', 'required'); 

                // Prepare gallery data 
                $formArray = array( 
                    'podcast_name' => $this->input->post('podcast_name',TRUE),
                    'podcast_link' => $this->input->post('podcast_link',TRUE)
                );


                if($this->form_validation->run() == true){ 

                    if(empty($error)){ 
                        // Insert data 
                        $insert = $this->Podcast_Model->insert($formArray); 
                        
                        if($insert){ 
                            $this->session->set_userdata('success_msg', 'Ajout - Réussie.'); 
                            redirect('podcast/ad_index'); 
                        }else{ 
                            $error = 'Quelques problèmes sont survenus, veuillez réessayer.'; 
                        } 
                    } 
                
                $data['error_msg'] = $error;

                } 

            }


        $data['ma_pages'] = 'add_podcasts';
        $data['pod'] = $formArray;


        $this->load->view('templates/adheader', $data);
        $this->load->view('ad_podcast/add', $data);
        $this->load->view('templates/adfooter');

    } else {
        redirect('users/login');
    }

  
    } // add_podcast ends here





    public function edit_podcast($id){

        if($this->isUserLoggedIn){ 


        $data = $formArray = array(); 
         
        // Get data 
        $con = array('podcast_id' => $id); 
        $formArray = $this->Podcast_Model->getRowsPodcast($con); 
         
   
            // If update request is submitted 
            if($this->input->post('podcast_edit')){ 
                // Form field validation rules 
                $this->form_validation->set_rules('podcast_name', 'nom', 'required');
                $this->form_validation->set_rules('podcast_link', 'lien', 'required');
                
    
                
                // Prepare gallery data 
                $formArray = array( 
                    'podcast_name' => $this->input->post('podcast_name',TRUE),
                    'podcast_link' => $this->input->post('podcast_link',TRUE)
    
                ); 
                
                // Validate submitted form data 
                if($this->form_validation->run() == true){ 

                    if(empty($error)){ 
                        // Update data 
                        $update = $this->Podcast_Model->update($formArray, $id); 
                        
                        if($update){ 
                            $this->session->set_userdata('success_msg', 'Mise à jour - Réussie.'); 
                            redirect('podcast/ad_index'); 
                        }else{ 
                            $error = 'Quelques problèmes sont survenus, veuillez réessayer.'; 
                        } 
                    } 
                    
                    $data['error_msg'] = $error; 
                } 
            } 
   
              

        $data['ma_pages'] = 'edit_podcasts'; 
        $data['pod'] = $formArray; 

        
        // Load the edit page view 
        $this->load->view('templates/adheader', $data); 
        $this->load->view('ad_podcast/edit', $data); 
        $this->load->view('templates/adfooter');  

    } else {
        redirect('users/login');
    }

    } // edit_podcast ends here





    public function ad_view_podcast($id){

        if($this->isUserLoggedIn){ 


        $data = array();

            if(!empty($id)){

                $con = array('podcast_id'=>$id);
                $data['ma_pages'] = 'ad_view_podcasts';
                $data['pod'] = $this->Podcasts_Model->getRowsPodcast($con);

            } else {
                
                redirect('podcast/ad_index');

            }
        
        $this->load->view('templates/adheader', $data);
        $this->load->view('ad_podcast/ad_view', $data);
        $this->load->view('templates/adfooter');

    } else {
        redirect('users/login');
    }

    }





    public function delete_podcast($id){

        if($this->isUserLoggedIn){ 


        if($id){

            $con = array('podcast_id'=>$id);
            $formArray = $this->Podcast_Model->getRowsPodcast($con);

            $delete = $this->Podcast_Model->delete($id);

            if($delete){

                $this->session->userdata('success_msg', 'Suppression - Réussie.');
                redirect('podcast/ad_index');

            } else {
                
                $this->session->userdata('error_msg', 'Veuillez réessayer');

            }
        }

    } else {
        redirect('users/login');
    }



    } // delete_podcast ends here





} // controller ends here

?>