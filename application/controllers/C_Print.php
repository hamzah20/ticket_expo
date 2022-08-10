<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Print extends CI_Controller { 

	public function printTicket()
	{ 
		// $this->cekStatusEvent(); 
        $id_event = 'EXPOSMG22'; 
 
		$data['data_booth']		= $this->M_Ticket->selectSingularData('V_PRINT_TICKET','ID_EVENT', $id_event);  
		$this->load->view('print/print_ticket',$data); 
	} 

    public function dataTicketPrint(){ 
        $id_booth = $this->input->get('id_booth'); 
        $id_event = 'EXPOSMG22';

        $data_print_ticket	= $this->M_Ticket->selectSingularData('V_PRINT_TICKET','ID_BOOTH', $id_booth);
        foreach ($data_print_ticket->result() as $print); 

        echo json_encode(array(
            'nama_event'        => $print->NAME_EVENT,
            'lokasi_event'      => $print->LOCATION_EVENT,
            'nama_kampus'       => $print->NAME_BOOTH,
            'nomor_tiket'       => $print->CURRENTLY_NUMBER,
        ));

        $data_print_ticket	= $this->M_Ticket->selectDoubleData('V_PRINT_TICKET','ID_EVENT', $id_event, 'ID_BOOTH', $id_booth);
        foreach ($data_print_ticket->result() as $print); 

        // Update currently number setelah di print
        $curNumberOld   = $print->CURRENTLY_NUMBER; 
        $curNumberNow   = $curNumberOld+1; 
        
        $dataUpdate = array(
            'CURRENTLY_NUMBER'  => $curNumberNow
        );
        $this->M_Ticket->updateGeneralData('G_PRINT_TICKET', $dataUpdate, 'ID_BOOTH', $id_booth);
    }

    public function updateCurNumberTicket(){
        // $this->cekStatusEvent(); 
        $id_event = 'EXPOSMG22'; 

        $id_booth = $this->input->get('id_booth'); 

        $data_print_ticket	= $this->M_Ticket->selectDoubleData('V_PRINT_TICKET','ID_EVENT', $id_event, 'ID_BOOTH', $id_booth);
        foreach ($data_print_ticket->result() as $print); 

        // Update currently number setelah di print
        $curNumberOld   = $print->CURRENTLY_NUMBER; 
        $curNumberNow   = $curNumberOld+1; 
        
        $dataUpdate = array(
            'CURRENTLY_NUMBER'  => $curNumberNow
        );
        $this->M_Ticket->updateGeneralData('G_PRINT_TICKET', $dataUpdate, 'ID_BOOTH', $id_booth);
    }

    public function cekStatusEvent(){
        $cekStatus = $this->M_Ticket->selectSingularData('M_EVENT', 'STATUS', 'ACTIVE');
        $countActive = $cekStatus->num_rows();

        if($countActive == 0){
            // Ambil yang berstatus deactive dengan created desc limit 1 
            $this->db->select('*')
                 ->from('M_EVENT')
                 ->order_by('CREATED', 'DESC')
                 ->limit(1);
            $activeDesc = $this->db->get(); 
            foreach ($activeDesc->result() as $act); 
            $id_event   = $act->ID_EVENT;
        }elseif($countActive == 1) {
            $this->db->select('*')
                 ->from('M_EVENT')
                 ->where('STATUS', 'ACTIVE')
                 ->limit(1);
            $activeDesc = $this->db->get(); 
            foreach ($activeDesc->result() as $act); 
            $id_event   = $act->ID_EVENT;
        }elseif($countActive > 1){
             // Ambil yang berstatus active dengan created desc limit 1 
            $this->db->select('*')
                 ->from('M_EVENT')
                 ->where('STATUS', 'ACTIVE')
                 ->order_by('CREATED', 'DESC')
                 ->limit(1);
            $activeDesc = $this->db->get(); 
            foreach ($activeDesc->result() as $act); 
            $id_event   = $act->ID_EVENT;
        } else{
            $this->db->select('*')
                 ->from('M_EVENT') 
                 ->order_by('CREATED', 'DESC')
                 ->limit(1);
            $activeDesc = $this->db->get(); 
            foreach ($activeDesc->result() as $act); 
            $id_event   = $act->ID_EVENT;
        }
    }

    
}