<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message_board extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/message_board
	 *	- or -
	 * 		http://example.com/index.php/message_board/index
	 *	- or -
	* *
	 * Not Applicable*
	 **
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */



	public function __construct()
        {
                parent::__construct();
                $this->load->model('messages_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {

        	$this->load->helper('form');
	        $this->load->library('form_validation');


                $data['messages'] = $this->messages_model->get_messages();
                $data['title'] = 'Messages to the Board';

		        $this->load->view('templates/header', $data);
		        $this->load->view('messages/index', $data);
		        $this->load->view('messages/create', $data);
		        // $this->load->view('message_board', $data);
		        $this->load->view('templates/footer');
        }

        public function view($slug = NULL)
        {
                $data['messages_item'] = $this->messages_model->get_messages($slug);
                 if (empty($data['messages_item']))
		        {
		                show_404();
		        }

		        $data['title'] = $data['messages_item']['title'];

		        $this->load->view('templates/header', $data);
		        $this->load->view('messages/view', $data);
		        $this->load->view('templates/footer');
		}







	public function create()
	{
	    $this->load->helper('form');
	    $this->load->library('form_validation');

	    $data['title'] = 'Create a Message';

	    $this->form_validation->set_rules('name', 'Name', 'required');
	    $this->form_validation->set_rules('message', 'Message', 'required');

	    if ($this->form_validation->run() === FALSE)
	    {
	        $this->load->view('templates/header', $data);

	        $this->load->view('messages/create');
	        $this->load->view('templates/footer');

	    }
	    else
	    {
	        $this->messages_model->set_news();
	        $this->load->view('messages/success');
	    }
	}



	public function edit()
	{
		echo "This is where the edit code will go";
	}

	public function delete()
	{
		$this->site_model->delete_row();
		$this->index();
	}


}
