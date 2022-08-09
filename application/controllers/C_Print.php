<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Print extends CI_Controller { 

	public function printTicket()
	{ 
		$id_event	= 'EXPOTGR22'; //Harus dirubah tiap event
		$id_user	= 'HAMZAH';  
 
		$data['data_booth']		= $this->M_Ticket->selectSingularData('V_BOOTH','ID_EVENT', $id_event);  
		$this->load->view('print/print_ticket',$data);
	} 
}