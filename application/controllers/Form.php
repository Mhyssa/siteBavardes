
<?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class Form extends CI_Controller {  


    public function index($lang='')
    {

        $data = array(); 
         

        $data['ma_pages'] = 'form'; 

                $this->lang->load('content', $lang == ''?'fr':$lang);
                $data['controller'] = 'form';
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
                $data['header_cont'] = $this->lang->line('header_cont');
                $data['header_title'] = $this->lang->line('header_cont');
                
                        
                $data['header_titre'] = $this->lang->line('header_titre');

                //formulaire index
                $data['form_name'] = $this->lang->line('form_name');
                $data['form_firstname'] = $this->lang->line('form_firstname');
                $data['form_mail'] = $this->lang->line('form_mail');
                $data['form_city'] = $this->lang->line('form_city');
                $data['form_object'] = $this->lang->line('form_object');
                $data['form_message'] = $this->lang->line('form_message');
                $data['form_submit'] = $this->lang->line('form_submit');
                
                //page success
                $data['form_success'] = $this->lang->line('form_success');

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

            

    // Chargement des assistants 'form' et 'url'
    $this->load->helper(array('form', 'url')); 

    //Chargement de la librairie 'validation'
    $this->load->library('form_validation');

    // Chargement de la vue 'contact/index.php'
    $this->load->view('layouts/header', $data);
    
    

    //if($this->input->post('contactForm')){ 
        $this->form_validation->set_rules( 'nom', 'nom' ,'required');
        $this->form_validation->set_rules( 'mail', 'mail' ,'required');
        $this->form_validation->set_rules( 'objet', 'objet' ,'required');
        $this->form_validation->set_rules( 'message','message' ,'required');
       
        if ($this->form_validation->run() == FALSE){
            
            $this->load->view('form/contact', $data);
        } else {
         
            $this->load->view('form/success', $data);
        }

    

    /*} else {
    
        $this->load->view('contact', $data);
    } */

    $this->load->view('layouts/footer', $data);
}
}