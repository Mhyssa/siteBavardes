<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Politique extends CI_Controller{


    public function index(){

        $data = array();

        $data['ma_pages'] = 'index_politique';

        $this->load->view('templates/header', $data);
        $this->load->view('politique/index');
        $this->load->view('templates/footer');
    }


}




?>