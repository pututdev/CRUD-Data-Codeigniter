<?php


class Peoples_model extends CI_Model{

    public function ambilData()
    {
      return $this->db->get('makhluk')->result_array();
    }

    public function getPeople($limit, $start)
    {
        return $this->db->get('makhluk', $limit, $start)->result_array();
    }

    public function ambilJumlahData()
    {
       return $this->db->get('makhluk')->num_rows();
    }
    
    public function ambilDataById($id)
    {
        return $this->db->get_where('makhluk', ['id' => $id])->row_array();
    }
    public function hapusData($id)
    {
        $this->db->delete('makhluk', ['id' => $id]);
        redirect('peoples');
    }

}


?>