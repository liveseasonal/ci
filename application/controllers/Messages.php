<?php
class Messages extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('messages_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                $data['messages'] = $this->messages_model->get_messages();
        }

        public function view($slug = NULL)
        {
                $data['messages_item'] = $this->news_model->get_messages($slug);

                if (empty($data['news_item']))
                {
                        show_404();
                }

                $data['title'] = $data['news_item']['title'];

                $this->load->view('templates/header', $data);
                $this->load->view('messages/view', $data);
                $this->load->view('templates/footer');
        }
}