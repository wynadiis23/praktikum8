<?php defined('BASEPATH') OR exit('No direct script access allowed');

class anggotaModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library("session");
    }
    
    public function load_data_anggota(){
        $data = $this->db->select('*')
					 ->from('anggota')
					 ->get();
		return $data->result();
    }
    // public function numofrows(){
    //     $num = $this->db->num_rows();
    //     return $num;
    // }
    public function peminjaman($data, $item){
        $this->db->insert('peminjaman', $data);
		$x = $this->db->select('*')
				  ->from('peminjaman as pem')
				  ->order_by('kd_pinjam','desc')
				  ->limit(1)
				  ->get();
		
		$id = $x->row()->kd_pinjam;
		$item['kd_pinjam'] = $id;
		//var_dump($item);
		$this->db->insert('detil_pinjam', $item);
		$this->session->set_flashdata('msg_alert', 'Peminjaman Buku Berhasil');
    }
    public function list_all() {
		$data = $this->db->select('pem.*,dp.*,p.nama as petugas, a.nama as anggota,b.*')
					 ->from('peminjaman as pem')
					 ->join('detil_pinjam as dp','pem.kd_pinjam = dp.kd_pinjam')
					 ->join('petugas as p','pem.kd_petugas = p.kd_petugas')
					 ->join('anggota as a','pem.kd_anggota = a.kd_anggota')
					 ->join('buku as b','dp.kd_register = b.kd_register')
					 ->get();
		return $data->result();

		}
		function data($number,$offset){
			// return $query = $this->db->get('user',$number,$offset)->result();		
			$query = $this->db->select('pem.*,dp.*,p.nama as petugas, a.nama as anggota,b.*')
			->from('peminjaman as pem')
			->join('detil_pinjam as dp','pem.kd_pinjam = dp.kd_pinjam')
			->join('petugas as p','pem.kd_petugas = p.kd_petugas')
			->join('anggota as a','pem.kd_anggota = a.kd_anggota')
			->join('buku as b','dp.kd_register = b.kd_register')->get('peminjaman',$number,$offset);
			return $query->result();
		}
	 
		function jumlah_data(){
			return $this->db->get('peminjaman')->num_rows();
		}
}
?>