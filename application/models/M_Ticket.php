<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_Ticket extends CI_Model
{   
    public function selectSingularData($table, $field, $query)
    {
        $this->db->select('*')
             ->from($table)
             ->where($field, $query);
        $query = $this->db->get();
        return $query;
    } 

    public function selectSingularDataLimit($table, $field, $query)
    {
        $this->db->select('*')
             ->from($table)
             ->where($field, $query)
             ->limit(1);
        $query = $this->db->get();
        return $query;
    } 

    public function selectDoubleData($table, $field1, $query1, $field2, $query2)
    {
        $this->db->select('*')
             ->from($table)
             ->where($field1, $query1)
             ->where($field2, $query2);
        $query = $this->db->get();
        return $query;
    }  

    function selectLastNumber($kode_awal){
        $this->db->select('COUNT(ID_TICKET) as TOTAL') 
                 ->from('G_TICKET_STUDENT') 
                 ->like('ID_TICKET', $kode_awal);
        $lastNumTicket = $this->db->get();
        return $lastNumTicket; 
    }

    public function insertGeneralData($table, $data)
    {
        $query = $this->db->insert($table, $data);
        return $query;
    }

    public function updateGeneralData($table, $data, $filter, $query)
    {
        $this->db->where($filter, $query);
        $query = $this->db->update($table, $data);
        return $query;
    }
}
