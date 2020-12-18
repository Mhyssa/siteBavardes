<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Action extends CI_Controller{



    public function index($lang = ''){

        $data = array();
        $data['ma_pages'] = 'index_action';


        $this->lang->load('content', $lang == ''?'fr':$lang);
        $data['controller'] = 'action';
        $data['function'] = 'index';



            //définition de la langue
            $data['lang'] = $this->lang->line('lang');

            //header
            $data['header_acc'] = $this->lang->line('header_acc');
            $data['header_about'] = $this->lang->line('header_about');
            $data['header_team'] = $this->lang->line('header_team');
            $data['header_act'] = $this->lang->line('header_act');
            $data['header_title'] = $this->lang->line('header_act');
            $data['header_event'] = $this->lang->line('header_event');
            $data['header_col'] = $this->lang->line('header_col');
            $data['header_ppl'] = $this->lang->line('header_ppl');
            $data['header_presse'] = $this->lang->line('header_presse');
            $data['header_pod'] = $this->lang->line('header_pod');
            $data['header_cont'] = $this->lang->line('header_cont');
                
            $data['header_titre'] = $this->lang->line('header_titre');



            //action/index
            $data['act_titre1'] = $this->lang->line('act_titre1');



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



        $this->load->view('layouts/header', $data);
        $this->load->view('action/index', $data);
        $this->load->view('layouts/footer', $data);


    }




}



?>