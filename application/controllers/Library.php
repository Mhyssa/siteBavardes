<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Library extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        // Load Poster_Model model
        $this->load->model('Articles_Model');

        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->load->library('pagination');
        $this->perPage = 10;


        // File upload path
        $this->uploadPath = 'uploads/article_img/';

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
            $rowCounts = $this->Articles_Model->getRowsArticle($conditions);

            //Pagination config
            $config['base_url'] = base_url() . 'index.php/library/ad_index/';
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
            $data['articles'] = $this->Articles_Model->getRowsArticle($conditions);

            $data['ma_pages'] = 'ad_index_articles';

            $data['controller'] = 'library';
            $data['function'] = 'ad_index';


            // Load the list page view
            $this->load->view('layouts/adheader', $data);
            $this->load->view('ad_library/ad_index', $data);
            $this->load->view('layouts/adfooter');

        } else {
            redirect('users/login');
        }


    } // ad_index ends here

    /**
     * add article
     */

    public function add_article()
    {


        if ($this->isUserLoggedIn) {

            $data = $formArray = array();
            $error = '';


            // If create request is submitted
            if ($this->input->post()) {
                // Form field validation rules
                $this->form_validation->set_rules('article_name', 'Titre', 'required');
                $this->form_validation->set_rules('type_id', 'Type de document', 'required');
                switch ($this->input->post('type_id')){
                    case '1':
                        $this->form_validation->set_rules('article_author', 'Auteur', 'required');
                        $this->form_validation->set_rules('article_date_publication', 'Date de publication', 'required');
                        break;
                    case '4' :
                        $this->form_validation->set_rules('article_number', 'Numéro', 'required');
                        $this->form_validation->set_rules('article_date_publication', 'Date de publication', 'required');
                }


                $this->form_validation->set_rules('image', 'image', 'callback_file_check');

                // Prepare gallery data
                $formArray = $this->input->post(NULL, TRUE);

                // Validate submitted form data
                if ($this->form_validation->run() == true) {
                    // Upload image file to the server
                    if (!empty($_FILES['image'])) {
                        $insert = $this->Articles_Model->insert($formArray);
                        if ($insert) {
                            $id = $this->db->insert_id();
                            $file = explode(".", $_FILES["image"]["name"]);
                            $imageExtension = end($file);
                            $imageName = $id .'.'. $imageExtension;
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
                        $update = $this->Articles_Model->update($Array, $id);

                        if ($update) {
                            $this->session->set_userdata('success_msg', 'Ajout - Réussie.');
                            redirect('library/ad_index');
                        } else {
                            $error = 'Quelques problèmes sont survenus, veuillez réessayer.';
                        }
                    }

                    $data['error_msg'] = $error;
                }

            }


            $data['article'] = $formArray;
            $data['type']=$this->Articles_Model->getType();

            $data['controller'] = 'library';
            $data['ma_pages'] = $data['function'] = 'add_article';


            // Load the add page view
            $this->load->view('layouts/adheader', $data);
            $this->load->view('ad_library/add', $data);
            $this->load->view('layouts/adfooter');

        } else {
            redirect('users/login');
        }


    } // add_article ends here

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
     * Edit article
     * @param $id
     */
    public function edit_article($id)
    {

        if ($this->isUserLoggedIn) {

            $data = $formArray = array();

            // Get image data
            $con = array('article_id' => $id);
            $formArray = $this->Articles_Model->getRowsArticle($con);
            $prevFArray = $formArray['file_name'];



            // If update request is submitted
            if ($this->input->post()) {
                // Form field validation rules
                $this->form_validation->set_rules('article_name', 'Titre', 'required');
                $this->form_validation->set_rules('type_id', 'Type de document', 'required');
                switch ($this->input->post('type_id')){
                    case '1':
                        $this->form_validation->set_rules('article_author', 'Auteur', 'required');
                        $this->form_validation->set_rules('article_date_publication', 'Date de publication', 'required');
                        break;
                    case '4' :
                        $this->form_validation->set_rules('article_number', 'Numéro', 'required');
                        $this->form_validation->set_rules('article_date_publication', 'Date de publication', 'required');
                }


                $this->form_validation->set_rules('image', 'image', 'callback_file_check');

                // Prepare gallery data
                $formArray = $this->input->post(NULL, TRUE);
                // Validate submitted form data
                if ($this->form_validation->run() == true) {
                    // Remove old file from the server
                    if (!empty($prevFArray)) {
                        unlink($this->uploadPath . $prevFArray);
                    }

                    // Upload image file to the server
                    if (!empty($_FILES['image']['name'])) {
                        $file = explode(".", $_FILES["image"]["name"]);
                        $imageExtension = end($file);
                        $imageName = $id . "." . $imageExtension;

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
                            $formArray['file_name'] = $imageName;


                        } else {
                            $error = $this->upload->display_errors();
                        }
                    }


                    if (empty($error)) {
                        // Update image data
                        $update = $this->Articles_Model->update($formArray, $id);

                        if ($update) {
                            $this->session->set_userdata('success_msg', 'Mise à jour - Réussie.');
                            redirect('library/ad_index');
                        } else {
                            $error = 'Quelques problèmes sont survenus, veuillez réessayer.';
                        }
                    }

                    $data['error_msg'] = $error;
                }
            }


            $data['article'] = $formArray;
            $data['type']=$this->Articles_Model->getType();

            $data['controller'] = 'library';
            $data['ma_pages'] = $data['function'] = 'edit_article';


            // Load the edit page view
            $this->load->view('layouts/adheader', $data);
            $this->load->view('ad_library/edit', $data);
            $this->load->view('layouts/adfooter');

        } else {
            redirect('users/login');
        }


    } // edit_article ends here

    public function ad_view_($id)
    {

        if ($this->isUserLoggedIn) {

            $data = array();

            // Check whether id is not empty
            if (!empty($id)) {
                $con = array('article_id' => $id);
                $data['article'] = $this->Articles_Model->getRowsArticle($con);

                $data['controller'] = 'library';
                $data['ma_pages'] = $data['function'] = 'ad_view_article';


            } else {
                redirect('library/ad_index');
            }

            // Load the add page view
            $this->load->view('layouts/adheader', $data);
            $this->load->view('ad_library/ad_view', $data);
            $this->load->view('layouts/adfooter');


        } else {
            redirect('users/login');
        }


    } // ad_view_article ends here


    /**
     * delete article
     * @param $id
     */

    public function delete_article($id)
    {

        if ($this->isUserLoggedIn) {
            // Check whether id is not empty
            if ($id) {
                $con = array('article_id' => $id);
                $formArray = $this->Articles_Model->getRowsArticle($con);

                // Delete poster data
                $delete = $this->Articles_Model->delete($id);

                if ($delete) {
                    // Remove file from the server
                    if (!empty($formArray['file_name'])) {
                        unlink($this->uploadPath . $formArray['file_name']);
                    }

                    $this->session->set_userdata('success_msg', 'Suppression - Réussie.');
                    redirect('library/ad_index');
                } else {
                    $this->session->set_userdata('error_msg', 'Veuillez rééssayer');
                }
            }

        } else {
            redirect('users/login');
        }

    } // delete_article ends here




}
