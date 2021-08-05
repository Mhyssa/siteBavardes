<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Borrowing extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        // Load Poster_Model model
        $this->load->model('Borrowing_Model');

        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->load->library('pagination');
        $this->perPage = 10;


        $this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn');
    } // __construct ends here

    /**
     * index borrowing of books, magasines, games, dvd, bd
     */
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
            $rowCounts = $this->Borrowing_Model->getRowsBorrowing($conditions);

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
            $data['emprunts'] = $this->Borrowing_Model->getRowsBorrowing($conditions);

            $data['ma_pages'] = 'ad_index_emprunts';

            $data['controller'] = 'borrowing';
            $data['function'] = 'ad_index';


            // Load the list page view
            $this->load->view('layouts/adheader', $data);
            $this->load->view('ad_borrowing/ad_index', $data);
            $this->load->view('layouts/adfooter');

        } else {
            redirect('users/login');
        }
    }


    /**
     * add borrowing
     */

    public function add_borrowing()
    {
        if ($this->isUserLoggedIn) {

            $params = array();
            $params['function']='add_borrowing';
            $params['view'] = 'add';

            if ($this->input->post()) {
                $this->form_validation->set_rules('us_id', 'Utilisateur', 'required');
                $this->form_validation->set_rules('article_id', 'Article', 'required');
                $this->form_validation->set_rules('event', 'Evenement', 'required');

                if ($this->form_validation->run() == true) {
                    $date = new DateTime;
                    $format = $date->format('Y-m-d');
                    $data = array(
                        'borrowing_date' => $format,
                        'us_id' => $this->input->post('us_id'),
                        'event_id' => $this->input->post('event'),
                        'article_id' => $this->input->post('article_id')
                    );

                    if ($this->Borrowing_Model->new($data)) {
                        $this->session->set_flashdata('success_msg', 'l\'emprunt a été enregistré');
                        redirect('borrowing/ad_index');
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
     * load some data and views for methods
     */
    public function loadData($params)
    {
        $this->load->model('User_Model');
        $this->load->model('Event_Model');
        $this->load->model('Articles_Model');
        $conditions = array('returnType' => '');
        $data['users'] = $this->User_Model->getRowsUser($conditions);
        if(array_key_exists("id", $params)){
            $conditions['borrowing_id']=$params['id'];
            $data['emprunt']=$this->Borrowing_Model->getRowsBorrowing($conditions);
        }
        $data['articles'] = $this->Articles_Model->getRowsArticle(array('returnType'=>''));
        $data['events'] = $this->Event_Model->eventsToCome();

        $data['controller'] = 'borrowing';
        $data['ma_pages'] = $data['function'] = $params['function'];


        // Load the add page view
        $this->load->view('layouts/adheader', $data);
        $this->load->view('ad_borrowing/'.$params['view'], $data);
        $this->load->view('layouts/adfooter');
    }



    /**
     * edit borrowing identified by id
     *
     */
    public function edit_borrowing()
    {
        if ($this->isUserLoggedIn) {

            $params = array();
            $params['function']='edit_borrowing';
            $params['view'] = 'edit';
            $params['id'] = $this->uri->segment(3);

            if ($this->input->post()) {
                $id=$this->input->post('borrowing_id');
                $this->form_validation->set_rules('us_id', 'Utilisateur', 'required');
                $this->form_validation->set_rules('article_id', 'Article', 'required');
                $this->form_validation->set_rules('event', 'Evenement', 'required');
                $this->form_validation->set_rules('borrowing_return', 'retour', 'required');


                if ($this->form_validation->run() == true) {
                    $date = new DateTime;
                    $format = $date->format('Y-m-d');

                    $emprunt = array(
                        'borrowing_date' => $format,
                        'us_id' => $this->input->post('us_id'),
                        'event_id' => $this->input->post('event'),
                        'article_id' => $this->input->post('article_id'),
                        'borrowing_return' => $this->input->post('borrowing_return')
                    );

                    if ($this->Borrowing_Model->update($emprunt, $id)) {
                        $this->session->set_flashdata('success_msg', 'l\'emprunt a été enregistré');
                        redirect('borrowing/ad_index');
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
     * delete borrowing
     * @param $id
     */

    public function delete_borrowing($id)
    {

        if ($this->isUserLoggedIn) {
            // Check whether id is not empty
            if ($id) {
                $con = array('borrowing_id' => $id);
                $formArray = $this->Borrowing_Model->getRowsBorrowing($con);

                // Delete poster data
                $delete = $this->Borrowing_Model->delete($id);

                if ($delete) {

                    $this->session->set_userdata('success_msg', 'Suppression - Réussie.');
                    redirect('borrowing/ad_index');
                } else {
                    $this->session->set_userdata('error_msg', 'Veuillez rééssayer');
                }
            }

        } else {
            redirect('users/login');
        }


    } // delete poster ends here

}
