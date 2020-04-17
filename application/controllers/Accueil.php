<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Accueil extends CI_Controller{


    public function index(){

        $data = array();
        $data['ma_pages'] = 'index_accueil';

        $this->load->view('templates/header', $data);
        $this->load->view('accueil/index');
        $this->load->view('templates/footer');

    }



}





?>