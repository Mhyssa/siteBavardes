<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Collaboration extends CI_Controller{





    public function __construct(){

        parent :: __construct();

        $this->load->model('Collab_Model');

        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->uploadPath = 'uploads/collab_img';

        $this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn'); 

    } // __construct ends here





    public function index(){

        $data = array();

        $data['ma_pages'] = 'index_collaboration';
        $data['collab'] = $this->Collab_Model->getRowsCollab();

        $this->load->view('templates/header', $data);
        $this->load->view('collab/index', $data);
        $this->load->view('templates/footer');


    } //index ends here




















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

        $data['ma_pages'] = 'ad_index_collaboration';
        $data['collab'] = $this->Collab_Model->getRowsCollab();

        $this->load->view('templates/adheader', $data);
        $this->load->view('ad_collab/ad_index', $data);
        $this->load->view('templates/adfooter');

    } else {
        redirect('users/login');
    }



    } // ad_index ends here





    public function add_collab(){


        if($this->isUserLoggedIn){ 

        $data = $formArray = array();
        $error = '';

            //If create request is submitted
            if($this->input->post('collab_add')){

                //Form field validation rules
                $this->form_validation->set_rules('collab_name','nom','required');
                $this->form_validation->set_rules('collab_link','lien','');
                
                $this->form_validation->set_rules('image','image','');

                $formArray = array(

                    'collab_name' => $this->input->post('collab_name', true),
                    'collab_link' => $this->input->post('collab_link', true)

                ); 

                    if($this->form_validation->run() == true){

                        //Upload image file to server
                        if(!empty($_FILES['image']['name'])){

                            $imageName = $_FILES['image']['name'];

                            //File upload configuration
                            $config['upload_path'] = $this->uploadPath;
                            $config['allowed_types'] = 'jpg|jpeg|png|gif';

                            //Load and initialize upload library
                            $this->load->library('upload', $config);
                            $this->upload->initialize($config);

                            //Upload file to server
                            if($this->upload->do_upload('image')){

                                //Uploaded file data
                                $fileData = $this->upload->data();
                                $formArray['file_name'] = $fileData['file_name'];

                            } else {
                                
                                $error = $this->upload->display_errors();

                            }


                        }

                        if(empty($error)){

                            //Insert data
                            $insert = $this->Collab_Model->insert($formArray);

                                if($insert){

                                    $this->session->userdata('success_msg', 'Ajout - Réussi.');
                                    redirect('collaboration/ad_index');

                                } else {
                                    
                                    $error = 'Quelques problèmes sont survenus, veuillez réessayer.'; 
                                    
                                }

                        }

                        $data['error_msg'] = $error;

                    }

            }


        $data['ma_pages'] = 'add_collaboration';
        $data['collab'] = $formArray;


        $this->load->view('templates/adheader', $data);
        $this->load->view('ad_collab/add', $data);
        $this->load->view('templates/adfooter');

    } else {
        redirect('users/login');
    }

    
    } // add_collab ends here





    public function edit_collab($id){


        if($this->isUserLoggedIn){ 


        $data = $formArray = array(); 
             
        // Get image data 
        $con = array('collab_id' => $id); 
        $formArray = $this->Collab_Model->getRowsCollab($con); 
        $prevFArray = $formArray['file_name']; 

            // If update request is submitted 
            if($this->input->post('collab_edit')){ 
                // Form field validation rules 
                $this->form_validation->set_rules('collab_name', 'nom', 'required');
                $this->form_validation->set_rules('collab_link', 'lien', '');
                
        
                    
                // Prepare gallery data 
                $formArray = array( 
                    'collab_name' => $this->input->post('collab_name',TRUE),
                    'collab_link' => $this->input->post('collab_link',TRUE)
        
                ); 
                    
                // Validate submitted form data 
                if($this->form_validation->run() == true){ 
                    // Upload image file to the server 
                    if(!empty($_FILES['image']['name'])){ 
                        $imageName = $_FILES['image']['name']; 
                            
                        // File upload configuration 
                        $config['upload_path'] = $this->uploadPath; 
                        $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
                            
                        // Load and initialize upload library 
                        $this->load->library('upload', $config); 
                        $this->upload->initialize($config); 
                            
                        // Upload file to server 
                        if($this->upload->do_upload('image')){ 
                            // Uploaded file data 
                            $fileData = $this->upload->data(); 
                            $formArray['file_name'] = $fileData['file_name']; 
                                
                            // Remove old file from the server  
                            if(!empty($prevFArray)){ 
                                @unlink($this->uploadPath.$prevFArray);  
                            } 
                        }else{ 
                            $error = $this->upload->display_errors();  
                        } 
                    } 
                        
                    if(empty($error)){ 
                        // Update image data 
                        $update = $this->Collab_Model->update($formArray, $id); 
                            
                        if($update){ 
                            $this->session->set_userdata('success_msg', 'Mise à jour - Réussie.'); 
                            redirect('collaboration/ad_index'); 
                        }else{ 
                            $error = 'Quelques problèmes sont survenus, veuillez réessayer.'; 
                        } 
                    } 
                        
                    $data['error_msg'] = $error; 
                } 
            } 
        
               
        $data['collab'] = $formArray; 
        $data['ma_pages'] = 'edit_collaboration'; 

        $this->load->view('templates/adheader', $data);
        $this->load->view('ad_collab/edit', $data);
        $this->load->view('templates/adfooter');


    } else {
        redirect('users/login');
    }

    
    } // edit_collab ends here




    
    public function ad_view_collab($id){

        if($this->isUserLoggedIn){ 


        $data = array(); 
        
        // Check whether id is not empty 
        if(!empty($id)){ 

            $con = array('collab_id' => $id); 
            $data['ma_pages'] = 'ad_view_collaboration'; 
            $data['collab'] = $this->Collab_Model->getRowsCollab($con); 

        }else{ 
            redirect('collaboration/ad_index'); 
        } 

        $this->load->view('templates/adheader', $data);
        $this->load->view('ad_collab/ad_view', $data);
        $this->load->view('templates/adfooter');

    } else {
        redirect('users/login');
    }


    } // ad_view_edit ends here





    function delete_collab($id){

        if($this->isUserLoggedIn){ 

        //Check wether id is not empty
        if($id){
            $con = array('collab_id'=>$id);
            $formArray = $this->Collab_Model->getRowsCollab($con);

            //Delete
            $delete = $this->Collab_Model->delete($id);

            if($delete){ 
                // Remove file from the server  
                if(!empty($formArray['file_name'])){ 
                    @unlink($this->uploadPath.$formArray['file_name']);  
                }  
                 
                $this->session->set_userdata('success_msg', 'Suppression - Réussie.');
                redirect('collaboration/ad_index'); 
            }else{ 
                $this->session->set_userdata('error_msg', 'Veuillez rééssayer'); 
            } 
        } 

    } else {
        redirect('users/login');
    }


    }





} // controller ends here

?>