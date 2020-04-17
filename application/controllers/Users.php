<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class Users extends CI_Controller { 
     
    function __construct() { 
        parent::__construct(); 
         
        // Load form validation ibrary & user model 
        $this->load->library('form_validation'); 
        $this->load->model('User_Model'); 
         
        // User login status 
        
        $this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn'); 
    } 


    public function admin(){
        if($this->isUserLoggedIn){ 
            redirect('event/ad_index');                
        }else{ 
            redirect('users/login'); 
        } 
    }
 
    public function account(){ 
        $data = array(); 
        if($this->isUserLoggedIn){ 
            $con = array( 
                'us_id' => $this->session->userdata('userId') 
            ); 
            $data['ma_pages'] = 'account';
            $data['user'] = $this->User_Model->getRowsUser($con); 
             
            // Pass the user data and load view 
            $this->load->view('templates/header', $data); 
            $this->load->view('users/account', $data); 
            $this->load->view('templates/footer'); 
        }else{ 
            redirect('users/login'); 
        } 
    } 
 
    
 
    public function registration(){ 
        $data = $userData = array(); 
         
        // If registration request is submitted 
        if($this->input->post('signupSubmit')){ 
            $this->form_validation->set_rules('us_fname', 'Prénom', 'required|alpha'); 
            $this->form_validation->set_rules('us_lname', 'Nom', 'required|alpha'); 
            $this->form_validation->set_rules('us_email', 'Adresse e-mail', 'required|valid_email|callback_email_check'); 
            $this->form_validation->set_rules('us_password', 'Mot de Passe', 'required'); 
            $this->form_validation->set_rules('us_gender', 'Genre', 'required'); 
            $this->form_validation->set_rules('us_phone', 'Numéro de téléphone', 'integer'); 
            $this->form_validation->set_rules('us_conf_password', 'Mot de Passe à confirmer', 'required|matches[us_password]'); 
 
            $userData = array( 
                'us_fname' => strip_tags($this->input->post('us_fname',true)), 
                'us_lname' => strip_tags($this->input->post('us_lname',true)), 
                'us_email' => strip_tags($this->input->post('us_email',true)), 
                'us_password' => sha1($this->input->post('us_password',true)), 
                'us_gender' => $this->input->post('us_gender',true), 
                'us_phone' => strip_tags($this->input->post('us_phone',true)) 
            ); 
 
            if($this->form_validation->run() == true){ 
                $insert = $this->User_Model->insert($userData); 
                if($insert){ 
                    $data['success_msg'] = 'Votre compte a été crée avec succès, vous pouvez vous y connecter dès à présent.'; 
                    redirect('users/login'); 
                }else{ 
                    $data['error_msg'] = 'Erreurs - Veuillez rééssayer.'; 
                } 
            }else{ 
                $data['error_msg'] = 'Veuillez remplir tous les champs ci-dessous.'; 
            } 
        } 
         
        // Posted data 
        $data['ma_pages'] = 'registration';
        $data['user'] = $userData; 
         
        // Load view 
        $this->load->view('templates/header', $data); 
        $this->load->view('users/registration', $data); 
        $this->load->view('templates/footer'); 
    } 
     


    public function login(){ 
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
                    redirect('users/account'); 
                }else{ 
                    $data['error_msg'] = 'Adresse e-mail et/ou Mot de passe erroné(s), veuillez rééssayer.'; 
                } 
            }else{ 
                $data['error_msg'] = 'Veuillez remplir tous les champs ci-dessous.'; 
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
                    $data['error_msg'] = 'Adresse e-mail et/ou Mot de passe erroné(s), veuillez rééssayer.'; 
                } 
            }else{ 
                $data['error_msg'] = 'Veuillez remplir tous les champs ci-dessous.'; 
            } 
        } 

        $data['ma_pages'] = 'login';
         
        // Load view 
        $this->load->view('templates/header', $data); 
        $this->load->view('users/login', $data); 
        $this->load->view('templates/footer'); 
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
            $this->form_validation->set_message('email_check', 'The given email already exists.'); 
            return FALSE; 
        }else{ 
            return TRUE; 
        } 
    } 



} // controller ends here
?>