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
    // public function numofrows(){
    //     $num = $this->db->num_rows();
    //     return $num;
    // }
}
?>