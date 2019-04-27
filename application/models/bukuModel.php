<?php defined('BASEPATH') OR exit('No direct script access allowed');

class bukuModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }
    
    public function load_data_buku(){
        $data = $this->db->select('*')
        ->from('buku')
        ->get();
        return $data->result();
    }
}
?>