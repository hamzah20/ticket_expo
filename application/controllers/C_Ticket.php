<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Ticket extends CI_Controller { 

	public function get_ticket()
	{
		$this->load->view('get_ticket');
	}

	public function list_ticket()
	{
		$this->load->view('list_ticket');
	}

	public function location_booth()
	{
		$this->load->view('location');
	}
}
