<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Posters extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        // Load Poster_Model model
        $this->load->model('Poster_Model');

        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->load->library('pagination');
        $this->perPage = 10;


        // File upload path
        $this->uploadPath = 'uploads/poster_img/';

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
            $rowCounts = $this->Poster_Model->getRowsPoster($conditions);

            //Pagination config
            $config['base_url'] = base_url() . 'index.php/posters/ad_index/';
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
            $data['posters'] = $this->Poster_Model->getRowsPoster($conditions);

            $data['ma_pages'] = 'ad_index_posters';

            $data['controller'] = 'posters';
            $data['function'] = 'ad_index';


            // Load the list page view
            $this->load->view('layouts/adheader', $data);
            $this->load->view('ad_posters/ad_index', $data);
            $this->load->view('layouts/adfooter');

        } else {
            redirect('users/login');
        }


    } // ad_index ends here

    /**
     * add a poster
     */

    public function add_poster()
    {


        if ($this->isUserLoggedIn) {

            $data = $formArray = array();
            $error = '';


            // If create request is submitted
            if ($this->input->post('poster_add')) {
                // Form field validation rules
                $this->form_validation->set_rules('poster_name', 'nom', 'required');
                $this->form_validation->set_rules('poster_theme', 'theme', 'required');
                $this->form_validation->set_rules('poster_stock', 'stock', 'required');

                $this->form_validation->set_rules('image', 'image', 'callback_file_check');

                // Prepare gallery data
                $formArray = array(
                    'poster_name' => $this->input->post('poster_name', TRUE),
                    'poster_theme' => $this->input->post('poster_theme', TRUE),
                    'poster_stock' => $this->input->post('poster_stock', TRUE)
                );

                // Validate submitted form data
                if ($this->form_validation->run() == true) {
                    // Upload image file to the server
                    if (!empty($_FILES['image'])) {
                        $insert = $this->Poster_Model->insert($formArray);
                        if ($insert) {
                            $id = $this->db->insert_id();
                            $file = explode(".", $_FILES["image"]["name"]);
                            $imageExtension = end($file);
                            $imageName = $id . $imageExtension;
                            // File upload configuration
                            $config['upload_path'] = $this->uploadPath;
                            $config['allowed_types'] = 'jpg|jpeg|png|gif';
                            $config['file_name'] = $imageName;

                            // Load and initialize upload library
                            $this->load->library('upload', $config);
                            $this->upload->initialize($config);

                            // Upload file to server
                            if ($this->upload->do_upload('image')) {
                                // Uploaded file data
                                $fileData = $this->upload->data();
                                $Array['file_name'] = $fileData['file_name'];
                            } else {
                                $error = $this->upload->display_errors();
                            }
                        }

                    }

                    if (empty($error)) {
                        // update data
                        $update = $this->Poster_Model->update($Array, $id);

                        if ($update) {
                            $this->session->set_userdata('success_msg', 'Ajout - Réussie.');
                            redirect('posters/ad_index');
                        } else {
                            $error = 'Quelques problèmes sont survenus, veuillez réessayer.';
                        }
                    }

                    $data['error_msg'] = $error;
                }

            }


            $data['poster'] = $formArray;

            $data['controller'] = 'posters';
            $data['ma_pages'] = $data['function'] = 'add_poster';


            // Load the add page view
            $this->load->view('layouts/adheader', $data);
            $this->load->view('ad_posters/add', $data);
            $this->load->view('layouts/adfooter');

        } else {
            redirect('users/login');
        }


    } // add_poster ends here

    public function file_check()
    {
        if (empty($_FILES['image']['name'])) {
            $this->form_validation->set_message('file_check', 'Selectionner une image (.jpg .jpeg .png .gif).');
            return FALSE;
        } else {
            return TRUE;
        }
    } // file_check ends here

    /**
     * Edit poster
     * @param $id
     */
    public function edit_poster($id)
    {

        if ($this->isUserLoggedIn) {

            $data = $formArray = array();

            // Get image data
            $con = array('poster_id' => $id);
            $formArray = $this->Poster_Model->getRowsPoster($con);
            $prevFArray = $formArray['file_name'];
            // Remove old file from the server
            if (!empty($prevFArray)) {
                unlink($this->uploadPath . $prevFArray);
            }


            // If update request is submitted
            if ($this->input->post('poster_edit')) {
                // Form field validation rules
                $this->form_validation->set_rules('poster_name', 'nom', 'required');
                $this->form_validation->set_rules('poster_theme', 'theme', 'required');
                $this->form_validation->set_rules('poster_stock', 'stock', 'required');

                $this->form_validation->set_rules('image', 'image', 'callback_file_check');

                // Prepare gallery data
                $formArray = array(
                    'poster_name' => $this->input->post('poster_name', TRUE),
                    'poster_theme' => $this->input->post('poster_theme', TRUE),
                    'poster_stock' => $this->input->post('poster_stock', TRUE)
                );

                // Validate submitted form data
                if ($this->form_validation->run() == true) {

                    // Upload image file to the server
                    if (!empty($_FILES['image']['name'])) {
                        $file = explode(".", $_FILES["image"]["name"]);
                        $imageExtension = end($file);
                        $imageName = $id . "." . $imageExtension;

                        // File upload configuration
                        $config['upload_path'] = $this->uploadPath;
                        $config['allowed_types'] = 'jpg|jpeg|png|gif';

                        // Load and initialize upload library
                        $this->load->library('upload', $config);
                        $this->upload->initialize($config);

                        // Upload file to server
                        if ($this->upload->do_upload('image')) {
                            // Uploaded file data
                            $fileData = $this->upload->data();
                            $formArray['file_name'] = $imageName;


                        } else {
                            $error = $this->upload->display_errors();
                        }
                    }


                    if (empty($error)) {
                        // Update image data
                        $update = $this->Poster_Model->update($formArray, $id);

                        if ($update) {
                            $this->session->set_userdata('success_msg', 'Mise à jour - Réussie.');
                            redirect('posters/ad_index');
                        } else {
                            $error = 'Quelques problèmes sont survenus, veuillez réessayer.';
                        }
                    }

                    $data['error_msg'] = $error;
                }
            }


            $data['poster'] = $formArray;

            $data['controller'] = 'posters';
            $data['ma_pages'] = $data['function'] = 'edit_poster';


            // Load the edit page view
            $this->load->view('layouts/adheader', $data);
            $this->load->view('ad_posters/edit', $data);
            $this->load->view('layouts/adfooter');

        } else {
            redirect('users/login');
        }


    } // edit_poster ends here

    public function ad_view_($id)
    {

        if ($this->isUserLoggedIn) {

            $data = array();

            // Check whether id is not empty
            if (!empty($id)) {
                $con = array('poster_id' => $id);
                $data['poster'] = $this->Poster_Model->getRowsPoster($con);

                $data['controller'] = 'poster';
                $data['ma_pages'] = $data['function'] = 'ad_view_poster';


            } else {
                redirect('posters/ad_index');
            }

            // Load the add page view
            $this->load->view('layouts/adheader', $data);
            $this->load->view('ad_posters/ad_view', $data);
            $this->load->view('layouts/adfooter');


        } else {
            redirect('users/login');
        }


    } // ad_view_poster ends here
    /**
     * delete poster
     * @param $id
     */

    public function delete_poster($id)
    {

        if ($this->isUserLoggedIn) {
            // Check whether id is not empty
            if ($id) {
                $con = array('poster_id' => $id);
                $formArray = $this->Poster_Model->getRowsPoster($con);

                // Delete poster data
                $delete = $this->Poster_Model->delete($id);

                if ($delete) {
                    // Remove file from the server
                    if (!empty($formArray['file_name'])) {
                        unlink($this->uploadPath . $formArray['file_name']);
                    }

                    $this->session->set_userdata('success_msg', 'Suppression - Réussie.');
                    redirect('posters/ad_index');
                } else {
                    $this->session->set_userdata('error_msg', 'Veuillez rééssayer');
                }
            }

        } else {
            redirect('users/login');
        }


    } // delete poster ends here


}
