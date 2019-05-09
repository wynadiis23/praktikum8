<?php defined('BASEPATH') OR exit('No direct script access allowed');

class authModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library("session");
    }
    
    // public function load_data(){
    //     $data_users = $this->db->get('users');

    //     return $data_users;
    // }
    public function prosesLogin($email, $password){
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get('petugas');

        if($query->num_rows()>0){
            foreach($query->result() as $row){
                $session = array(
                    'email' => $row->email,
                    'password' => $row->password
                );
                $this->session->get_userdata($session);
                $this->session->set_flashdata('msg_alert', 'Anda telah berhasil login!!');    
                redirect('home');
            }
        }
        else{
            $this->session->set_flashdata('msg_alert_error', 'Email atau Password salah!!!');
            redirect(base_url());
        }
    }
}
?>