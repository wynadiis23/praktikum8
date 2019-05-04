<?php defined('BASEPATH') OR exit('No direct script access allowed');

class bukuModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library("session");
    }
    
    public function load_data_buku(){
        $data = $this->db->select('*')
        ->from('buku')
        ->get();
        return $data->result();
    }

    public function ubahDataBuku($id){
        $query=$this->db->get_where("buku",array('kd_register'=>$id));
        return $query->result();
    }

    public function saveDataBukuBaru($data, $id){
        // $data = array(
        //     'judul_buku' => $judul,
        //     'pengarang' => $pengarang, 
        //     'penerbit' => $penerbit,
        //     'tahun_terbit' => $tahun
        // );

        if($this->db->where('kd_register', $id)){
            // var_dump($id);
            if($this->db->update('buku', $data)){
                $this->session->set_flashdata('msg_alert', 'Update Buku Berhasil');        
            }
        }
        else{
            var_dump($data);
        }
        
    }
    public function hapus($id){

        $this->db->delete('peminjaman',array("kd_pinjam"=>$id));
        $this->db->delete('detil_pinjam',array("kd_register"=>$id));
    }   
}
?>