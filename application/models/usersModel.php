<?php

class usersModel extends CI_Model
{
    public function login($post)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('username', $post['username']);
        $this->db->where('password', md5($post['password']));
        return $this->db->get();
    }
}
