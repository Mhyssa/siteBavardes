<?php

defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller{


    public function index(){

        $data = array();
         
        $data['ma_pages'] = 'index_about';

        $this->load->view('templates/header', $data);
        $this->load->view('about/index');
        $this->load->view('templates/footer');



    }



}





?>