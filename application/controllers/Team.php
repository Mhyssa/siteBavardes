


<?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class Team extends CI_Controller {  

    
      
      function __construct() { 
          parent::__construct(); 
           
          // Load Team_Model model 
          $this->load->model('Team_Model'); 
           
          $this->load->helper('form'); 
          $this->load->library('form_validation'); 

  
                // File upload path 
        $this->uploadPath = 'uploads/team_img/'; 
  
        $this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn'); 
      } 






function index($lang = ''){

        $data = array(); 
         
        $data['team'] = $this->Team_Model->getRowsTeam(); 
        $data['ma_pages'] = 'index_team'; 


             $this->lang->load('content', $lang == ''?'fr':$lang);
             $data['controller'] = 'team';
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
             $data['header_esmem'] = $this->lang->line('header_esmem');
                 $data['header_user_acc'] = $this->lang->line('header_user_acc');
                 $data['header_login'] = $this->lang->line('header_login');
                 $data['header_reg'] = $this->lang->line('header_reg');
     
             $data['header_titre'] = $this->lang->line('header_titre');


             //footer
             $data['footer_line1'] = $this->lang->line('footer_line1');
             $data['footer_line2'] = $this->lang->line('footer_line2');
             $data['footer_body_text'] = $this->lang->line('footer_body_text');
                 $data['footer_button_support'] = $this->lang->line('footer_button_support');
             $data['footer_line3'] = $this->lang->line('footer_line3');
        
             $data['footer_mentions'] = $this->lang->line('footer_mentions');
             $data['footer_rgpd'] = $this->lang->line('footer_rgpd');


              // Load the index page view 
        $this->load->view('templates/header', $data); 
        $this->load->view('team/index', $data); 
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
   

               $data['team'] = $this->Team_Model->getRowsTeam(); 
               $data['ma_pages'] = 'ad_index_team'; 


                // Load the list page view 
          $this->load->view('templates/adheader', $data); 
          $this->load->view('ad_team/ad_index', $data); 
          $this->load->view('templates/adfooter'); 

        } else {
            redirect('users/login');
        }



      } 



      
    public function add_team(){ 



        if($this->isUserLoggedIn){ 

     $data = $formArray = array(); 
     $error = ''; 
      

                // If create request is submitted 
                if($this->input->post('team_add')){ 
                // Form field validation rules 
                $this->form_validation->set_rules('team_name', 'prènom', 'required');
                    $this->form_validation->set_rules('team_title', 'titre', 'required');  
                    $this->form_validation->set_rules('team_description', 'description', 'required'); 

                    $this->form_validation->set_rules('image', 'image', 'callback_file_check'); 
                
                // Prepare gallery data 
                $formArray = array( 
                    'team_name' => $this->input->post('team_name',TRUE),
                    'team_title' => $this->input->post('team_title',TRUE),
                    'team_description' => $this->input->post('team_description',TRUE)
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
                        $insert = $this->Team_Model->insert($formArray); 
                        
                        if($insert){ 
                            $this->session->set_userdata('success_msg', 'Ajout - Réussie.'); 
                            redirect('team/ad_index'); 
                        }else{ 
                            $error = 'Quelques problèmes sont survenus, veuillez réessayer.'; 
                        } 
                    } 
                    
                    $data['error_msg'] = $error; 
                } 
            
                }
        
        
        $data['ma_pages'] = 'add_team'; 
        $data['team'] = $formArray; 

        
        // Load the add page view 
        $this->load->view('templates/adheader', $data); 
        $this->load->view('ad_team/add', $data); 
        $this->load->view('templates/adfooter'); 

            } else {
                redirect('users/login');
            }





        }
















  
 public function edit_team($id){ 

    if($this->isUserLoggedIn){ 

     $data = $formArray = array(); 
      
     // Get image data 
     $con = array('team_id' => $id); 
     $formArray = $this->Team_Model->getRowsTeam($con); 
     $prevFArray = $formArray['file_name']; 
      

     // If update request is submitted 
     if($this->input->post('team_edit')){ 
         // Form field validation rules   
                $this->form_validation->set_rules('team_name', 'prènom', 'required');
                $this->form_validation->set_rules('team_title', 'titre', 'required');  
                $this->form_validation->set_rules('team_description', 'description', 'required');
          
         // Prepare gallery data 
         $formArray = array( 
            'team_name' => $this->input->post('team_name',TRUE),
            'team_title' => $this->input->post('team_title',TRUE),
            'team_description' => $this->input->post('team_description',TRUE)
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
                 $update = $this->Team_Model->update($formArray, $id); 
                  
                 if($update){ 
                     $this->session->set_userdata('success_msg', 'Mise à jour - Réussie.'); 
                     redirect('team/ad_index'); 
                 }else{ 
                     $error = 'Quelques problèmes sont survenus, veuillez réessayer.'; 
                 } 
             } 
              
             $data['error_msg'] = $error; 
         } 
     } 



       
           $data['ma_pages'] = 'edit_team'; 
           $data['team'] = $formArray; 

            
           // Load the edit page view 
           $this->load->view('templates/adheader', $data); 
           $this->load->view('ad_team/edit', $data); 
           $this->load->view('templates/adfooter');  

    } else {
        redirect('users/login');
    }


 } 






 public function ad_view_team($id){ 

    if($this->isUserLoggedIn){ 

    $data = array(); 
     
    // Check whether id is not empty 
    if(!empty($id)){ 
        $con = array('team_id' => $id); 
        $data['team'] = $this->Team_Model->getRowsTeam($con); 
        $data['ma_pages'] = 'ad_view_team'; 

        
         

    }else{ 
        redirect('team/ad_index'); 
    } 

       // Load the add page view 
              $this->load->view('templates/adheader', $data); 
              $this->load->view('ad_team/ad_view', $data); 
              $this->load->view('templates/adfooter'); 


        } else {
            redirect('users/login');
        }

    
} 





 public function delete_team($id){ 

    if($this->isUserLoggedIn){ 
     // Check whether id is not empty 
     if($id){ 
         $con = array('team_id' => $id); 
         $formArray = $this->Team_Model->getRowsTeam($con); 
          
         // Delete team data 
         $delete = $this->Team_Model->delete($id); 
          
         if($delete){ 
             // Remove file from the server  
             if(!empty($formArray['file_name'])){ 
                 @unlink($this->uploadPath.$formArray['file_name']);  
             }  
              
             $this->session->set_userdata('success_msg', 'Suppression - Réussie.');
             redirect('team/ad_index'); 
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
