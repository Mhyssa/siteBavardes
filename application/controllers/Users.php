<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class Users extends CI_Controller { 
     
    function __construct() { 
        parent::__construct(); 
         
        // Load form validation ibrary & user model 
        $this->load->helper('form'); 
        $this->load->library('form_validation'); 

        $this->load->model('User_Model'); 

         
        // File upload path 
        $this->uploadPath = 'uploads/admin_img/';
        
        // User login status 
        
        $this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn'); 
    }





    public function admin(){
        if($this->isUserLoggedIn){ 
            redirect('users/ad_index');                
        }else{ 
            redirect('users/login'); 
        } 
    }



 

    public function account($lang = ''){ 
        $data = array(); 

        $this->lang->load('content', $lang == ''?'fr':$lang);
        $data['controller'] = 'users';
        $data['function'] = 'account';

        if($this->isUserLoggedIn){ 
            $con = array( 
                'us_id' => $this->session->userdata('userId') 
            ); 
            $data['ma_pages'] = 'account';
            $data['user'] = $this->User_Model->getRowsUser($con); 
             

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
            
            

            //users/account
            $data['account_wlc'] = $this->lang->line('account_wlc');
            $data['account_logout'] = $this->lang->line('account_logout');
            $data['account_name'] = $this->lang->line('account_name');
            $data['account_mail'] = $this->lang->line('account_mail');
            $data['account_phone'] = $this->lang->line('account_phone');


            
            //footer
             $data['footer_line1'] = $this->lang->line('footer_line1');
             $data['footer_line2'] = $this->lang->line('footer_line2');
             $data['footer_body_text'] = $this->lang->line('footer_body_text');
                 $data['footer_button_support'] = $this->lang->line('footer_button_support');
             $data['footer_line3'] = $this->lang->line('footer_line3');
         
             $data['footer_mentions'] = $this->lang->line('footer_mentions');
             $data['footer_rgpd'] = $this->lang->line('footer_rgpd');



            // Pass the user data and load view 
            $this->load->view('templates/header', $data); 
            $this->load->view('users/account', $data); 
            $this->load->view('templates/footer', $data); 
        }else{ 
            redirect('users/login'); 
        } 
    } 




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
   

               $data['admin'] = $this->User_Model->getRowsAdmin(); 
               $data['ma_pages'] = 'ad_index_admin'; 


                // Load the list page view 
          $this->load->view('templates/adheader', $data); 
          $this->load->view('ad_admin/ad_index', $data); 
          $this->load->view('templates/adfooter', $data); 

        } else {
            redirect('users/login');
        }



      } // ad_index ends here




 public function add_admin(){ 



    if($this->isUserLoggedIn){ 

        $data = $formArray = array(); 
        $error = ''; 
      

                // If create request is submitted 
                if($this->input->post('admin_add')){ 
                // Form field validation rules 
                $this->form_validation->set_rules('us_lname','nom','required');
                $this->form_validation->set_rules('us_fname','prénom','required');
                $this->form_validation->set_rules('us_password','mot de passe','required');
                $this->form_validation->set_rules('us_phone','n° de téléphone','integer');
                $this->form_validation->set_rules('us_email','adresse e-mail','required|valid_email');
                $this->form_validation->set_rules('us_status','statut admin','required');
                
                // Prepare gallery data 
                $formArray = array( 
                    'us_fname' => $this->input->post('us_fname',TRUE),
                    'us_lname' => $this->input->post('us_lname',TRUE),
                    'us_password' => sha1($this->input->post('us_password',TRUE)),
                    'us_phone' => $this->input->post('us_phone',TRUE),
                    'us_email' => $this->input->post('us_email',TRUE),
                    'us_status' => $this->input->post('us_status',TRUE)
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
                        $insert = $this->User_Model->insert($formArray); 
                        
                        if($insert){ 
                            $this->session->set_userdata('success_msg', 'Ajout - Réussie.'); 
                            redirect('users/ad_index'); 
                        }else{ 
                            $error = 'Quelques problèmes sont survenus, veuillez réessayer.'; 
                        } 
                    } 
                    
                    $data['error_msg'] = $error; 
                } 
            
                }
        
        
            $data['ma_pages'] = 'add_admin'; 
            $data['admin'] = $formArray; 

            
            // Load the add page view 
            $this->load->view('templates/adheader', $data); 
            $this->load->view('ad_admin/add', $data); 
            $this->load->view('templates/adfooter'); 

    } else {
        redirect('users/login');
    }


 } // add_admin ends here



 public function edit_admin($id){ 

    if($this->isUserLoggedIn){ 

     $data = $formArray = array(); 
      
     // Get image data 
     $con = array('us_id' => $id); 
     $formArray = $this->User_Model->getRowsAdmin($con); 
     $prevFArray = $formArray['file_name']; 
      

     // If update request is submitted 
     if($this->input->post('admin_edit')){ 
         // Form field validation rules    
                $this->form_validation->set_rules('us_lname','nom','required');
                $this->form_validation->set_rules('us_fname','prénom','required');
                $this->form_validation->set_rules('us_password','mot de passe','required');
                $this->form_validation->set_rules('us_phone','n° de téléphone','integer');
                $this->form_validation->set_rules('us_email','adresse e-mail','required|valid_email');
                $this->form_validation->set_rules('us_status','statut admin','required');
          
         // Prepare gallery data 
         $formArray = array( 
            'us_fname' => $this->input->post('us_fname',TRUE),
            'us_lname' => $this->input->post('us_lname',TRUE),
            'us_password' => sha1($this->input->post('us_password',TRUE)),
            'us_phone' => $this->input->post('us_phone',TRUE),
            'us_email' => $this->input->post('us_email',TRUE),
            'us_status' => $this->input->post('us_status',TRUE)
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
                 $update = $this->User_Model->update($formArray, $id); 
                  
                 if($update){ 
                     $this->session->set_userdata('success_msg', 'Mise à jour - Réussie.'); 
                     redirect('users/ad_index'); 
                 }else{ 
                     $error = 'Quelques problèmes sont survenus, veuillez réessayer.'; 
                 } 
             } 
              
             $data['error_msg'] = $error; 
         } 
     } 



       
           $data['ma_pages'] = 'edit_admin'; 
           $data['admin'] = $formArray; 

            
           // Load the edit page view 
           $this->load->view('templates/adheader', $data); 
           $this->load->view('ad_admin/edit', $data); 
           $this->load->view('templates/adfooter');  

    } else {
        redirect('users/login');
    }


 } // edit_admin ends here



 public function delete_admin($id){ 

    if($this->isUserLoggedIn){ 
     // Check whether id is not empty 
     if($id){ 
         $con = array('us_id' => $id); 
         $formArray = $this->User_Model->getRowsAdmin($con); 
          
         // Delete users (admin) data 
         $delete = $this->User_Model->delete($id); 
          
         if($delete){ 
             // Remove file from the server  
             if(!empty($formArray['file_name'])){ 
                 @unlink($this->uploadPath.$formArray['file_name']);  
             }  
              
             $this->session->set_userdata('success_msg', 'Suppression - Réussie.');
             redirect('users/ad_index'); 
         }else{ 
             $this->session->set_userdata('error_msg', 'Veuillez rééssayer'); 
         } 
     } 

    } else {
        redirect('users/login');
    }

        

     
 } // delete_admin ends






















 
    
 
    public function registration($lang = ''){ 
        $data = $userData = array(); 


        $this->lang->load('content', $lang == ''?'fr':$lang);
        $data['controller'] = 'users';
        $data['function'] = 'registration';


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
        
        
        
                        //users/registration
                        $data['create_title'] = $this->lang->line('create_title');
                        $data['create_fname'] = $this->lang->line('create_fname');
                        $data['create_lname'] = $this->lang->line('create_lname');
                        $data['create_mail'] = $this->lang->line('create_mail');
                        $data['create_phone'] = $this->lang->line('create_phone');
                        $data['create_psw'] = $this->lang->line('create_psw');
                        $data['create_psw_cf'] = $this->lang->line('create_psw_cf');
                        $data['create_reset'] = $this->lang->line('create_reset');
                        $data['create_submit'] = $this->lang->line('create_submit');
                        $data['create_act'] = $this->lang->line('create_act');
                        $data['create_clk'] = $this->lang->line('create_clk');

              
        
                        //footer
                        $data['footer_line1'] = $this->lang->line('footer_line1');
                        $data['footer_line2'] = $this->lang->line('footer_line2');
                        $data['footer_body_text'] = $this->lang->line('footer_body_text');
                            $data['footer_button_support'] = $this->lang->line('footer_button_support');
                        $data['footer_line3'] = $this->lang->line('footer_line3');
                    
                        $data['footer_mentions'] = $this->lang->line('footer_mentions');
                        $data['footer_rgpd'] = $this->lang->line('footer_rgpd');
         


        // If registration request is submitted 
        if($this->input->post('signupSubmit')){ 
            $this->form_validation->set_rules('us_fname', 'Prénom', 'required|alpha'); 
            $this->form_validation->set_rules('us_lname', 'Nom', 'required|alpha'); 
            $this->form_validation->set_rules('us_email', 'Adresse e-mail', 'required|valid_email|callback_email_check'); 
            $this->form_validation->set_rules('us_password', 'Mot de Passe', 'required'); 
            $this->form_validation->set_rules('us_phone', 'Numéro de téléphone', 'integer'); 
            $this->form_validation->set_rules('us_conf_password', 'Mot de Passe à confirmer', 'required|matches[us_password]'); 
 
            $userData = array( 
                'us_fname' => strip_tags($this->input->post('us_fname',true)), 
                'us_lname' => strip_tags($this->input->post('us_lname',true)), 
                'us_email' => strip_tags($this->input->post('us_email',true)), 
                'us_password' => sha1($this->input->post('us_password',true)), 
                'us_phone' => strip_tags($this->input->post('us_phone',true)),
            ); 
 
            if($this->form_validation->run() == true){ 
                $insert = $this->User_Model->insert($userData); 
                if($insert){ 
                    $data['success_msg'] = $this->lang->line('create_suc_msg'); 
                }else{ 
                    
                    $data['error_msg'] = $this->lang->line('create_err_msg1'); 
                } 
            }else{ 
                $data['error_msg'] = $this->lang->line('create_err_msg2'); 
            } 
        } 
         
        // Posted data 
        $data['ma_pages'] = 'registration';
        $data['user'] = $userData; 
         
        // Load view 
        $this->load->view('templates/header', $data); 
        $this->load->view('users/registration', $data); 
        $this->load->view('templates/footer', $data); 
    } 
     


    public function login($lang = ''){ 
        $data = array(); 


        $this->lang->load('content', $lang == ''?'fr':$lang);
        $data['controller'] = 'users';
        $data['function'] = 'login';


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
        
        
        
                        //users/login
                        $data['login_title'] = $this->lang->line('login_title');
                        $data['login_mail'] = $this->lang->line('login_mail');
                        $data['login_psw'] = $this->lang->line('login_psw');
                        $data['login_reset'] = $this->lang->line('login_reset');
                        $data['login_submit'] = $this->lang->line('login_submit');
                        $data['login_act'] = $this->lang->line('login_act');
                        $data['login_clk'] = $this->lang->line('login_clk');
        
        
        
                        //footer
                        $data['footer_line1'] = $this->lang->line('footer_line1');
                        $data['footer_line2'] = $this->lang->line('footer_line2');
                        $data['footer_body_text'] = $this->lang->line('footer_body_text');
                            $data['footer_button_support'] = $this->lang->line('footer_button_support');
                        $data['footer_line3'] = $this->lang->line('footer_line3');
                    
                        $data['footer_mentions'] = $this->lang->line('footer_mentions');
                        $data['footer_rgpd'] = $this->lang->line('footer_rgpd');


         
        // Get messages from the session 
        if($this->session->userdata('success_msg')){ 
            $data['success_msg'] = $this->session->userdata('success_msg'); 
            $this->session->unset_userdata('success_msg'); 
        } 
        if($this->session->userdata('error_msg')){ 
            $data['error_msg'] = $this->session->userdata('error_msg'); 
            $this->session->unset_userdata('error_msg'); 
        } 
         
        // If login request submitted 
        if($this->input->post('loginSubmit')){ 
            $this->form_validation->set_rules('us_email', 'Adresse e-mail', 'required|valid_email'); 
            $this->form_validation->set_rules('us_password', 'Mot de Passe', 'required'); 
             
            if($this->form_validation->run() == true){ 
                $con = array( 
                    'returnType' => 'single', 
                    'conditions' => array( 
                        'us_email'=> $this->input->post('us_email',true), 
                        'us_password' => sha1($this->input->post('us_password',true)),
                        'us_status' => 0
                        
                        ) 
                ); 
                $checkLogin = $this->User_Model->getRowsUser($con); 
                if($checkLogin){ 
                    $this->session->set_userdata('isUserLoggedIn', TRUE); 
                    $this->session->set_userdata('userId', $checkLogin['us_id']); 
                    redirect('users/account/'.$lang); 
                }else{ 
                    $data['error_msg'] = $this->lang->line('login_err_msg1'); 
                } 
            }else{ 
                $data['error_msg'] = $this->lang->line('login_err_msg2'); 
            } 




            if($this->form_validation->run() == true){ 
                $con = array( 
                    'returnType' => 'single', 
                    'conditions' => array( 
                        'us_email'=> $this->input->post('us_email',true), 
                        'us_password' => sha1($this->input->post('us_password',true)),
                        'us_status' => 1
                        
                        ) 
                ); 
                $checkLogin = $this->User_Model->getRowsUser($con); 
                if($checkLogin){ 
                    $this->session->set_userdata('isUserLoggedIn', TRUE); 
                    $this->session->set_userdata('userId', $checkLogin['us_id']); 
                    redirect('users/admin'); 
                }else{ 
                    $data['error_msg'] = $this->lang->line('login_err_msg1'); 
                } 
            }else{ 
                $data['error_msg'] = $this->lang->line('login_err_msg2'); 
            } 
        } 

        $data['ma_pages'] = 'login';
         
        // Load view 
        $this->load->view('templates/header', $data); 
        $this->load->view('users/login', $data); 
        $this->load->view('templates/footer', $data); 
    } 




    public function logout(){ 
        $this->session->unset_userdata('isUserLoggedIn'); 
        $this->session->unset_userdata('userId'); 
        $this->session->sess_destroy(); 
        redirect('users/login'); 
    } 
     
     
    // Existing email check during validation 
    public function email_check($str){ 
        $con = array( 
            'returnType' => 'count', 
            'conditions' => array( 
                'us_email' => $str 
            ) 
        ); 
        $checkEmail = $this->User_Model->getRowsUser($con); 
        if($checkEmail > 0){ 
            $this->form_validation->set_message('email_check', $this->lang->line('create_mail_check')); 
            return FALSE; 
        }else{ 
            return TRUE; 
        } 
    }



} // controller ends here
?>