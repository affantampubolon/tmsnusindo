<?php

class User_model extends CI_Model
{
    public function get($username){
        $this->db->where('username', $username); // Untuk menambahkan Where Clause : username='$username'
        $result = $this->db->get('mst_user')->row(); // Untuk mengeksekusi dan mengambil data hasil query
        // var_dump ($result);
        // die;
        return $result;
    }

}