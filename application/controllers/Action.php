<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Action extends CI_Controller{



    public function index(){

        $data = array();

        $data['ma_pages'] = 'index_action';

        $this->load->view('templates/header', $data);
        $this->load->view('action/index');
        $this->load->view('templates/footer');


    }




}



?>