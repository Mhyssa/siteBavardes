<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Reservation extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        // Load Poster_Model model
        $this->load->model('Reservation_Model');

        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->load->library('pagination');
        $this->perPage = 10;


        $this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn');
    } // __construct ends here

    public function ad_index()
    {

        if ($this->isUserLoggedIn) {
            $data = array();

            // Get messages from the session
            if ($this->session->userdata('success_msg')) {
                $data['success_msg'] = $this->session->userdata('success_msg');
                $this->session->unset_userdata('success_msg');
            }
            if ($this->session->userdata('error_msg')) {
                $data['error_msg'] = $this->session->userdata('error_msg');
                $this->session->unset_userdata('error_msg');
            }


            //If search request is submitted
            if ($this->input->post('submitSearch')) {
                $inputKeywords = $this->input->post('searchKeywordAdmin');
                $searchKeywordAdmin = strip_tags($inputKeywords);
                if (!empty($searchKeywordAdmin)) {
                    $this->session->set_userdata('searchKeywordAdmin', $searchKeywordAdmin);
                } else {
                    $this->session->unset_userdata('searchKeywordAdmin');
                }
            } elseif ($this->input->post('submitSearchReset')) {
                $this->session->unset_userdata('searchKeywordAdmin');
            }
            $data['searchKeywordAdmin'] = $this->session->userdata('searchKeywordAdmin');

            //Get Rows count
            $conditions['searchKeywordAdmin'] = $data['searchKeywordAdmin'];
            $conditions['returnType'] = 'count';
            $rowCounts = $this->Reservation_Model->getRowsReservation($conditions);

            //Pagination config
            $config['base_url'] = base_url() . 'index.php/reservation/ad_index/';
            $config['uri_segment'] = 3;
            $config['total_rows'] = $rowCounts;
            $config['per_page'] = $this->perPage;

            //Initialize pagination library
            $this->pagination->initialize($config);

            //Define offset
            $page = $this->uri->segment(3);
            $offset = !$page ? 0 : $page;

            //Get rows
            $conditions['returnType'] = '';
            $conditions['start'] = $offset;
            $conditions['limit'] = $this->perPage;
            $data['reservations'] = $this->Reservation_Model->getRowsReservation($conditions);

            $data['ma_pages'] = 'ad_index_reservations';

            $data['controller'] = 'reservation';
            $data['function'] = 'ad_index';


            // Load the list page view
            $this->load->view('layouts/adheader', $data);
            $this->load->view('ad_reservation/ad_index', $data);
            $this->load->view('layouts/adfooter');

        } else {
            redirect('users/login');
        }


    } // ad_index ends here

    /**
     * add reservation
     */

    public function add_reservation()
    {
        if ($this->isUserLoggedIn) {

            $params = array();
            $params['function']='add_reservation';
            $params['view'] = 'add';

            if ($this->input->post()) {
                $this->form_validation->set_rules('us_id', 'Utilisateur', 'required');
                $this->form_validation->set_rules('poster_id', 'Affiche', 'required');
                $this->form_validation->set_rules('event', 'Evenement', 'required');
                $this->form_validation->set_rules('res_preparation', 'préparation', 'required');

                if ($this->form_validation->run() == true) {
                    $date = new DateTime;
                    $format = $date->format('Y-m-d');
                    $data = array(
                        'res_date' => $format,
                        'us_id' => $this->input->post('us_id'),
                        'event_id' => $this->input->post('event'),
                        'poster_id' => $this->input->post('poster_id'),
                        'res_preparation' => $this->input->post('res_preparation')

                    );

                    if ($this->Reservation_Model->new($data)) {
                        $this->session->set_flashdata('success_msg', 'la reservation a été enregistrée');
                        redirect('reservation/ad_index');
                    } else {
                        $this->session->set_flashdata('error_msg', ' Une erreur s\'est produite! réessayer');
                        $this->loadData($params);

                    }
                } else {
                    $this->session->set_flashdata('error_msg', ' Une erreur s\'est produite! réessayer');
                    $this->loadData($params);
                }

            } else {
                $this->loadData($params);
            }

        } else {
            redirect('users/login');
        }


    } // add_reservation ends here
    /**
     * load some data and views for add method
     */
    public function loadData($params)
    {
        $this->load->model('User_Model');
        $this->load->model('Event_Model');
        $this->load->model('Poster_Model');
        $conditions = array('returnType' => '');
        $data['users'] = $this->User_Model->getRowsUser($conditions);
        if(array_key_exists("id", $params)){
            $conditions['res_id']=$params['id'];
            $data['reservation']=$this->Reservation_Model->getRowsReservation($conditions);
        }
        $data['posters'] = $this->Poster_Model->getAll();
        $data['events'] = $this->Event_Model->eventsToCome();

        $data['controller'] = 'reservation';
        $data['ma_pages'] = $data['function'] = $params['function'];


        // Load the add page view
        $this->load->view('layouts/adheader', $data);
        $this->load->view('ad_reservation/'.$params['view'], $data);
        $this->load->view('layouts/adfooter');
    }



    /**
     * edit reservation identified by id
     *
     */
    public function edit_reservation()
    {
        if ($this->isUserLoggedIn) {

            $params = array();
            $params['function']='edit_reservation';
            $params['view'] = 'edit';
            $params['id'] = $this->uri->segment(3);

            if ($this->input->post()) {
                $id=$this->input->post('res_id');
                $this->form_validation->set_rules('us_id', 'Utilisateur', 'required');
                $this->form_validation->set_rules('poster_id', 'Affiche', 'required');
                $this->form_validation->set_rules('event', 'Evenement', 'required');
                $this->form_validation->set_rules('res_preparation', 'préparation', 'required');
                $this->form_validation->set_rules('res_livraison', 'livraison', 'required');

                if ($this->form_validation->run() == true) {
                    $date = new DateTime;
                    $format = $date->format('Y-m-d');

                    $reservation = array(
                        'res_date' => $format,
                        'us_id' => $this->input->post('us_id'),
                        'event_id' => $this->input->post('event'),
                        'poster_id' => $this->input->post('poster_id'),
                        'res_preparation' => $this->input->post('res_preparation'),
                        'res_livraison' => $this->input->post('res_livraison')
                    );

                    if ($this->Reservation_Model->update($reservation, $id)) {
                        $this->session->set_flashdata('success_msg', 'la reservation a été enregistrée');
                        redirect('reservation/ad_index');
                    } else {
                        $this->session->set_flashdata('error_msg', ' Une erreur s\'est produite! réessayer');
                        $this->loadData($params);

                    }
                } else {
                    $this->session->set_flashdata('error_msg', ' Une erreur s\'est produite! réessayer');
                    $this->loadData($params);
                }

            } else {
                $this->loadData($params);
            }

        } else {
            redirect('users/login');
        }

    }

    /**
     * delete reservation
     * @param $id
     */

    public function delete_reservation($id)
    {

        if ($this->isUserLoggedIn) {
            // Check whether id is not empty
            if ($id) {
                $con = array('res_id' => $id);
                $formArray = $this->Reservation_Model->getRowsReservation($con);

                // Delete poster data
                $delete = $this->Reservation_Model->delete($id);

                if ($delete) {

                    $this->session->set_userdata('success_msg', 'Suppression - Réussie.');
                    redirect('reservation/ad_index');
                } else {
                    $this->session->set_userdata('error_msg', 'Veuillez rééssayer');
                }
            }

        } else {
            redirect('users/login');
        }


    } // delete poster ends here


}
