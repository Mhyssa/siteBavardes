<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Mentions extends CI_Controller{


    public function index($lang = ''){

        $data = array();
        $data['ma_pages'] = 'index_mentions';


            $this->lang->load('content', $lang == ''?'fr':$lang);
            $data['controller'] = 'mentions';
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



            //mentions/index
            $data['mention_h2_n1'] = $this->lang->line('mention_h2_n1');
                $data['mention_body_text1_pt1'] = $this->lang->line('mention_body_text1_pt1');
                $data['mention_body_text1_pt2'] = $this->lang->line('mention_body_text1_pt2');
                $data['mention_body_text1_pt3'] = $this->lang->line('mention_body_text1_pt3');
            $data['mention_h2_n2'] = $this->lang->line('mention_h2_n2');
                $data['mention_body_text2_pt1'] = $this->lang->line('mention_body_text2_pt1');
                $data['mention_body_text2_pt2'] = $this->lang->line('mention_body_text2_pt2');
            $data['mention_h2_n3'] = $this->lang->line('mention_h2_n3');
                $data['mention_body_text3_pt1'] = $this->lang->line('mention_body_text3_pt1');
                $data['mention_body_text3_pt2'] = $this->lang->line('mention_body_text3_pt2');
                $data['mention_body_text3_pt3'] = $this->lang->line('mention_body_text3_pt3');
                $data['mention_body_text3_pt4'] = $this->lang->line('mention_body_text3_pt4');
            $data['mention_h2_n4'] = $this->lang->line('mention_h2_n4');
                $data['mention_body_text4_pt1'] = $this->lang->line('mention_body_text4_pt1');
                $data['mention_body_text4_pt2'] = $this->lang->line('mention_body_text4_pt2');
                $data['mention_body_text4_pt3'] = $this->lang->line('mention_body_text4_pt3');
                $data['mention_body_text4_pt4'] = $this->lang->line('mention_body_text4_pt4');



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

            
        $this->load->view('templates/header', $data);
        $this->load->view('mentions/index', $data);
        $this->load->view('templates/footer', $data);


    }




}





?>