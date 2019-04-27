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
}
