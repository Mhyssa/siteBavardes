<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Politique extends CI_Controller{


    public function index($lang = ''){

        $data = array();
        $data['ma_pages'] = 'index_politique';

            $this->lang->load('content', $lang == ''?'fr':$lang);
            $data['controller'] = 'politique';
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



            //politique/index
            $data['politique_h2_n1'] = $this->lang->line('politique_h2_n1');
                $data['politique_body_text1_p1'] = $this->lang->line('politique_body_text1_p1');
                $data['politique_body_text1_p2'] = $this->lang->line('politique_body_text1_p2');
                $data['politique_body_text1_p3'] = $this->lang->line('politique_body_text1_p3');
            $data['politique_h2_n2'] = $this->lang->line('politique_h2_n2');
                $data['politique_h3_n1'] = $this->lang->line('politique_h3_n1');
                    $data['politique_body_text2'] = $this->lang->line('politique_body_text2');
                        $data['politique_body_text2_li1'] = $this->lang->line('politique_body_text2_li1');
                        $data['politique_body_text2_li2'] = $this->lang->line('politique_body_text2_li2');
                        $data['politique_body_text2_li3'] = $this->lang->line('politique_body_text2_li3');
            $data['politique_h4_n1'] = $this->lang->line('politique_h4_n1');
                $data['politique_body_text4_n1'] = $this->lang->line('politique_body_text4_n1');
                    $data['politique_body_text4_li1'] = $this->lang->line('politique_body_text4_li1');
                    $data['politique_body_text4_li2'] = $this->lang->line('politique_body_text4_li2');
                    $data['politique_body_text4_li3'] = $this->lang->line('politique_body_text4_li3');
            $data['politique_h4_n2'] = $this->lang->line('politique_h4_n2');
                $data['politique_body_text4_n2'] = $this->lang->line('politique_body_text4_n2');
                $data['politique_h4_n3'] = $this->lang->line('politique_h4_n3');
                    $data['politique_body_text4_n3'] = $this->lang->line('politique_body_text4_n3');
                $data['politique_h4_n4'] = $this->lang->line('politique_h4_n4');
                    $data['politique_body_text4_n4'] = $this->lang->line('politique_body_text4_n4');
                $data['politique_h3_n1'] = $this->lang->line('politique_h3_n1');
                $data['politique_h4_n5'] = $this->lang->line('politique_h4_n5');
                    $data['politique_body_text5'] = $this->lang->line('politique_body_text5');
                $data['politique_h4_n6'] = $this->lang->line('politique_h4_n6');
                    $data['politique_body_text6'] = $this->lang->line('politique_body_text6');
                $data['politique_h3_n2'] = $this->lang->line('politique_h3_n2');
                    $data['politique_body_text7'] = $this->lang->line('politique_body_text7');
                $data['politique_h3_n3'] = $this->lang->line('politique_h3_n3');
                    $data['politique_body_text8'] = $this->lang->line('politique_body_text8');






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
        $this->load->view('politique/index', $data);
        $this->load->view('layouts/footer', $data);
    }


}




?>