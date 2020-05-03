<?php

defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller{


    public function index($lang = ''){

        $data = array();
        $data['ma_pages'] = 'index_about';

      
      
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
                $data['header_esmem'] = $this->lang->line('header_esmem');
                    $data['header_user_acc'] = $this->lang->line('header_user_acc');
                    $data['header_login'] = $this->lang->line('header_login');
                    $data['header_reg'] = $this->lang->line('header_reg');
        
                $data['header_titre'] = $this->lang->line('header_titre');



                //about/index
                $data['about_body_text1'] = $this->lang->line('about_body_text1');
                $data['about_body_text2'] = $this->lang->line('about_body_text2');



                //footer
                $data['footer_line1'] = $this->lang->line('footer_line1');
                $data['footer_line2'] = $this->lang->line('footer_line2');
                $data['footer_body_text'] = $this->lang->line('footer_body_text');
                    $data['footer_button_support'] = $this->lang->line('footer_button_support');
                $data['footer_line3'] = $this->lang->line('footer_line3');
            
                $data['footer_mentions'] = $this->lang->line('footer_mentions');
                $data['footer_rgpd'] = $this->lang->line('footer_rgpd');



        $this->load->view('templates/header', $data);
        $this->load->view('about/index', $data);
        $this->load->view('templates/footer', $data);



    }



}





?>