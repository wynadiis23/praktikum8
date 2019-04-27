<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class petugasController extends CI_Controller {

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
        $this->load->model('petugasModel');
        $this->load->model('anggotaModel');
        $this->load->database();
    }
     public function index()
	{

        $this->load->view('head');
        $this->load->view('anggota/index');
        $this->load->view('foot');
    }
    public function tambah(){
        $this->load->view('head');
        $this->load->view('petugas/create');
        $this->load->view('foot');
    }
    public function tambahkan(){
        if( $_SERVER['REQUEST_METHOD'] == 'POST') {
			$nama= $this->security->xss_clean( $this->input->post('nama'));
			$prodi= $this->security->xss_clean( $this->input->post('prodi'));
            $jenjang= $this->security->xss_clean( $this->input->post('jenjang'));
            $alamat= $this->security->xss_clean( $this->input->post('alamat'));
			
			
			// $data['kd_anggota'] = $anggota;
            $data['nama'] = $nama;
            $data['prodi'] = $prodi;
            $data['jenjang'] = $jenjang;
            $data['alamat'] = $alamat;
			$this->petugasModel->tambahkanAnggota($data);
            redirect('/perpus/anggota/riwayatPeminjam');
		}
    }
    public function tambahBuku(){
        $this->load->view('head');
        $this->load->view('petugas/createBuku');
        $this->load->view('foot');
    }
    public function tambahkanBuku(){
        if( $_SERVER['REQUEST_METHOD'] == 'POST') {
			$judul= $this->security->xss_clean( $this->input->post('judul'));
			$pengarang= $this->security->xss_clean( $this->input->post('pengarang'));
            $penerbit= $this->security->xss_clean( $this->input->post('penerbit'));
            $tahun= $this->security->xss_clean( $this->input->post('tahun'));
			
			
			// $data['kd_anggota'] = $anggota;
            $data['judul_buku'] = $judul;
            $data['pengarang'] = $pengarang;
            $data['penerbit'] = $penerbit;
            $data['tahun_terbit'] = $tahun;
			$this->petugasModel->tambahkanBuku($data);
            redirect('/perpus/anggota/riwayatPeminjam');
		}
    }
    public function riwayatPeminjam()
	{
        $data['peminjam'] = $this->anggotaModel->list_all();
        $this->load->view('head');
        $this->load->view('petugas/dataPeminjaman',$data);
        $this->load->view('foot');
	}
}
