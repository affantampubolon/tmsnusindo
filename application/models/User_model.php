<?php

class User_model extends CI_Model
{
    public function get($username, $password){
        $this->db->where('username', $username); // Untuk menambahkan Where Clause : username='$username'
        $this->db->where('password', $password);
        $result = $this->db->get('mst_user')->row(); // Untuk mengeksekusi dan mengambil data hasil query
        // var_dump ($result);
        // die;
        return $result;
    }
    function register($username,$password,$nama)
	{
		$data_user = array(
			'username'=>$username,
			'password'=>password_hash($password,PASSWORD_DEFAULT),
			'email'=>$email
		);
		$this->db->insert('mst_user',$data_user);
	}

}