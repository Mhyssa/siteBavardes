<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Mentions extends CI_Controller{


    public function index(){

        $data = array();

        $data['ma_pages'] = 'index_mentions';

        $this->load->view('templates/header', $data);
        $this->load->view('mentions/index');
        $this->load->view('templates/footer');


    }




}





?>