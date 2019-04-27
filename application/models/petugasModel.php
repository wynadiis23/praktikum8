<?php defined('BASEPATH') OR exit('No direct script access allowed');

class petugasModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }
    
    public function load_data_petugas(){
        $data = $this->db->select('*')
					 ->from('petugas')
					 ->get();
		return $data->result();
    }
    public function tambahkanAnggota($data){
        $this->db->insert('anggota', $data);

        return $this->session->set_flashdata('msg_alert', 'tambah anggota berhasil');
    }
    public function tambahkanBuku($data){
        $this->db->insert('buku', $data);

        return $this->session->set_flashdata('msg_alert', 'tambah anggota berhasil');
    }
    // public function numofrows(){
    //     $num = $this->db->num_rows();
    //     return $num;
    // }
}
?>