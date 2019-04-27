<?php defined('BASEPATH') OR exit('No direct script access allowed');

class homeModel extends CI_Model
{
    private $table = "users";

    public $id;
    public $username;
    public $nama;
    public $password;

    public function __construct()
    {
        parent::__construct();
    }
    
    // public function load_data(){
    //     $data_users = $this->db->get('users');

    //     return $data_users;
    // }
}
?>