


<?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class Event extends CI_Controller {  

    
      
      function __construct() { 
          parent::__construct(); 
           
          // Load Event_Model model 
          $this->load->model('Event_Model'); 
           
          $this->load->helper('form'); 
          $this->load->library('form_validation'); 

  
                // File upload path 
        $this->uploadPath = 'uploads/events_img/'; 
  
        $this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn'); 
      } 






function index($lang = ''){

        $data = array(); 
         

             $data['event'] = $this->Event_Model->getRowsEvent(); 
             $data['ma_pages'] = 'index_event'; 


                $this->lang->load('content', $lang == ''?'fr':$lang);
                $data['controller'] = 'event';
                $data['function'] = 'index';



                //définition de la langue
                $data['lang'] = $this->lang->line('lang');

                //header
                $data['header_acc'] = $this->lang->line('header_acc');
                $data['header_about'] = $this->lang->line('header_about');
                $data['header_team'] = $this->lang->line('header_team');
                $data['header_act'] = $this->lang->line('header_act');
                $data['header_event'] = $this->lang->line('header_event');
                $data['header_col'] = $this->lang->line('header_col');
                $data['header_ppl'] = $this->lang->line('header_ppl');
                $data['header_presse'] = $this->lang->line('header_presse');
                $data['header_pod'] = $this->lang->line('header_pod');
                            
                $data['header_titre'] = $this->lang->line('header_titre');



                //event/index
                $data['event_button_det'] = $this->lang->line('event_button_det');



                //footer
                $data['footer_line1'] = $this->lang->line('footer_line1');
                $data['footer_line2'] = $this->lang->line('footer_line2');
                $data['footer_body_text'] = $this->lang->line('footer_body_text');
                    $data['footer_button_support'] = $this->lang->line('footer_button_support');
                $data['footer_line3'] = $this->lang->line('footer_line3');
            
                $data['footer_mentions'] = $this->lang->line('footer_mentions');
                $data['footer_rgpd'] = $this->lang->line('footer_rgpd');
                $data['footer_esmem'] = $this->lang->line('footer_esmem');
                    $data['footer_user_acc'] = $this->lang->line('footer_user_acc');
                    $data['footer_login'] = $this->lang->line('footer_login');
                    $data['footer_reg'] = $this->lang->line('footer_reg');


                    
              // Load the index page view 
        $this->load->view('templates/header', $data); 
        $this->load->view('events/index', $data); 
        $this->load->view('templates/footer', $data); 



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
   

               $data['event'] = $this->Event_Model->getRowsEvent(); 
               $data['ma_pages'] = 'ad_index_event'; 


                // Load the list page view 
          $this->load->view('templates/adheader', $data); 
          $this->load->view('ad_events/ad_index', $data); 
          $this->load->view('templates/adfooter'); 

        } else {
            redirect('users/login');
        }



      } 



      
    public function add_event(){ 



        if($this->isUserLoggedIn){ 

     $data = $formArray = array(); 
     $error = ''; 
      

                // If create request is submitted 
                if($this->input->post('event_add')){ 
                // Form field validation rules 
                $this->form_validation->set_rules('event_name', 'nom', 'required');
                $this->form_validation->set_rules('event_date', 'date', 'required');  
                $this->form_validation->set_rules('event_nombre_pers', 'nombre personne', 'integer');
                $this->form_validation->set_rules('event_cat', 'catégorie', 'required');

                
                // Prepare gallery data 
                $formArray = array( 
                    'event_name' => $this->input->post('event_name',TRUE),
                    'event_date' => $this->input->post('event_date',TRUE),
                    'event_heure' => $this->input->post('event_heure',TRUE),
                    'event_lieu' => $this->input->post('event_lieu',TRUE),
                    'event_adresse' => $this->input->post('event_adresse',TRUE),
                    'event_link' => $this->input->post('event_link',TRUE),
                    'event_nombre_pers' => $this->input->post('event_nombre_pers',TRUE),
                    'event_inscription' => $this->input->post('event_inscription',TRUE),
                    'event_non_mix' => $this->input->post('event_non_mix',TRUE),
                    'event_description' => $this->input->post('event_description',TRUE),
                    'event_cat' => $this->input->post('event_cat',TRUE)

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
                        $insert = $this->Event_Model->insert($formArray); 
                        
                        if($insert){ 
                            $this->session->set_userdata('success_msg', 'Ajout - Réussie.'); 
                            redirect('event/ad_index'); 
                        }else{ 
                            $error = 'Quelques problèmes sont survenus, veuillez réessayer.'; 
                        } 
                    } 
                    
                    $data['error_msg'] = $error; 
                } 
            
                }
        
        
        $data['ma_pages'] = 'add_event'; 
        $data['events'] = $formArray; 

        
        // Load the add page view 
        $this->load->view('templates/adheader', $data); 
        $this->load->view('ad_events/add', $data); 
        $this->load->view('templates/adfooter'); 

            } else {
                redirect('users/login');
            }





        }
















  
 public function edit_event($id){ 

    if($this->isUserLoggedIn){ 

     $data = $formArray = array(); 
      
     // Get image data 
     $con = array('event_id' => $id); 
     $formArray = $this->Event_Model->getRowsEvent($con); 
     $prevFArray = $formArray['file_name']; 
      

     // If update request is submitted 
     if($this->input->post('event_edit')){ 
         // Form field validation rules 
         $this->form_validation->set_rules('event_name', 'nom', 'required');
         $this->form_validation->set_rules('event_date', 'date', 'required');  
         $this->form_validation->set_rules('event_nombre_pers', 'nombre personne', 'integer');
         $this->form_validation->set_rules('event_cat', 'catégorie', 'required');  

          
         // Prepare gallery data 
         $formArray = array( 
            'event_name' => $this->input->post('event_name',TRUE),
            'event_date' => $this->input->post('event_date',TRUE),
            'event_heure' => $this->input->post('event_heure',TRUE),
            'event_lieu' => $this->input->post('event_lieu',TRUE),
            'event_adresse' => $this->input->post('event_adresse',TRUE),
            'event_link' => $this->input->post('event_link',TRUE),
            'event_nombre_pers' => $this->input->post('event_nombre_pers',TRUE),
            'event_inscription' => $this->input->post('event_inscription',TRUE),
            'event_non_mix' => $this->input->post('event_non_mix',TRUE),
            'event_description' => $this->input->post('event_description',TRUE),
            'event_cat' => $this->input->post('event_cat',TRUE)

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
                 $update = $this->Event_Model->update($formArray, $id); 
                  
                 if($update){ 
                     $this->session->set_userdata('success_msg', 'Mise à jour - Réussie.'); 
                     redirect('event/ad_index'); 
                 }else{ 
                     $error = 'Quelques problèmes sont survenus, veuillez réessayer.'; 
                 } 
             } 
              
             $data['error_msg'] = $error; 
         } 
     } 



       
           $data['ma_pages'] = 'edit_event'; 
           $data['events'] = $formArray; 

            
           // Load the edit page view 
           $this->load->view('templates/adheader', $data); 
           $this->load->view('ad_events/edit', $data); 
           $this->load->view('templates/adfooter');  

    } else {
        redirect('users/login');
    }


 } 












 public function ad_view_event($id){ 

    if($this->isUserLoggedIn){ 

    $data = array(); 
     
    // Check whether id is not empty 
    if(!empty($id)){ 
        $con = array('event_id' => $id); 
        $data['events'] = $this->Event_Model->getRowsEvent($con); 
        $data['ma_pages'] = 'ad_view_event'; 

        
         

    }else{ 
        redirect('event/ad_index'); 
    } 

       // Load the add page view 
              $this->load->view('templates/adheader', $data); 
              $this->load->view('ad_events/ad_view', $data); 
              $this->load->view('templates/adfooter'); 


        } else {
            redirect('users/login');
        }

    
} 













 public function delete_event($id){ 

    if($this->isUserLoggedIn){ 
     // Check whether id is not empty 
     if($id){ 
         $con = array('event_id' => $id); 
         $formArray = $this->Event_Model->getRowsEvent($con); 
          
         // Delete event data 
         $delete = $this->Event_Model->delete($id); 
          
         if($delete){ 
             // Remove file from the server  
             if(!empty($formArray['file_name'])){ 
                 @unlink($this->uploadPath.$formArray['file_name']);  
             }  
              
             $this->session->set_userdata('success_msg', 'Suppression - Réussie.');
             redirect('event/ad_index'); 
         }else{ 
             $this->session->set_userdata('error_msg', 'Veuillez rééssayer'); 
         } 
     } 

    } else {
        redirect('users/login');
    }

        

     
 } 



  














}
 ?>
