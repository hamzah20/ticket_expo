<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Ticket extends CI_Controller { 

	function __construct(){
		parent::__construct();		
		$this->load->library('user_agent');
	}

	function index(){
		// Untuk mendapatkan IP Address
		$this->load->library('user_agent');
		$data['browser'] 			= $this->agent->browser();
		$data['browser_version'] 	= $this->agent->version();
		$data['os'] 				= $this->agent->platform();
		$data['ip_address'] 		= $this->input->ip_address(); 

		// Menjadikan IP Address sebagai session untuk dapat dijadikan id user
		$this->load->library('session');
		$this->session->set_userdata('id_user', $this->input->ip_address());
	} 
	
	public function getTicket()
	{
		// Mengambil data IP Address perangkat user
		// $agent = $this->getDataUser();

		$id_event	= 'EXPOTGR22'; //Harus dirubah tiap event
		$id_user	= 'HAMZAH';  
 
		$data['data_booth']		= $this->M_Ticket->selectSingularData('V_BOOTH','ID_EVENT', $id_event); 
		$data['data_ticket_student'] = $this->M_Ticket->selectSingularData('V_TICKET_STUDENT','ID_USER', $id_user);
		$array_ticket_student = [];
		foreach ($data['data_ticket_student']->result() as $single_ticket_student) {
			$array_ticket_student[$single_ticket_student->ID_BOOTH] = true;
		}
		$data['array_ticket_student'] = $array_ticket_student;

		$this->load->view('get_ticket',$data);
	}

	public function listTicket()
	{
		$id_event	= 'EXPOTGR22';
		$id_user 	= 'HAMZAH';
 
		$data['ticket']	= $this->M_Ticket->selectDoubleData('V_TICKET_STUDENT','ID_EVENT', $id_event, 'ID_USER', $id_user); 

		$this->load->view('list_ticket',$data);
	}

	public function locationBooth()
	{
		$id_event	= 'EXPOTGR22';

		$data['booth']	= $this->M_Ticket->selectSingularData('G_BOOTH','ID_EVENT', $id_event);  
		$this->load->view('location_booth',$data);
	} 

	public function showConfirmationTicket(){ 
		$id_booth = $this->input->get('id');
		
        $this->db->select('*')
                 ->from('G_BOOTH')
                 ->where('ID_BOOTH', $id_booth);
        $data['data_booth'] = $this->db->get();

        $this->load->view('modal/confirmationTicket', $data);
	}

	public function confirmationTicket(){ 
		$id_booth 	= $this->input->post('id_booth'); 
		$id_event	= 'EXPOTGR22'; 
		$id_user	= 'HAMZAH';

		// Membuat ID Ticket
		$this->db->select('COUNT(ID_TICKET) AS TOTAL_TICKET')
				 ->from('V_TICKET_STUDENT')
				 ->where('ID_EVENT',$id_event);
		$queryTicket = $this->db->get();
		$totalTicket = $queryTicket->row()->TOTAL_TICKET;
		$newTicket	 = $totalTicket+1;

		// Length dari jumlah ticket
		$lengthTicket = strlen($totalTicket);
		if($lengthTicket == '1'){
			$numTambahan = '0000000'; // Tambahan 0 sebanyak 7x
		} elseif ($lengthTicket == '2') {
			$numTambahan = '000000'; // Tambahan 0 sebanyak 6x
		} elseif ($lengthTicket == '3') {
			$numTambahan = '00000'; // Tambahan 0 sebanyak 5x
		} elseif ($lengthTicket == '4') {
			$numTambahan = '0000'; // Tambahan 0 sebanyak 4x
		} elseif ($lengthTicket == '5') {
			$numTambahan = '000'; // Tambahan 0 sebanyak 3x
		} elseif ($lengthTicket == '6') {
			$numTambahan = '00'; // Tambahan 0 sebanyak 2x
		} elseif ($lengthTicket == '7') {
			$numTambahan = '0'; // Tambahan 0 sebanyak 1x
		} else{
			$numTambahan = ''; // Tambahan 0 sebanyak 1x
		} 

		$id_ticket = 'TIC2201'.$numTambahan.$newTicket; // Ganti event harus ubah kode awal

		// Mencari nomer urut tiket pada booth tersebut
		$this->db->select('COUNT(ID_BOOTH) AS TOTAL_STUDENT_BOOTH') // Mencari total student yang sudah terdaftar di booth tersebut
				 ->from('G_TICKET_STUDENT')
				 ->where('ID_BOOTH',$id_booth);
		$queryStudentBooth = $this->db->get();
		$totalStudentBooth = $queryStudentBooth->row()->TOTAL_STUDENT_BOOTH;
		$newStudentBooth   = $totalStudentBooth+1;

		$dataTicketStudent = array(
			'ID_TICKET'		=> $id_ticket,
			'ID_BOOTH'		=> $id_booth,
			'ID_USER'		=> $id_user,
			'TICKET_NUMBER'	=> $newStudentBooth,
			'CREATED'		=> date('Y-m-d h:i:s'),
			'STATUS'		=> 'ACTIVE'
		);
		$insertTicketStudent = $this->M_Ticket->insertGeneralData('G_TICKET_STUDENT',$dataTicketStudent);
		
		// Mengubah TOTAL_NUMBER pada G_TICKET_BOOTH
		// Mengikuti jumlah peserta yang mengambil tiket pada booth tersebut
		$dataStudentBooth = array(
			'TOTAL_NUMBER'	=> $newStudentBooth
		);
		$updateStudentBooth = $this->M_Ticket->updateGeneralData('G_TICKET_BOOTH',$dataStudentBooth,'ID_BOOTH',$id_booth);

		// Redirect kehalaman list ticket
		redirect(base_url('list_ticket'));
		// exit(); 
	}

	private function getDataUser() {
		// Buat mendapatkan IP Address perangkat user
		if ($this->agent->is_browser()){
			$agent = $this->agent->browser().' '.$this->agent->version();
		} else if ($this->agent->is_mobile()){
			$agent = $this->agent->mobile();
		} else {
			$agent = 'Data user gagal di dapatkan';
		}
		return $agent;
	}
}