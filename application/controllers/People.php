


<?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class People extends CI_Controller {  

    
      
      function __construct() { 
          parent::__construct(); 
           
          // Load People_Model model 
          $this->load->model('People_Model'); 
           
          $this->load->helper('form'); 
          $this->load->library('form_validation'); 

  
                // File upload path 
        $this->uploadPath = 'uploads/people_img/'; 
  
        $this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn'); 
      } 






            function index(){

                    $data = array(); 
                    

                        $data['people'] = $this->People_Model->getRowsPeople(); 
                        $data['ma_pages'] = 'index_people'; 


                        // Load the index page view 
                    $this->load->view('templates/header', $data); 
                    $this->load->view('people/index', $data); 
                    $this->load->view('templates/footer'); 



                } 








                   //ADMIN SPACE


                    public function ad_index(){ 

                        if($this->isUserLoggedIn){ 
                        $data = array(); 
                        
                        // Get messages from the session 
                        if($this->session->userdata('success_msg')){ 
                            $data['success_msg'] = $this->session->userdata('success_msg'); 
                            $this->session->unset_userdata('success_msg'); 
                        } 
                        if($this->session->userdata('error_msg')){ 
                            $data['error_msg'] = $this->session->userdata('error_msg'); 
                            $this->session->unset_userdata('error_msg'); 
                        } 
                

                            $data['people'] = $this->People_Model->getRowsPeople(); 
                            $data['ma_pages'] = 'ad_index_people'; 


                                // Load the list page view 
                        $this->load->view('templates/adheader', $data); 
                        $this->load->view('ad_people/ad_index', $data); 
                        $this->load->view('templates/adfooter'); 

                        } else {
                            redirect('users/login');
                        }



                    } // ad_index ends here







                    public function add_people(){ 



                        if($this->isUserLoggedIn){ 
                
                     $data = $formArray = array(); 
                     $error = ''; 
                      
                
                                // If create request is submitted 
                                if($this->input->post('people_add')){ 
                                // Form field validation rules 
                                $this->form_validation->set_rules('people_name', 'nom', 'required');
                                $this->form_validation->set_rules('people_status', 'status', 'required');
                                $this->form_validation->set_rules('people_link', 'lien', 'required'); 

                                $this->form_validation->set_rules('image', 'image', 'callback_file_check'); 
                                
                                // Prepare gallery data 
                                $formArray = array( 
                                    'people_name' => $this->input->post('people_name',TRUE),
                                    'people_status' => $this->input->post('people_status',TRUE),
                                    'people_title' => $this->input->post('people_title',TRUE),
                                    'people_link' => $this->input->post('people_link',TRUE)
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
                                        }else{ 
                                            $error = $this->upload->display_errors();  
                                        } 
                                    } 
                                    
                                    if(empty($error)){ 
                                        // Insert data 
                                        $insert = $this->People_Model->insert($formArray); 
                                        
                                        if($insert){ 
                                            $this->session->set_userdata('success_msg', 'Ajout - Réussie.'); 
                                            redirect('people/ad_index'); 
                                        }else{ 
                                            $error = 'Quelques problèmes sont survenus, veuillez réessayer.'; 
                                        } 
                                    } 
                                    
                                    $data['error_msg'] = $error; 
                                } 
                            
                                }
                        
                        
                        $data['ma_pages'] = 'add_people'; 
                        $data['people'] = $formArray; 
                
                        
                        // Load the add page view 
                        $this->load->view('templates/adheader', $data); 
                        $this->load->view('ad_people/add', $data); 
                        $this->load->view('templates/adfooter'); 
                
                            } else {
                                redirect('users/login');
                            }
                
                
                
                
                
                        } // add_people ends here
                
                


                        public function edit_people($id){ 

                            if($this->isUserLoggedIn){ 
                        
                             $data = $formArray = array(); 
                              
                             // Get image data 
                             $con = array('people_id' => $id); 
                             $formArray = $this->People_Model->getRowsPeople($con); 
                             $prevFArray = $formArray['file_name']; 
                              
                        
                             // If update request is submitted 
                             if($this->input->post('people_edit')){ 
                                 // Form field validation rules 
                                 $this->form_validation->set_rules('people_name', 'nom', 'required');
                                $this->form_validation->set_rules('people_status', 'status', 'required');
                                $this->form_validation->set_rules('people_link', 'lien', 'required'); 
                        
                                  
                                 // Prepare gallery data 
                                 $formArray = array( 
                                    'people_name' => $this->input->post('people_name',TRUE),
                                    'people_status' => $this->input->post('people_status',TRUE),
                                    'people_title' => $this->input->post('people_title',TRUE),
                                    'people_link' => $this->input->post('people_link',TRUE)                        
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
                                         $update = $this->People_Model->update($formArray, $id); 
                                          
                                         if($update){ 
                                             $this->session->set_userdata('success_msg', 'Mise à jour - Réussie.'); 
                                             redirect('people/ad_index'); 
                                         }else{ 
                                             $error = 'Quelques problèmes sont survenus, veuillez réessayer.'; 
                                         } 
                                     } 
                                      
                                     $data['error_msg'] = $error; 
                                 } 
                             } 
                        
                        
                        
                               
                                   $data['ma_pages'] = 'edit_people'; 
                                   $data['people'] = $formArray; 
                        
                                    
                                   // Load the edit page view 
                                   $this->load->view('templates/adheader', $data); 
                                   $this->load->view('ad_people/edit', $data); 
                                   $this->load->view('templates/adfooter');  
                        
                            } else {
                                redirect('users/login');
                            }
                        
                        
                         } 






                         
                        public function ad_view_people($id){ 

                            if($this->isUserLoggedIn){ 

                            $data = array(); 
                            
                            // Check whether id is not empty 
                            if(!empty($id)){ 
                                $con = array('people_id' => $id); 
                                $data['people'] = $this->People_Model->getRowsPeople($con); 
                                $data['ma_pages'] = 'ad_view_people'; 

                                
                                

                            }else{ 
                                redirect('people/ad_index'); 
                            } 

                            // Load the add page view 
                                    $this->load->view('templates/adheader', $data); 
                                    $this->load->view('ad_people/ad_view', $data); 
                                    $this->load->view('templates/adfooter'); 


                                } else {
                                    redirect('users/login');
                                }

                            
                        } 













                        public function delete_people($id){ 

                            if($this->isUserLoggedIn){ 
                            // Check whether id is not empty 
                            if($id){ 
                                $con = array('people_id' => $id); 
                                $formArray = $this->People_Model->getRowsPeople($con); 
                                
                                // Delete people data 
                                $delete = $this->People_Model->delete($id); 
                                
                                if($delete){ 
                                    // Remove file from the server  
                                    if(!empty($formArray['file_name'])){ 
                                        @unlink($this->uploadPath.$formArray['file_name']);  
                                    }  
                                    
                                    $this->session->set_userdata('success_msg', 'Suppression - Réussie.');
                                    redirect('people/ad_index'); 
                                }else{ 
                                    $this->session->set_userdata('error_msg', 'Veuillez rééssayer'); 
                                } 
                            } 

                            } else {
                                redirect('users/login');
                            }

                                

                            
                        } 
                                    












                        public function file_check($str){ 
                            if(empty($_FILES['image']['name'])){ 
                                $this->form_validation->set_message('file_check', 'Selectionner une image (.jpg .jpeg .png .gif).'); 
                                return FALSE; 
                            }else{ 
                                return TRUE; 
                            } 
                        } // file_check ends here







}
 ?>
