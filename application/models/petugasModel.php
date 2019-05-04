<?php defined('BASEPATH') OR exit('No direct script access allowed');

class petugasModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library("session");
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

        return $this->session->set_flashdata('msg_alert', 'tambah buku berhasil');
    }
    // public function numofrows(){
    //     $num = $this->db->num_rows();
    //     return $num;
    // }
    public function list_all_buku() {
		$data = $this->db->select('*')
					 ->from('buku')->get();
		return $data->result();
	}

    public function hapus($id){
        // // $nama = $this->db->select('kd_anggota')->from('peminjaman')->where('kd_pinjam', $id)->get();
        // $this->db->select('SELECT kd_anggota from peminjaman WHERE kd_pinjam="17"');
        // $query = $this->db->get();
        // var_dump($query);
        // $query = $this->db->query('SELECT kd_anggota FROM peminjaman WHERE kd_pinjam = "$id"');
        // $nama->result();
        // var_dump($nama);
        $this->db->where('kd_pinjam', $id);
        $this->db->delete('peminjaman');
        return $this->session->set_flashdata('msg_alert', 'hapus data peminjaman buku kode '.$id .'berhasil');   
    }
}
?>