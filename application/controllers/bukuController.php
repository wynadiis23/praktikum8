<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class bukuController extends CI_Controller {

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
		$this->load->database();
		$this->load->helper('url');
		$this->load->model('bukuModel');
    }
     public function index()
	{
        $this->load->view('head');
        $this->load->view('/home/index');
        $this->load->view('foot');
	}
	public function edit(){
		$data['buku'] = $this->bukuModel->ubahDataBuku($this->input->get('id'));
		$this->load->view('head');
		$this->load->view('buku/edit', $data);
		$this->load->view('foot');
	}
	public function save(){
		// $id = $this->input->get('id');
		// $judul = $this->input->get('judul');
		// $pengarang = $this->input->get('pengarang');
		// $penerbit = $this->input->get('penerbit');
		// $tahun = $this->input->get('tahun_terbit');
		// var_dump($judul);
		// $this->bukuModel->saveDataBukuBaru($judul,$pengarang,$penerbit,$tahun,$id);

		// $data['buku'] = $this->bukuModel->load_data_buku();
		// redirect('petugas/dataBuku');
		if( $_SERVER['REQUEST_METHOD'] == 'POST') {
			$id= $this->security->xss_clean( $this->input->post('id'));
			$judul= $this->security->xss_clean( $this->input->post('judul'));
			$pengarang= $this->security->xss_clean( $this->input->post('pengarang'));
            $penerbit= $this->security->xss_clean( $this->input->post('penerbit'));
            $tahun= $this->security->xss_clean( $this->input->post('tahun_terbit'));
			
			
			// $data['kd_anggota'] = $anggota;
            $data['judul_buku'] = $judul;
            $data['pengarang'] = $pengarang;
            $data['penerbit'] = $penerbit;
            $data['tahun_terbit'] = $tahun;
			$this->bukuModel->saveDataBukuBaru($data, $id);
            redirect('petugas/dataBuku');
            // var_dump($data);
		}
	}
	public function hapusDataBuku(){
		$id= $this->security->xss_clean( $this->input->post('id'));
		$this->bukuModel->hapus($id);
		redirect('petugas/dataBuku');
	}
}
