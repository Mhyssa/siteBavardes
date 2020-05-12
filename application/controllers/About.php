


<?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class About extends CI_Controller {  

    
      
      function __construct() { 
          parent::__construct(); 
           
          // Load Presse_Model model 
          $this->load->model('Presse_Model'); 
           
          $this->load->helper('form'); 
          $this->load->library('form_validation'); 

  
                // File upload path 
        $this->uploadPath = 'uploads/presse_img/'; 
  
        $this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn'); 
      } 






function index($lang = ''){

        $data = array(); 
         

             $data['presse'] = $this->Presse_Model->getRowsPresse(); 
             $data['ma_pages'] = 'index_about_presse'; 



                $this->lang->load('content', $lang == ''?'fr':$lang);
                $data['controller'] = 'about';
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


                //about/index
                $data['about_body_text1'] = $this->lang->line('about_body_text1');
                $data['about_body_text2'] = $this->lang->line('about_body_text2');
                

                //people/index
                $data['presse_cat3'] = $this->lang->line('presse_cat3');
                $data['presse_cat4'] = $this->lang->line('presse_cat4');



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
        $this->load->view('layouts/header', $data); 
        $this->load->view('about/index', $data); 
        $this->load->view('layouts/footer', $data); 



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
   

               $data['presse'] = $this->Presse_Model->getRowsPresse(); 
               $data['ma_pages'] = 'ad_index_presse'; 


                // Load the list page view 
          $this->load->view('layouts/adheader', $data); 
          $this->load->view('ad_presse/ad_index', $data); 
          $this->load->view('layouts/adfooter'); 

        } else {
            redirect('users/login');
        }



      } 



      
    public function add_presse(){ 



        if($this->isUserLoggedIn){ 

     $data = $formArray = array(); 
     $error = ''; 
      

                // If create request is submitted 
                if($this->input->post('presse_add')){ 
                // Form field validation rules 
                $this->form_validation->set_rules('presse_name', 'nom', 'required');
                $this->form_validation->set_rules('presse_cat', 'catégorie', 'required');
                $this->form_validation->set_rules('presse_link', 'lien', 'required'); 

                
                // Prepare gallery data 
                $formArray = array( 
                    'presse_name' => $this->input->post('presse_name',TRUE),
                    'presse_cat' => $this->input->post('presse_cat',TRUE),
                    'presse_description' => $this->input->post('presse_description',TRUE),
                    'presse_link' => $this->input->post('presse_link',TRUE)
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
                        $insert = $this->Presse_Model->insert($formArray); 
                        
                        if($insert){ 
                            $this->session->set_userdata('success_msg', 'Ajout - Réussie.'); 
                            redirect('About/ad_index'); 
                        }else{ 
                            $error = 'Quelques problèmes sont survenus, veuillez réessayer.'; 
                        } 
                    } 
                    
                    $data['error_msg'] = $error; 
                } 
            
                }
        
        
        $data['ma_pages'] = 'add_presse'; 
        $data['presse'] = $formArray; 

        
        // Load the add page view 
        $this->load->view('layouts/adheader', $data); 
        $this->load->view('ad_presse/add', $data); 
        $this->load->view('layouts/adfooter'); 

            } else {
                redirect('users/login');
            }





        }
















  
 public function edit_presse($id){ 

    if($this->isUserLoggedIn){ 

     $data = $formArray = array(); 
      
     // Get image data 
     $con = array('presse_id' => $id); 
     $formArray = $this->Presse_Model->getRowsPresse($con); 
     $prevFArray = $formArray['file_name']; 
      

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
            'presse_description' => $this->input->post('presse_description',TRUE),
            'presse_link' => $this->input->post('presse_link',TRUE)
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
                 $update = $this->Presse_Model->update($formArray, $id); 
                  
                 if($update){ 
                     $this->session->set_userdata('success_msg', 'Mise à jour - Réussie.'); 
                     redirect('About/ad_index'); 
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
           $this->load->view('layouts/adheader', $data); 
           $this->load->view('ad_presse/edit', $data); 
           $this->load->view('layouts/adfooter');  

    } else {
        redirect('users/login');
    }


 } 












 public function ad_view_presse($id){ 

    if($this->isUserLoggedIn){ 

    $data = array(); 
     
    // Check whether id is not empty 
    if(!empty($id)){ 
        $con = array('presse_id' => $id); 
        $data['presse'] = $this->Presse_Model->getRowsPresse($con); 
        $data['ma_pages'] = 'ad_view_presse'; 

        
         

    }else{ 
        redirect('About/ad_index'); 
    } 

       // Load the add page view 
              $this->load->view('layouts/adheader', $data); 
              $this->load->view('ad_presse/ad_view', $data); 
              $this->load->view('layouts/adfooter'); 


        } else {
            redirect('users/login');
        }

    
} 













 public function delete_presse($id){ 

    if($this->isUserLoggedIn){ 
     // Check whether id is not empty 
     if($id){ 
         $con = array('presse_id' => $id); 
         $formArray = $this->Presse_Model->getRowsPresse($con); 
          
         // Delete presse data 
         $delete = $this->Presse_Model->delete($id); 
          
         if($delete){ 
             // Remove file from the server  
             if(!empty($formArray['file_name'])){ 
                 @unlink($this->uploadPath.$formArray['file_name']);  
             }  
              
             $this->session->set_userdata('success_msg', 'Suppression - Réussie.');
             redirect('About/ad_index'); 
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
