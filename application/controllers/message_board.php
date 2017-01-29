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
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('message_board');
		$this->load->view('templates/footer');
	}

	public function create()
	{
		echo "This is where the create code will go";
	}

	public function edit()
	{
		echo "This is where the edit code will go";
	}

	public function delete()
	{
		echo "This is where the delete code will go";
	}
}
