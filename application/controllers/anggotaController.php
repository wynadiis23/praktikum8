<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class anggotaController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('anggotaModel');
        $this->load->model('petugasModel');
        $this->load->model('bukuModel');
        $this->load->database();
    }
     public function index()
	{
        $data['anggota'] = $this->anggotaModel->load_data_anggota();
        $data['petugas'] = $this->petugasModel->load_data_petugas();
        $data['buku'] = $this->bukuModel->load_data_buku();
        // $data['num_rows'] = $this->anggotaModel->numofrows();

        $this->load->view('head');
        $this->load->view('anggota/index', $data);
        $this->load->view('foot');
    }
    public function peminjaman(){
        $this->load->helper('url');
        if( $_SERVER['REQUEST_METHOD'] == 'POST') {
			$buku= $this->security->xss_clean( $this->input->post('buku'));
			$petugas= $this->security->xss_clean( $this->input->post('petugas'));
			$anggota= $this->security->xss_clean( $this->input->post('anggota'));
			
			
			$data['kd_anggota'] = $anggota;
			$data['kd_petugas'] = $petugas;
			$item['kd_register'] = $buku;
			$item['tgl_pinjam'] = date('Y-m-d');
			$this->anggotaModel->peminjaman($data,$item);
            redirect('/perpus/anggota/riwayatPeminjam');
		}
    }
    public function riwayatPeminjam()
	{
        $data['peminjam'] = $this->anggotaModel->list_all();
        $this->load->view('head');
        $this->load->view('anggota/riwayat_peminjaman',$data);
        $this->load->view('foot');
	}
}
