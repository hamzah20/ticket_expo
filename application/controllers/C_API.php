<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_API extends CI_Controller { 

	function __construct(){
		parent::__construct();		
		$this->load->library('user_agent');
	}

    public function updateBoothNumber()
    {
        $userData = $this->input->get('userID');
        $boothData = $this->input->get('boothID');

        $curStatus = $this->input->get('status');

        $this->db->where('ID_BOOTH', $boothData)
                 ->where('ID_USER', $userData)
                 ->update('g_ticket_student', array(
                    'STATUS'    => $curStatus
                 ));
    }

    public function getCurrentTicket()
    {
        $boothData = $this->input->get('boothID');

        $this->db->select('*')
                 ->from('g_ticket_student')
                 ->where('ID_BOOTH', $boothData)
                 ->where('STATUS', 'SKIP')
                 ->order_by('ID_TICKET', 'ASC');
        $querySkip = $this->db->get();

        if($querySkip->num_rows() == 0) {
            // echo "Tidak ada status SKIP pada booth ini";

            $this->db->select('*')
                     ->from('g_ticket_student')
                     ->where('ID_BOOTH', $boothData)
                     ->where('STATUS', 'DONE')
                     ->order_by('ID_TICKET', 'ASC');
            $queryDone = $this->db->get();
    
            if($queryDone->num_rows() == 0) {
                // echo "Tidak ada status DONE pada booth ini";

                $this->db->select('*')
                         ->from('g_ticket_student')
                         ->where('ID_BOOTH', $boothData)
                         ->where('STATUS', 'ACTIVE')
                         ->order_by('ID_TICKET', 'ASC')
                         ->limit(1);
                $queryActive = $this->db->get();

                if($queryActive->num_rows() == 0) {
                    // echo 'Belum ada yang mengambil tiket pada booth ini';
                } else {
                    echo $queryActive->row();
                }
            } else {
                echo $queryDone->row()->ID_TICKET + 1;
            }
        }

    }
}
